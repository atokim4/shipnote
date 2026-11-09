<?php
/**
 * Title: Contact
 * Slug: shipnote/contact
 * Categories: shipnote-launch, contact
 * Keywords: contact, email, support, get in touch
 * Viewport Width: 1400
 * Description: A contact section with an email button and support details on a ticket. It has no form: add the block of a form plugin in the right column if you need one. Sample address on example.com.
 *
 * @package Shipnote
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column"><!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html_x( 'Write to a person', 'Sample section heading', 'shipnote' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html_x( 'Questions about plans, a bug, or an idea for the board. Mail goes to the four of us, and someone answers within a working day.', 'Sample contact text', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:hello@example.com"><?php echo esc_html_x( 'hello@example.com', 'Sample contact email address', 'shipnote' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-shipnote-ticket","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-shipnote-ticket" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html_x( 'Support hours', 'Sample contact detail heading', 'shipnote' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontFamily":"mono","fontSize":"small"} -->
<p class="has-mono-font-family has-small-font-size"><?php echo esc_html_x( 'Monday to Friday, 09:00 to 17:00 UTC', 'Sample support hours', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-shipnote-perforated"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-shipnote-perforated"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html_x( 'Before you write', 'Sample contact detail heading', 'shipnote' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Most setup questions are answered in the docs and the changelog. For a bug, tell us the board name and what you clicked.', 'Sample contact detail text', 'shipnote' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
