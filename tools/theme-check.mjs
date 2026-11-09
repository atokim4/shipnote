/**
 * Runs the Theme Check plugin against the built theme (dist/shipnote) inside a
 * throwaway WordPress Playground, then prints the result.
 *
 * Usage: npm run zip && node tools/theme-check.mjs
 * Exits 1 when Theme Check reports a REQUIRED item or a PHP error.
 */
import { execFileSync } from 'node:child_process';
import { mkdtemp, readFile, rm } from 'node:fs/promises';
import { tmpdir } from 'node:os';
import { dirname, join, resolve } from 'node:path';
import { fileURLToPath } from 'node:url';

const root = resolve( dirname( fileURLToPath( import.meta.url ) ), '..' );
const report = await mkdtemp( join( tmpdir(), 'shipnote-tc-' ) );

try {
	execFileSync(
		'npx',
		[
			'wp-playground-cli',
			'run-blueprint',
			'--blueprint=tools/theme-check.blueprint.json',
			`--mount=${ join( root, 'dist/shipnote' ) }:/wordpress/wp-content/themes/shipnote`,
			`--mount=${ report }:/report`,
			'--verbosity=quiet',
		],
		{ cwd: root, stdio: 'inherit' }
	);
	const result = JSON.parse( await readFile( join( report, 'theme-check.json' ), 'utf8' ) );
	const messages = result.messages.sort();
	for ( const message of messages ) {
		console.log( `- ${ message }` );
	}
	const required = messages.filter( ( m ) => /^(REQUIRED|ERROR|WARNING)/.test( m ) );
	console.log( `\nTheme Check: ${ result.pass ? 'pass' : 'fail' }, ${ required.length } required/warning item(s), ${ messages.length } message(s) total.` );
	process.exitCode = result.pass && required.length === 0 ? 0 : 1;
} finally {
	await rm( report, { recursive: true, force: true } );
}
