<?php
/**
 * Title: Page not found
 * Slug: shipnote/hidden-404
 * Inserter: no
 * Description: Content of the 404 template.
 *
 * @package Shipnote
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-shipnote-tag","textColor":"accent-2"} -->
<p class="is-style-shipnote-tag has-accent-2-color has-text-color"><?php echo esc_html_x( 'Error 404', 'Label above the 404 heading', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'This page was moved, renamed or never shipped.', 'shipnote' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Check the address for typos, or search for what you were looking for.', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"shipnote/hidden-search"} /--></div>
<!-- /wp:group -->
