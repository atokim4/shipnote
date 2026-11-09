/**
 * Builds the distributable theme: dist/shipnote/ and dist/shipnote-<version>.zip.
 *
 * Only an allowlist of theme files is copied, so tooling, tests, git data and
 * node_modules never reach the zip that goes to WordPress.org.
 */
import { execFileSync } from 'node:child_process';
import { cp, mkdir, readFile, rm, stat } from 'node:fs/promises';
import { dirname, join, resolve } from 'node:path';
import { fileURLToPath } from 'node:url';

const root = resolve( dirname( fileURLToPath( import.meta.url ) ), '..' );
const dist = join( root, 'dist' );
const target = join( dist, 'shipnote' );

export const THEME_FILES = [
	'style.css',
	'theme.json',
	'functions.php',
	'readme.txt',
	'LICENSE',
	'screenshot.png',
	'templates',
	'parts',
	'patterns',
	'styles',
	'assets',
	'languages',
];

const exists = async ( path ) => stat( path ).then( () => true, () => false );

async function build() {
	const css = await readFile( join( root, 'style.css' ), 'utf8' );
	const version = css.match( /^Version:\s*(\S+)/m )?.[ 1 ];
	if ( ! version ) {
		throw new Error( 'style.css has no Version header' );
	}

	await rm( dist, { recursive: true, force: true } );
	await mkdir( target, { recursive: true } );

	const missing = [];
	for ( const entry of THEME_FILES ) {
		const from = join( root, entry );
		if ( await exists( from ) ) {
			await cp( from, join( target, entry ), { recursive: true } );
		} else {
			missing.push( entry );
		}
	}

	const zip = join( dist, `shipnote-${ version }.zip` );
	execFileSync( 'zip', [ '-r', '-q', '-X', zip, 'shipnote', '-x', '*.DS_Store' ], { cwd: dist } );
	console.log( `Built ${ zip }` );
	if ( missing.length ) {
		console.log( `Not present (skipped): ${ missing.join( ', ' ) }` );
	}
}

build().catch( ( error ) => {
	console.error( error.message );
	process.exit( 1 );
} );
