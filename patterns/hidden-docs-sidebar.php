<?php
/**
 * Title: Docs sidebar
 * Slug: shipnote/hidden-docs-sidebar
 * Inserter: no
 * Description: Content of the docs sidebar template part: a label and a list of pages. To list only your guides, replace the Page List with a Navigation block and pick a Docs menu, or set a parent page in the Page List settings.
 *
 * @package Shipnote
 * @since 1.0.0
 */

?>
<!-- wp:group {"className":"shipnote-docs-nav","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group shipnote-docs-nav" style="padding-top:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"fontFamily":"mono","fontSize":"x-small","textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color has-mono-font-family has-x-small-font-size"><?php echo esc_html_x( 'Documentation', 'Docs sidebar label', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"tagName":"nav","ariaLabel":"<?php echo esc_attr_x( 'Documentation', 'Docs sidebar navigation label', 'shipnote' ); ?>","className":"shipnote-docs-nav__menu","fontSize":"small","fontFamily":"display","layout":{"type":"default"}} -->
<nav class="wp-block-group shipnote-docs-nav__menu has-display-font-family has-small-font-size" aria-label="<?php echo esc_attr_x( 'Documentation', 'Docs sidebar navigation label', 'shipnote' ); ?>"><!-- wp:page-list /--></nav>
<!-- /wp:group --></div>
<!-- /wp:group -->
