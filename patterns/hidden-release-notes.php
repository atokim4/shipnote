<?php
/**
 * Title: Release notes list
 * Slug: shipnote/hidden-release-notes
 * Inserter: no
 * Description: Query loop of the Changelog category shown as dated release notes with their full content. Used by the Changelog page template and the changelog category archive. functions.php points it at the category; see shipnote_changelog_query().
 *
 * @package Shipnote
 * @since 1.0.0
 */

?>
<!-- wp:query {"queryId":7,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"shipnote-changelog","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide shipnote-changelog"><!-- wp:post-template {"className":"shipnote-rows","layout":{"type":"default"}} -->
<!-- wp:group {"tagName":"article","className":"shipnote-release","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"},"border":{"top":{"color":"var:preset|color|contrast","width":"2px","style":"solid"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"top"}} -->
<article class="wp-block-group shipnote-release" style="border-top-color:var(--wp--preset--color--contrast);border-top-style:solid;border-top-width:2px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"className":"shipnote-release__meta","style":{"spacing":{"blockGap":"0.5rem"},"layout":{"selfStretch":"fixed","flexSize":"11rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group shipnote-release__meta"><!-- wp:post-date {"format":"Y-m-d","isLink":true,"fontFamily":"mono","fontSize":"small"} /-->

<!-- wp:post-terms {"term":"post_tag","separator":" ","className":"shipnote-release__tags","fontSize":"x-small","fontFamily":"mono"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"40rem"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->

<!-- wp:post-content {"className":"shipnote-release__body","layout":{"type":"default"}} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'No release notes yet. Publish a post in the Changelog category and it shows up here.', 'Empty changelog message', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
