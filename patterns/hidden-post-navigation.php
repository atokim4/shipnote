<?php
/**
 * Title: Post navigation
 * Slug: shipnote/hidden-post-navigation
 * Inserter: no
 * Description: Previous and next post links.
 *
 * @package Shipnote
 * @since 1.0.0
 */

?>
<!-- wp:group {"tagName":"nav","ariaLabel":"<?php echo esc_attr__( 'Posts', 'shipnote' ); ?>","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<nav class="wp-block-group has-small-font-size" aria-label="<?php echo esc_attr__( 'Posts', 'shipnote' ); ?>"><!-- wp:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow"} /-->

<!-- wp:post-navigation-link {"showTitle":true,"arrow":"arrow"} /--></nav>
<!-- /wp:group -->
