<?php
/**
 * Title: Feature grid
 * Slug: shipnote/feature-grid
 * Categories: shipnote-launch, featured
 * Keywords: features, grid, benefits, columns
 * Viewport Width: 1400
 * Description: A section heading beside four ruled feature notes in a two-column grid.
 *
 * @package Shipnote
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"34%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html_x( 'Made for teams that ship every week', 'Sample section heading', 'shipnote' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html_x( 'Four small habits the board nudges you into, so Friday ends with something to show.', 'Sample section text', 'shipnote' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66%"} -->
<div class="wp-block-column" style="flex-basis:66%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"15rem"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"shipnote-ruled","style":{"spacing":{"padding":{"top":"var:preset|spacing|30"},"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group shipnote-ruled" style="padding-top:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html_x( 'One board per week', 'Sample feature title', 'shipnote' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html_x( 'Every Monday starts clean. Cards you did not finish roll over with a line about why.', 'Sample feature description', 'shipnote' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"shipnote-ruled","style":{"spacing":{"padding":{"top":"var:preset|spacing|30"},"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group shipnote-ruled" style="padding-top:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html_x( 'One owner per card', 'Sample feature title', 'shipnote' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html_x( 'Shared cards tend to stall, so each card carries exactly one name.', 'Sample feature description', 'shipnote' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"shipnote-ruled","style":{"spacing":{"padding":{"top":"var:preset|spacing|30"},"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group shipnote-ruled" style="padding-top:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html_x( 'A recap at the end', 'Sample feature title', 'shipnote' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html_x( 'Close the week and the board turns into a short summary you can paste into the team chat.', 'Sample feature description', 'shipnote' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"shipnote-ruled","style":{"spacing":{"padding":{"top":"var:preset|spacing|30"},"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group shipnote-ruled" style="padding-top:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html_x( 'Offline first', 'Sample feature title', 'shipnote' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html_x( 'Edits are saved on your device and sync when the connection comes back.', 'Sample feature description', 'shipnote' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
