<?php
/**
 * Title: Footer
 * Slug: shipnote/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Site title and tagline, a navigation menu, and a small print line.
 *
 * @package Shipnote
 * @since 1.0.0
 */

?>
<!-- wp:group {"className":"shipnote-footer","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|60"},"border":{"top":{"color":"var:preset|color|contrast","width":"2px","style":"solid"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group shipnote-footer" style="border-top-color:var(--wp--preset--color--contrast);border-top-style:solid;border-top-width:2px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0,"fontSize":"x-large"} /-->

<!-- wp:site-tagline {"textColor":"contrast-2","fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"nav","ariaLabel":"<?php echo esc_attr__( 'Footer', 'shipnote' ); ?>","className":"shipnote-footer__nav","fontSize":"small","fontFamily":"display","layout":{"type":"default"}} -->
<nav class="wp-block-group shipnote-footer__nav has-display-font-family has-small-font-size" aria-label="<?php echo esc_attr__( 'Footer', 'shipnote' ); ?>"><!-- wp:page-list /--></nav>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|rule","width":"1px","style":"solid"}}},"textColor":"contrast-2","fontSize":"x-small","fontFamily":"mono","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide has-contrast-2-color has-text-color has-mono-font-family has-x-small-font-size" style="border-top-color:var(--wp--preset--color--rule);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--30)"><!-- wp:paragraph -->
<p><?php
	/* translators: 1: Current year, 2: Site title. */
	echo esc_html( sprintf( __( '© %1$s %2$s', 'shipnote' ), gmdate( 'Y' ), get_bloginfo( 'name' ) ) );
?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php
	printf(
		/* translators: %s: WordPress, linked to wordpress.org. */
		esc_html__( 'Powered by %s', 'shipnote' ),
		'<a href="' . esc_url( __( 'https://wordpress.org', 'shipnote' ) ) . '" rel="nofollow">WordPress</a>'
	);
?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
