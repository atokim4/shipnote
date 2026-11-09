/**
 * Full-page screenshots of a running Shipnote site, desktop and mobile.
 *
 * Usage: node tools/shoot.mjs <base-url> <out-dir> [path ...]
 * Also reports console errors, horizontal overflow and failed requests per page,
 * and exits 1 if any page has them.
 */
import { mkdir } from 'node:fs/promises';
import { join } from 'node:path';
import { chromium } from 'playwright-core';

const [ base = 'http://127.0.0.1:9400', outDir = 'tmp/shots', ...paths ] = process.argv.slice( 2 );
const targets = paths.length ? paths : [ '/' ];
const viewports = {
	desktop: { width: 1280, height: 800 },
	mobile: { width: 390, height: 844 },
};

const slug = ( path ) => path.replace( /[^a-z0-9]+/gi, '-' ).replace( /^-|-$/g, '' ) || 'home';

await mkdir( outDir, { recursive: true } );
const browser = await chromium.launch( {
	executablePath: process.env.CHROME_PATH || '/usr/bin/google-chrome',
	args: [ '--no-sandbox' ],
} );

let problems = 0;
try {
	for ( const [ name, viewport ] of Object.entries( viewports ) ) {
		const context = await browser.newContext( { viewport, reducedMotion: 'reduce' } );
		for ( const path of targets ) {
			const page = await context.newPage();
			const errors = [];
			page.on( 'console', ( msg ) => {
				// A 404 template is expected to answer 404; that is not a page error.
				const expected404 = msg.text().includes( 'status of 404' ) && msg.location().url === page.url();
				if ( msg.type() === 'error' && ! expected404 ) {
					errors.push( msg.text() );
				}
			} );
			page.on( 'pageerror', ( err ) => errors.push( err.message ) );
			page.on( 'requestfailed', ( req ) => errors.push( `request failed: ${ req.url() }` ) );
			const response = await page.goto( new URL( path, base ).href, { waitUntil: 'load', timeout: 90000 } );
			await page.evaluate( () => document.fonts.ready );
			const overflow = await page.evaluate(
				() => document.documentElement.scrollWidth - document.documentElement.clientWidth
			);
			const file = join( outDir, `${ slug( path ) }-${ name }.png` );
			await page.screenshot( { path: file, fullPage: true } );
			const status = response ? response.status() : 0;
			const flags = [];
			if ( overflow > 0 ) {
				flags.push( `overflow ${ overflow }px` );
			}
			if ( errors.length ) {
				flags.push( `errors: ${ errors.join( ' | ' ) }` );
			}
			problems += flags.length;
			console.log( `${ status } ${ name } ${ path } -> ${ file }${ flags.length ? ' !! ' + flags.join( '; ' ) : '' }` );
			await page.close();
		}
		await context.close();
	}
} finally {
	await browser.close();
}
process.exit( problems ? 1 : 0 );
