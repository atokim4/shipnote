<?php
/**
 * Title: Latest notes
 * Slug: shipnote/hidden-latest-notes
 * Inserter: no
 * Description: The three newest posts as dated rows, used on the front page.
 *
 * @package Shipnote
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"align":"wide","fontSize":"xx-large"} -->
<h2 class="wp-block-heading alignwide has-xx-large-font-size"><?php echo esc_html__( 'Latest notes', 'shipnote' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"shipnote-rows","layout":{"type":"default"}} -->
<!-- wp:group {"className":"shipnote-row","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"},"border":{"top":{"color":"var:preset|color|contrast","width":"2px","style":"solid"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"top","justifyContent":"left"}} -->
<div class="wp-block-group shipnote-row" style="border-top-color:var(--wp--preset--color--contrast);border-top-style:solid;border-top-width:2px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:post-date {"format":"Y-m-d","isLink":true,"style":{"layout":{"selfStretch":"fixed","flexSize":"11rem"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"40rem"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /-->

<!-- wp:post-excerpt {"moreText":"","excerptLength":24,"textColor":"contrast-2","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html__( 'No posts yet. Your first release note will show up here.', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
