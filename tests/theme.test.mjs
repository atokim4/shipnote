/**
 * Static checks for the Shipnote theme files. Run with `npm test`.
 *
 * These catch the mistakes that break a block theme quietly: unbalanced block
 * comments, missing pattern or template part slugs, untranslatable strings,
 * missing font files and colour pairs below WCAG AA.
 */
import assert from 'node:assert/strict';
import { existsSync, readFileSync, readdirSync } from 'node:fs';
import { join, resolve } from 'node:path';
import { describe, it } from 'node:test';
import { fileURLToPath } from 'node:url';

const root = resolve( fileURLToPath( import.meta.url ), '../..' );
const read = ( path ) => readFileSync( join( root, path ), 'utf8' );
const list = ( dir, ext ) =>
	existsSync( join( root, dir ) )
		? readdirSync( join( root, dir ) ).filter( ( f ) => f.endsWith( ext ) ).map( ( f ) => `${ dir }/${ f }` )
		: [];

const theme = JSON.parse( read( 'theme.json' ) );
const templates = list( 'templates', '.html' );
const parts = list( 'parts', '.html' );
const patterns = list( 'patterns', '.php' );
const variations = list( 'styles', '.json' );

/** Returns a list of problems with the block comment structure of `markup`. */
function blockStructureErrors( markup ) {
	const stack = [];
	const errors = [];
	const re = /<!--\s+(\/)?wp:([a-z0-9-]+(?:\/[a-z0-9-]+)?)(?:\s+(\{.*?\}))?\s+(\/)?-->/gs;
	for ( const match of markup.matchAll( re ) ) {
		const [ , closing, name, attrs, selfClosing ] = match;
		if ( attrs && ! attrs.includes( '<?php' ) ) {
			try {
				JSON.parse( attrs );
			} catch {
				errors.push( `invalid JSON attributes on wp:${ name }` );
			}
		}
		if ( selfClosing ) {
			continue;
		}
		if ( closing ) {
			const open = stack.pop();
			if ( open !== name ) {
				errors.push( `closing wp:${ name } but wp:${ open ?? 'nothing' } is open` );
			}
		} else {
			stack.push( name );
		}
	}
	for ( const open of stack ) {
		errors.push( `wp:${ open } is never closed` );
	}
	return errors;
}

