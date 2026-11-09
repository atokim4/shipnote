<?php
/**
 * Demo content for `npm run demo`: sample pages and release notes for a made-up
 * product called Weekboard. Runs once inside Playground; never shipped.
 *
 * @package Shipnote
 */

require '/wordpress/wp-load.php';

foreach ( get_posts( array( 'post_type' => array( 'post', 'page' ), 'numberposts' => -1, 'post_status' => 'any' ) ) as $old ) {
	wp_delete_post( $old->ID, true );
}

$changelog = wp_insert_term( 'Changelog', 'category', array( 'slug' => 'changelog', 'description' => 'What changed in Weekboard, newest first. Sample release notes.' ) );
$cat_id    = is_wp_error( $changelog ) ? get_term_by( 'slug', 'changelog', 'category' )->term_id : $changelog['term_id'];

/** Block markup for one release-notes section. */
function shipnote_demo_section( $label, array $items ) {
	$lis = '';
	foreach ( $items as $item ) {
		$lis .= "<!-- wp:list-item -->\n<li>" . esc_html( $item ) . "</li>\n<!-- /wp:list-item -->";
	}
	return "<!-- wp:paragraph {\"className\":\"is-style-shipnote-tag\"} -->\n<p class=\"is-style-shipnote-tag\">{$label}</p>\n<!-- /wp:paragraph -->\n\n"
		. "<!-- wp:list {\"className\":\"shipnote-notes\"} -->\n<ul class=\"wp-block-list shipnote-notes\">{$lis}</ul>\n<!-- /wp:list -->\n\n";
}

$releases = array(
	array( '2026-10-27', 'v2.4.0', 'Recaps you can edit before sending', array(
		'Added'   => array( 'Recaps open as a draft, so you can trim them before they go to the team chat.', 'Keyboard shortcut R starts a recap from any board.' ),
		'Fixed'   => array( 'Cards dragged between columns on touch screens no longer snap back.' ),
	) ),
	array( '2026-10-13', 'v2.3.0', 'Calendar sync for Team plans', array(
		'Added'   => array( 'Connect a calendar and cards with a due date show up as all-day events.' ),
		'Changed' => array( 'The weekly view starts on the first day set in your profile.' ),
	) ),
	array( '2026-09-29', 'v2.2.1', 'Faster boards with many cards', array(
		'Fixed'   => array( 'Boards with a few hundred cards open in about half the time they used to.', 'Due dates now respect your time zone.' ),
	) ),
);
foreach ( $releases as list( $date, $version, $title, $sections ) ) {
	$content = '';
	foreach ( $sections as $label => $items ) {
		$content .= shipnote_demo_section( $label, $items );
	}
	wp_insert_post( array(
		'post_title'    => $title,
		'post_content'  => $content,
		'post_excerpt'  => $sections[ array_key_first( $sections ) ][0],
		'post_status'   => 'publish',
		'post_date'     => "{$date} 10:00:00",
		'post_category' => array( $cat_id ),
		'tags_input'    => array( $version ),
	) );
}

wp_insert_post( array(
	'post_title'   => 'How we plan a week in ten minutes',
	'post_content' => "<!-- wp:paragraph -->\n<p>A sample blog post. Monday starts with a clean board and one question for each person: what will you have to show on Friday?</p>\n<!-- /wp:paragraph -->",
	'post_status'  => 'publish',
	'post_date'    => '2026-10-20 09:00:00',
) );

/**
 * Sample docs page body: a few headings, a note and a code block, so the docs
 * template shows real reading rhythm instead of one line.
 */
function shipnote_demo_docs() {
	$blocks = array(
		'<!-- wp:paragraph -->' . "\n" . '<p>Sample documentation for the demo product. The sidebar lists pages; set a parent page in its Page List block to show only your guides.</p>' . "\n" . '<!-- /wp:paragraph -->',
		'<!-- wp:heading -->' . "\n" . '<h2 class="wp-block-heading">Create a board</h2>' . "\n" . '<!-- /wp:heading -->',
		'<!-- wp:paragraph -->' . "\n" . '<p>Every team starts with one board. Give it the name of the team, pick the day your week starts and invite people by email.</p>' . "\n" . '<!-- /wp:paragraph -->',
		'<!-- wp:heading -->' . "\n" . '<h2 class="wp-block-heading">Import cards</h2>' . "\n" . '<!-- /wp:heading -->',
		'<!-- wp:paragraph -->' . "\n" . '<p>Paste a list, one card per line. Lines that start with a name are assigned to that person.</p>' . "\n" . '<!-- /wp:paragraph -->',
		'<!-- wp:code -->' . "\n" . "<pre class=\"wp-block-code\"><code>Aziz: Ship the pricing page\nMaya: Fix the calendar sync\nWrite the Friday recap</code></pre>" . "\n" . '<!-- /wp:code -->',
		'<!-- wp:heading -->' . "\n" . '<h2 class="wp-block-heading">Close the week</h2>' . "\n" . '<!-- /wp:heading -->',
		'<!-- wp:paragraph -->' . "\n" . '<p>On Friday, press Close week. Unfinished cards move to next week with a short note, and the recap opens as a draft you can edit.</p>' . "\n" . '<!-- /wp:paragraph -->',
	);
	return implode( "\n\n", $blocks );
}

$pages = array(
	array( 'Features', '<!-- wp:pattern {"slug":"shipnote/feature-grid"} /-->' . "\n\n" . '<!-- wp:pattern {"slug":"shipnote/testimonials"} /-->', 'page-no-title' ),
	array( 'Pricing', '<!-- wp:pattern {"slug":"shipnote/pricing"} /-->' . "\n\n" . '<!-- wp:pattern {"slug":"shipnote/faq"} /-->', 'page-no-title' ),
	array( 'Docs', shipnote_demo_docs(), 'page-docs' ),
	array( 'Getting started', '<!-- wp:pattern {"slug":"shipnote/docs-page"} /-->', 'page-wide' ),
	array( 'Changelog', "<!-- wp:paragraph -->\n<p>Every release, newest first. These are sample release notes.</p>\n<!-- /wp:paragraph -->", 'page-changelog' ),
	array( 'About', '<!-- wp:pattern {"slug":"shipnote/team"} /-->' . "\n\n" . '<!-- wp:pattern {"slug":"shipnote/contact"} /-->', 'page-no-title' ),
);
foreach ( $pages as $order => list( $title, $content, $template ) ) {
	wp_insert_post( array(
		'post_type'    => 'page',
		'post_title'   => $title,
		'post_content' => $content,
		'post_status'  => 'publish',
		'menu_order'   => $order + 1,
		'page_template' => $template,
	) );
}
