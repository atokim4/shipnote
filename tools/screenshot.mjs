/**
 * Renders the theme screenshot (screenshot.png, 1200x900) from a running demo site.
 *
 * Usage: node tools/screenshot.mjs [base-url]
 */
import { chromium } from 'playwright-core';

const base = process.argv[ 2 ] || 'http://127.0.0.1:9401';
const browser = await chromium.launch( {
	executablePath: process.env.CHROME_PATH || '/usr/bin/google-chrome',
	args: [ '--no-sandbox' ],
} );
try {
	// 1200x900 is the size WordPress.org asks for (4:3). The page is laid out at
	// 1440 CSS px and scaled down so the screenshot shows the desktop layout.
	const page = await browser.newPage( { viewport: { width: 1440, height: 1080 }, deviceScaleFactor: 1200 / 1440 } );
	await page.goto( base, { waitUntil: 'load', timeout: 90000 } );
	await page.evaluate( () => document.fonts.ready );
	await page.screenshot( { path: 'screenshot.png' } );
	console.log( 'Saved screenshot.png' );
} finally {
	await browser.close();
}
