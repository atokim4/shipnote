<?php
/**
 * Title: Blog heading
 * Slug: shipnote/hidden-blog-heading
 * Inserter: no
 * Description: Heading and intro line for the posts page.
 *
 * @package Shipnote
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"48rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html_x( 'Notes and releases', 'Heading of the posts page', 'shipnote' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html__( 'Everything we have written down, newest first.', 'shipnote' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
