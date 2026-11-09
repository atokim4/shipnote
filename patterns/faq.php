<?php
/**
 * Title: FAQ
 * Slug: shipnote/faq
 * Categories: shipnote-launch, text
 * Keywords: faq, questions, answers, accordion, details
 * Viewport Width: 1400
 * Description: A heading column beside five questions built with the core Details block. Questions and answers are sample content.
 *
 * @package Shipnote
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"34%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html_x( 'Questions', 'Sample section heading', 'shipnote' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html_x( 'The ones people ask before they sign up. Anything else, write to us.', 'Sample FAQ intro', 'shipnote' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66%","className":"shipnote-faq","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column shipnote-faq" style="flex-basis:66%"><!-- wp:details {"className":"shipnote-ruled","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<details class="wp-block-details shipnote-ruled" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><summary><?php echo esc_html_x( 'Is there a free plan?', 'Sample FAQ question', 'shipnote' ); ?></summary><!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html_x( 'Yes. Teams of up to three people can use one board for free, with no time limit and no card on file.', 'Sample FAQ answer', 'shipnote' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"shipnote-ruled","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<details class="wp-block-details shipnote-ruled" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><summary><?php echo esc_html_x( 'Can we import from another tool?', 'Sample FAQ question', 'shipnote' ); ?></summary><!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html_x( 'You can paste a list or upload a CSV. Each line becomes a card, and columns named owner or due date are picked up.', 'Sample FAQ answer', 'shipnote' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"shipnote-ruled","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<details class="wp-block-details shipnote-ruled" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><summary><?php echo esc_html_x( 'What happens to unfinished cards?', 'Sample FAQ question', 'shipnote' ); ?></summary><!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html_x( 'They roll over to next week with a short note about why. Nothing is deleted when a week closes.', 'Sample FAQ answer', 'shipnote' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"shipnote-ruled","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<details class="wp-block-details shipnote-ruled" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><summary><?php echo esc_html_x( 'Does it work offline?', 'Sample FAQ question', 'shipnote' ); ?></summary><!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html_x( 'Edits are stored on the device and sync once the connection is back. Conflicts show both versions so you can pick one.', 'Sample FAQ answer', 'shipnote' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"shipnote-ruled","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<details class="wp-block-details shipnote-ruled" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><summary><?php echo esc_html_x( 'How do I cancel?', 'Sample FAQ question', 'shipnote' ); ?></summary><!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html_x( 'From the billing page, in one step. The board stays readable for 30 days after that, so you can export it.', 'Sample FAQ answer', 'shipnote' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