/** Reads the docblock header fields of a pattern file. */
function patternHeader( source ) {
	const header = {};
	const doc = source.match( /\/\*\*([\s\S]*?)\*\// )?.[ 1 ] ?? '';
	for ( const line of doc.split( '\n' ) ) {
		const field = line.match( /^\s*\*\s*([A-Za-z ]+):\s*(.+)$/ );
		if ( field ) {
			header[ field[ 1 ].trim() ] = field[ 2 ].trim();
		}
	}
	return header;
}

const patternSlugs = new Set( patterns.map( ( file ) => patternHeader( read( file ) ).Slug ) );

describe( 'theme.json', () => {
	it( 'uses schema version 3', () => {
		assert.equal( theme.version, 3 );
	} );

	it( 'bundles every font file it declares', () => {
		for ( const family of theme.settings.typography.fontFamilies ) {
			for ( const face of family.fontFace ?? [] ) {
				for ( const src of face.src ) {
					assert.match( src, /^file:\.\//, `${ src } must be a local file` );
					assert.ok( existsSync( join( root, src.slice( 'file:./'.length ) ) ), `${ src } is missing` );
				}
			}
		}
	} );

	it( 'has a template file for every custom template', () => {
		for ( const { name } of theme.customTemplates ) {
			assert.ok( existsSync( join( root, 'templates', `${ name }.html` ) ), `templates/${ name }.html` );
		}
	} );

	it( 'has a part file for every template part', () => {
		for ( const { name } of theme.templateParts ) {
			assert.ok( existsSync( join( root, 'parts', `${ name }.html` ) ), `parts/${ name }.html` );
		}
	} );
} );

describe( 'colour contrast (WCAG AA)', () => {
	const luminance = ( hex ) => {
		const [ r, g, b ] = [ 1, 3, 5 ].map( ( i ) => parseInt( hex.slice( i, i + 2 ), 16 ) / 255 );
		const lin = ( c ) => ( c <= 0.04045 ? c / 12.92 : ( ( c + 0.055 ) / 1.055 ) ** 2.4 );
		return 0.2126 * lin( r ) + 0.7152 * lin( g ) + 0.0722 * lin( b );
	};
	const ratio = ( a, b ) => {
		const [ hi, lo ] = [ luminance( a ), luminance( b ) ].sort( ( x, y ) => y - x );
		return ( hi + 0.05 ) / ( lo + 0.05 );
	};
	// Text colour on background colour, as the templates and patterns pair them.
	const pairs = [
		[ 'contrast', 'base' ],
		[ 'contrast-2', 'base' ],
		[ 'accent-2', 'base' ],
		[ 'contrast', 'base-2' ],
		[ 'contrast-2', 'base-2' ],
		[ 'on-accent', 'accent' ],
		[ 'accent', 'on-accent' ],
		[ 'base', 'contrast' ],
	];
	const palettes = [
		[ 'theme.json', theme.settings.color.palette ],
		...variations.map( ( file ) => [ file, JSON.parse( read( file ) ).settings?.color?.palette ] ),
	].filter( ( [ , palette ] ) => palette );

	for ( const [ file, palette ] of palettes ) {
		it( `${ file } text pairs reach 4.5:1`, () => {
			const color = Object.fromEntries( palette.map( ( c ) => [ c.slug, c.color ] ) );
			for ( const [ fg, bg ] of pairs ) {
				const value = ratio( color[ fg ], color[ bg ] );
				assert.ok( value >= 4.5, `${ fg } on ${ bg } is ${ value.toFixed( 2 ) }:1` );
			}
		} );
	}
} );

describe( 'block markup', () => {
	for ( const file of [ ...templates, ...parts, ...patterns ] ) {
		it( `${ file } has balanced block comments`, () => {
			assert.deepEqual( blockStructureErrors( read( file ) ), [] );
		} );
	}

	it( 'templates and parts only reference patterns that exist', () => {
		for ( const file of [ ...templates, ...parts, ...patterns ] ) {
			for ( const [ , slug ] of read( file ).matchAll( /<!-- wp:pattern \{"slug":"([^"]+)"\}/g ) ) {
				assert.ok( patternSlugs.has( slug ), `${ file } uses unknown pattern ${ slug }` );
			}
		}
	} );

	it( 'templates only reference template parts that exist', () => {
		for ( const file of templates ) {
			for ( const [ , slug ] of read( file ).matchAll( /wp:template-part \{"slug":"([^"]+)"/g ) ) {
				assert.ok( existsSync( join( root, 'parts', `${ slug }.html` ) ), `${ file } uses parts/${ slug }.html` );
			}
		}
	} );

	it( 'every template has exactly one <main> element', () => {
		for ( const file of templates ) {
			const count = ( read( file ).match( /<main[\s>]/g ) ?? [] ).length;
			assert.equal( count, 1, `${ file } has ${ count } <main> elements` );
		}
	} );

	it( 'templates and parts contain no user-facing text (it belongs in translatable patterns)', () => {
		for ( const file of [ ...templates, ...parts ] ) {
			const text = read( file )
				.replace( /<!--[\s\S]*?-->/g, '' )
				.replace( /<[^>]+>/g, '' )
				.trim();
			assert.equal( text, '', `${ file } contains text: ${ text.slice( 0, 60 ) }` );
		}
	} );
} );

describe( 'patterns', () => {
	for ( const file of patterns ) {
		const source = read( file );
		const header = patternHeader( source );

		it( `${ file } has a title and a shipnote/ slug that matches the file name`, () => {
			assert.ok( header.Title, 'missing Title' );
			const name = file.replace( /^patterns\/|\.php$/g, '' );
			assert.equal( header.Slug, `shipnote/${ name }` );
		} );

		it( `${ file } wraps every visible string in a translation function`, () => {
			const text = source
				.replace( /<\?php[\s\S]*?\?>/g, '' )
				.replace( /<!--[\s\S]*?-->/g, '' )
				.replace( /<[^>]+>/g, '' )
				.trim();
			assert.equal( text, '', `untranslated text: ${ text.slice( 0, 80 ) }` );
		} );

		it( `${ file } loads no remote images`, () => {
			assert.doesNotMatch( source, /src="https?:\/\//, 'remote image source' );
		} );

		it( `${ file } uses only the shipnote text domain`, () => {
			for ( const [ , domain ] of source.matchAll( /(?:__|_e|_x|esc_html__|esc_html_e|esc_html_x|esc_attr__|esc_attr_e|esc_attr_x)\([^;]*?'([a-z0-9-]+)'\s*\)/g ) ) {
				assert.equal( domain, 'shipnote' );
			}
		} );
	}

	it( 'hidden helper patterns are not shown in the inserter', () => {
		for ( const file of patterns.filter( ( f ) => f.includes( '/hidden-' ) ) ) {
			assert.equal( patternHeader( read( file ) ).Inserter, 'no', file );
		}
	} );
} );

describe( 'changelog list', () => {
	it( 'the release notes query carries the class that functions.php filters on', () => {
		assert.match( read( 'patterns/hidden-release-notes.php' ), /wp:query \{[^\n]*"className":"shipnote-changelog"/ );
		assert.match( read( 'functions.php' ), /'shipnote-changelog'/ );
	} );

	it( 'the Changelog page template and the changelog category archive both use it', () => {
		for ( const file of [ 'templates/page-changelog.html', 'templates/category-changelog.html' ] ) {
			assert.match( read( file ), /"slug":"shipnote\/hidden-release-notes"/, file );
		}
	} );
} );

describe( 'readme.txt and style.css', () => {
	const readme = read( 'readme.txt' );
	const style = read( 'style.css' );

	it( 'readme has a short description of at most 150 characters', () => {
		const headerEnd = readme.indexOf( '\n\n', readme.indexOf( 'License URI:' ) );
		const shortDescription = readme.slice( headerEnd ).trim().split( '\n' )[ 0 ];
		assert.ok( shortDescription.length > 0 && shortDescription.length <= 150, `${ shortDescription.length } chars` );
	} );

	it( 'readme lists atokim4 as the only contributor', () => {
		assert.match( readme, /^Contributors: atokim4$/m );
	} );

	it( 'readme and style.css agree on version and requirements', () => {
		const field = ( text, name ) => text.match( new RegExp( `^${ name }:\\s*(.+)$`, 'm' ) )?.[ 1 ].trim();
		assert.equal( field( readme, 'Stable tag' ), field( style, 'Version' ) );
		for ( const name of [ 'Requires at least', 'Tested up to', 'Requires PHP' ] ) {
			assert.equal( field( readme, name ), field( style, name ), name );
		}
	} );

	it( 'style.css has every header WordPress.org requires', () => {
		for ( const name of [ 'Theme Name', 'Author', 'Description', 'Version', 'Requires at least', 'Tested up to', 'Requires PHP', 'License', 'License URI', 'Text Domain' ] ) {
			assert.match( style, new RegExp( `^${ name }: .+$`, 'm' ), name );
		}
		assert.match( style, /^Text Domain: shipnote$/m );
	} );

	it( 'every bundled font has its licence file next to it', () => {
		for ( const dir of readdirSync( join( root, 'assets/fonts' ) ) ) {
			assert.ok( existsSync( join( root, 'assets/fonts', dir, 'OFL.txt' ) ), `assets/fonts/${ dir }/OFL.txt` );
		}
	} );
} );

describe( 'translation template', () => {
	const pot = existsSync( join( root, 'languages/shipnote.pot' ) ) ? read( 'languages/shipnote.pot' ) : '';
	const version = read( 'style.css' ).match( /^Version:\s*(\S+)/m )[ 1 ];

	it( 'exists and matches the theme version (run npm run pot after a release bump)', () => {
		assert.ok( pot, 'languages/shipnote.pot is missing' );
		assert.match( pot, new RegExp( `Project-Id-Version: Shipnote ${ version.replace( /\./g, '\\.' ) }\\\\n` ) );
	} );

	it( 'contains every gettext string used in the patterns', () => {
		const call = /esc_(?:html|attr)_x\(\s*'((?:[^'\\]|\\.)*)'/g;
		for ( const file of patterns ) {
			for ( const [ , text ] of read( file ).matchAll( call ) ) {
				const msgid = text.replace( /\\'/g, "'" ).replace( /"/g, '\\"' );
				assert.ok( pot.includes( `msgid "${ msgid }"` ), `${ file }: "${ text }" is not in shipnote.pot` );
			}
		}
	} );
} );
