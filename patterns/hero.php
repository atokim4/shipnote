<?php
/**
 * Title: Hero with product screen
 * Slug: shipnote/hero
 * Categories: shipnote-launch, banner
 * Keywords: hero, landing, launch, screenshot, intro
 * Viewport Width: 1400
 * Description: Large headline, a short pitch with two buttons, and a framed product screenshot.
 *
 * @package Shipnote
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","className":"shipnote-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"0"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull shipnote-hero" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:0"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":1,"className":"shipnote-hero__title","fontSize":"huge"} -->
<h1 class="wp-block-heading shipnote-hero__title has-huge-font-size"><?php echo esc_html_x( 'Plan the week in ten minutes. Spend the rest of it on the work.', 'Sample hero headline', 'shipnote' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"layout":{"selfStretch":"fixed","flexSize":"34rem"}},"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html_x( 'A shared weekly board for small product teams. Drag in what matters, see who is on it, and close the week with a short written recap.', 'Sample hero text', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#pricing"><?php echo esc_html_x( 'Start free', 'Sample button label', 'shipnote' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#pricing"><?php echo esc_html_x( 'See pricing', 'Sample button label', 'shipnote' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem"}},"fontFamily":"mono","textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color has-mono-font-family" style="font-size:0.8125rem"><?php echo esc_html_x( 'Free for teams of three. No card needed.', 'Sample note under the hero buttons', 'shipnote' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"is-style-shipnote-ticket shipnote-frame","style":{"spacing":{"blockGap":"0"},"shadow":"var:preset|shadow|lift"},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide is-style-shipnote-ticket shipnote-frame" style="box-shadow:var(--wp--preset--shadow--lift)"><!-- wp:group {"className":"shipnote-frame__bar","style":{"spacing":{"padding":{"top":"0.6rem","bottom":"0.6rem","left":"1rem","right":"1rem"}},"typography":{"fontSize":"0.8125rem"}},"backgroundColor":"base-2","fontFamily":"mono","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group shipnote-frame__bar has-base-2-background-color has-background has-mono-font-family" style="padding-top:0.6rem;padding-right:1rem;padding-bottom:0.6rem;padding-left:1rem;font-size:0.8125rem"><!-- wp:paragraph -->
<p><?php echo esc_html_x( 'app.example.com/board', 'Sample address shown above the product screenshot', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html_x( 'build 2.4.0', 'Sample build label shown above the product screenshot', 'shipnote' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/app-screen.svg' ) ); ?>" alt="<?php echo esc_attr_x( 'Sample product screen: a weekly board with five cards, four assigned and one still in draft.', 'Alt text of the bundled sample screenshot', 'shipnote' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
