/**
 * Opens the block editor of a running Shipnote site and checks that every
 * bundled pattern parses into valid blocks (no "This block contains unexpected
 * or invalid content" in the editor).
 *
 * Usage: node tools/validate-blocks.mjs [base-url]  (default http://127.0.0.1:9401)
 * Logs in as the Playground default admin. Exits 1 if any block is invalid.
 */
import { chromium } from 'playwright-core';

const base = process.argv[ 2 ] || 'http://127.0.0.1:9401';
const browser = await chromium.launch( {
	executablePath: process.env.CHROME_PATH || '/usr/bin/google-chrome',
	args: [ '--no-sandbox' ],
} );

try {
	const page = await browser.newPage();
	await page.goto( `${ base }/wp-login.php` );
	if ( await page.locator( '#user_login' ).count() ) {
		await page.fill( '#user_login', 'admin' );
		await page.fill( '#user_pass', 'password' );
		await page.click( '#wp-submit' );
		await page.waitForLoadState( 'load' );
	}
	await page.goto( `${ base }/wp-admin/post-new.php?post_type=page`, { timeout: 120000 } );
	await page.waitForFunction( () => window.wp?.blocks?.getBlockTypes().length > 50, null, { timeout: 120000 } );

	const report = await page.evaluate( async () => {
		const { blocks, data } = window.wp;
		const settings = data.select( 'core/block-editor' ).getSettings();
		let patterns = settings.__experimentalBlockPatterns || settings.blockPatterns || [];
		if ( ! patterns.some( ( p ) => p.name?.startsWith( 'shipnote/' ) ) ) {
			patterns = await window.wp.apiFetch( { path: '/wp/v2/block-patterns/patterns' } );
		}
		const invalid = [];
		const walk = ( list, name ) => {
			for ( const block of list ) {
				if ( ! block.isValid ) {
					invalid.push( `${ name }: ${ block.name }` );
				}
				walk( block.innerBlocks, name );
			}
		};
		const ours = patterns.filter( ( p ) => p.name.startsWith( 'shipnote/' ) );
		for ( const pattern of ours ) {
			walk( blocks.parse( pattern.content ), pattern.name );
		}
		return { checked: ours.map( ( p ) => p.name ), invalid };
	} );

	console.log( `checked ${ report.checked.length } patterns` );
	for ( const line of report.invalid ) {
		console.log( `INVALID ${ line }` );
	}
	process.exitCode = report.checked.length && ! report.invalid.length ? 0 : 1;
} finally {
	await browser.close();
}
