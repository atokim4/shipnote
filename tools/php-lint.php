<?php
/**
 * Syntax check for every PHP file in the theme, run inside WordPress Playground's PHP:
 * npx wp-playground-cli php --php=7.4 --mount=.:/theme tools/php-lint.php
 * (token_get_all with TOKEN_PARSE throws ParseError on invalid syntax.)
 */
$failed = 0;
$files  = array_merge( array( '/theme/functions.php' ), glob( '/theme/patterns/*.php' ) );
foreach ( $files as $file ) {
	try {
		token_get_all( file_get_contents( $file ), TOKEN_PARSE );
		echo 'ok   ' . basename( $file ) . "\n";
	} catch ( ParseError $e ) {
		$failed++;
		echo 'FAIL ' . basename( $file ) . ':' . $e->getLine() . ' ' . $e->getMessage() . "\n";
	}
}
echo ( $failed ? "$failed file(s) with syntax errors" : 'PHP ' . PHP_VERSION . ': all files parse' ) . "\n";
exit( $failed ? 1 : 0 );
