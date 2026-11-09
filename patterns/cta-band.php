<?php
/**
 * Title: Call to action band
 * Slug: shipnote/cta-band
 * Categories: shipnote-launch, call-to-action
 * Keywords: cta, call to action, signup, banner
 * Viewport Width: 1400
 * Description: A full-width signal-orange band with a large line of copy and one button.
 *
 * @package Shipnote
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"border":{"top":{"color":"var:preset|color|on-accent","width":"2px","style":"solid"}}},"backgroundColor":"accent","textColor":"on-accent","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-on-accent-color has-accent-background-color has-text-color has-background" style="border-top-color:var(--wp--preset--color--on-accent);border-top-style:solid;border-top-width:2px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"style":{"layout":{"selfStretch":"fixed","flexSize":"44rem"},"typography":{"lineHeight":"1"}},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size" style="line-height:1"><?php echo esc_html_x( 'Try it for one week. Keep the recap either way.', 'Sample call to action heading', 'shipnote' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"on-accent","textColor":"accent"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-accent-color has-on-accent-background-color has-text-color has-background wp-element-button" href="#pricing"><?php echo esc_html_x( 'Start your first week', 'Sample call to action button', 'shipnote' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
