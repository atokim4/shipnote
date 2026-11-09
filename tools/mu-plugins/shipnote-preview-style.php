<?php
/**
 * Development helper, never shipped in the theme zip: preview a style variation
 * on the front end with ?shipnote_style=<file name in styles/>, e.g. ?shipnote_style=night.
 * Mounted into Playground's mu-plugins by `npm run demo`.
 *
 * @package Shipnote
 */

add_filter(
	'wp_theme_json_data_user',
	static function ( $theme_json ) {
		$name = isset( $_GET['shipnote_style'] ) ? sanitize_key( wp_unslash( $_GET['shipnote_style'] ) ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Recommended
		$file = get_theme_file_path( "styles/{$name}.json" );
		if ( '' === $name || ! is_readable( $file ) ) {
			return $theme_json;
		}
		$variation = json_decode( file_get_contents( $file ), true ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
		unset( $variation['title'], $variation['$schema'] );
		return $theme_json->update_with( $variation );
	}
);
