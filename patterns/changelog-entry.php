<?php
/**
 * Title: Release notes entry
 * Slug: shipnote/changelog-entry
 * Categories: shipnote-releases
 * Keywords: changelog, release notes, version, update
 * Viewport Width: 1400
 * Description: One dated release with a version tag and Added, Fixed and Changed lists. Use it as the content of a post in your Changelog category. Sample content.
 *
 * @package Shipnote
 * @since 1.0.0
 */

?>
<!-- wp:group {"className":"shipnote-release","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"},"border":{"top":{"color":"var:preset|color|contrast","width":"2px","style":"solid"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"top"}} -->
<div class="wp-block-group shipnote-release" style="border-top-color:var(--wp--preset--color--contrast);border-top-style:solid;border-top-width:2px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"},"layout":{"selfStretch":"fixed","flexSize":"11rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-shipnote-tag","backgroundColor":"accent","textColor":"on-accent"} -->
<p class="is-style-shipnote-tag has-on-accent-color has-accent-background-color has-text-color has-background"><?php echo esc_html_x( 'v2.4.0', 'Sample version number', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small","fontFamily":"mono"} -->
<p class="has-mono-font-family has-small-font-size"><?php echo esc_html_x( '2026-10-27', 'Sample release date', 'shipnote' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"40rem"}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html_x( 'Recaps you can edit before sending', 'Sample release title', 'shipnote' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-shipnote-tag"} -->
<p class="is-style-shipnote-tag"><?php echo esc_html_x( 'Added', 'Release note section label', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"shipnote-notes"} -->
<ul class="wp-block-list shipnote-notes"><!-- wp:list-item -->
<li><?php echo esc_html_x( 'Recaps open as a draft, so you can trim them before they go to the team chat.', 'Sample release note item', 'shipnote' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html_x( 'Keyboard shortcut R starts a recap from any board.', 'Sample release note item', 'shipnote' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"is-style-shipnote-tag"} -->
<p class="is-style-shipnote-tag"><?php echo esc_html_x( 'Fixed', 'Release note section label', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"shipnote-notes"} -->
<ul class="wp-block-list shipnote-notes"><!-- wp:list-item -->
<li><?php echo esc_html_x( 'Cards dragged between columns on touch screens no longer snap back.', 'Sample release note item', 'shipnote' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html_x( 'Due dates now respect the time zone set in your profile.', 'Sample release note item', 'shipnote' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"is-style-shipnote-tag"} -->
<p class="is-style-shipnote-tag"><?php echo esc_html_x( 'Changed', 'Release note section label', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"shipnote-notes"} -->
<ul class="wp-block-list shipnote-notes"><!-- wp:list-item -->
<li><?php echo esc_html_x( 'Archived boards load the last 12 weeks first; older weeks load as you scroll.', 'Sample release note item', 'shipnote' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
