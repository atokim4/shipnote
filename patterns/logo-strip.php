<?php
/**
 * Title: Logo strip, text only
 * Slug: shipnote/logo-strip
 * Categories: shipnote-launch, banner
 * Keywords: logos, customers, social proof, names
 * Viewport Width: 1400
 * Description: A ruled row of team names set in the display face, with a label that marks them as sample names. No images needed.
 *
 * @package Shipnote
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","className":"shipnote-logo-strip","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide shipnote-logo-strip" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"textColor":"contrast-2","fontSize":"x-small","fontFamily":"mono"} -->
<p class="has-contrast-2-color has-text-color has-mono-font-family has-x-small-font-size"><?php echo esc_html_x( 'Sample names. List only teams that agreed to it.', 'Logo strip label', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"shipnote-logo-strip__names","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"fontFamily":"display","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group shipnote-logo-strip__names has-display-font-family"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html_x( 'Fieldnote', 'Sample team name', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html_x( 'Larkspur', 'Sample team name', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html_x( 'Ostra Labs', 'Sample team name', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html_x( 'Brightwell', 'Sample team name', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html_x( 'Kettle &amp; Co', 'Sample team name', 'shipnote' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
