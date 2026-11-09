<?php
/**
 * Shipnote functions and definitions.
 *
 * The theme is a pure block theme: templates, parts and global styles come from
 * the HTML templates and theme.json. This file loads the stylesheet, registers
 * pattern categories and block styles, and points the release notes list at the
 * Changelog category.
 *
 * @package Shipnote
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'shipnote_setup' ) ) :
	/**
	 * Adds editor styles so the editor matches the front end.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function shipnote_setup() {
		add_editor_style( 'assets/css/theme.css' );
	}
endif;
add_action( 'after_setup_theme', 'shipnote_setup' );

if ( ! function_exists( 'shipnote_enqueue_styles' ) ) :
	/**
	 * Enqueues the theme stylesheet on the front end.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function shipnote_enqueue_styles() {
		wp_enqueue_style(
			'shipnote-theme',
			get_theme_file_uri( 'assets/css/theme.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'shipnote_enqueue_styles' );

if ( ! function_exists( 'shipnote_pattern_categories' ) ) :
	/**
	 * Registers the pattern categories used by the bundled patterns.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function shipnote_pattern_categories() {
		register_block_pattern_category(
			'shipnote-launch',
			array(
				'label'       => _x( 'Shipnote: launch page', 'Block pattern category', 'shipnote' ),
				'description' => __( 'Sections for a product landing page.', 'shipnote' ),
			)
		);
		register_block_pattern_category(
			'shipnote-docs',
			array(
				'label'       => _x( 'Shipnote: docs', 'Block pattern category', 'shipnote' ),
				'description' => __( 'Documentation page layouts.', 'shipnote' ),
			)
		);
		register_block_pattern_category(
			'shipnote-releases',
			array(
				'label'       => _x( 'Shipnote: release notes', 'Block pattern category', 'shipnote' ),
				'description' => __( 'Changelog entries and release note layouts.', 'shipnote' ),
			)
		);
	}
endif;
add_action( 'init', 'shipnote_pattern_categories' );

if ( ! function_exists( 'shipnote_block_styles' ) ) :
	/**
	 * Registers block style variations. Their CSS lives in assets/css/theme.css.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function shipnote_block_styles() {
		register_block_style(
			'core/separator',
			array(
				'name'  => 'shipnote-perforated',
				'label' => __( 'Perforated', 'shipnote' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'shipnote-ticket',
				'label' => __( 'Ticket', 'shipnote' ),
			)
		);
		register_block_style(
			'core/paragraph',
			array(
				'name'  => 'shipnote-tag',
				'label' => __( 'Tag', 'shipnote' ),
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'  => 'shipnote-checklist',
				'label' => __( 'Checklist', 'shipnote' ),
			)
		);
	}
endif;
add_action( 'init', 'shipnote_block_styles' );

if ( ! function_exists( 'shipnote_changelog_query' ) ) :
	/**
	 * Points the release notes query loop at the Changelog category.
	 *
	 * The Query Loop block stores categories by term ID, which differs on every
	 * site, so the bundled pattern cannot name the category itself. Query blocks
	 * with the `shipnote-changelog` class get the category added here, unless
	 * the site owner already picked categories or tags in the block settings.
	 * If the category does not exist, the list shows all posts.
	 *
	 * @since 1.0.0
	 *
	 * @param array $parsed_block The block being rendered.
	 * @return array The block, with a category filter for the changelog query.
	 */
	function shipnote_changelog_query( $parsed_block ) {
		if ( 'core/query' !== $parsed_block['blockName'] ) {
			return $parsed_block;
		}

		$attrs   = $parsed_block['attrs'] ?? array();
		$classes = explode( ' ', $attrs['className'] ?? '' );
		if ( ! in_array( 'shipnote-changelog', $classes, true ) || ! empty( $attrs['query']['taxQuery'] ) ) {
			return $parsed_block;
		}

		/**
		 * Filters the slug of the category listed as release notes.
		 *
		 * @since 1.0.0
		 *
		 * @param string $slug Category slug. Default 'changelog'.
		 */
		$slug = apply_filters( 'shipnote_changelog_category', 'changelog' );
		$term = get_term_by( 'slug', $slug, 'category' );
		if ( $term instanceof WP_Term ) {
			$parsed_block['attrs']['query']['taxQuery'] = array( 'category' => array( $term->term_id ) );
		}

		return $parsed_block;
	}
endif;
add_filter( 'render_block_data', 'shipnote_changelog_query' );
