<?php
/**
 * Title: Posts list (release-note rows)
 * Slug: shipnote/hidden-posts-list
 * Inserter: no
 * Description: Query loop used by the blog, archive and search templates. Each post is a dated row.
 *
 * @package Shipnote
 * @since 1.0.0
 */

?>
<!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"shipnote-rows","layout":{"type":"default"}} -->
<!-- wp:group {"className":"shipnote-row","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"},"border":{"top":{"color":"var:preset|color|contrast","width":"2px","style":"solid"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"top","justifyContent":"left"}} -->
<div class="wp-block-group shipnote-row" style="border-top-color:var(--wp--preset--color--contrast);border-top-style:solid;border-top-width:2px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"className":"shipnote-row__meta","style":{"spacing":{"blockGap":"0.5rem"},"layout":{"selfStretch":"fixed","flexSize":"11rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group shipnote-row__meta"><!-- wp:post-date {"format":"Y-m-d","isLink":true} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"0.8125rem"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"40rem"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->

<!-- wp:post-excerpt {"moreText":"","excerptLength":32,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Nothing here yet. Try a search, or head back to the home page.', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_attr__( 'Search', 'shipnote' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Search the site', 'shipnote' ); ?>","buttonText":"<?php echo esc_attr__( 'Search', 'shipnote' ); ?>"} /-->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
