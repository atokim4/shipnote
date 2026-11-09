<?php
/**
 * Title: Pricing, three plans
 * Slug: shipnote/pricing
 * Categories: shipnote-launch
 * Keywords: pricing, plans, tiers, subscription
 * Viewport Width: 1400
 * Description: Three plan tickets with a price, a short description, a checklist and a button. The middle plan is inverted. Plans and prices are sample content.
 *
 * @package Shipnote
 * @since 1.0.0
 */

?>
<!-- wp:group {"anchor":"pricing","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div id="pricing" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"36rem","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html_x( 'Pricing', 'Sample section heading', 'shipnote' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html_x( 'Start on the free plan and move up when the team grows. You can switch or cancel at any time.', 'Sample pricing intro', 'shipnote' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"is-style-shipnote-ticket","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-shipnote-ticket" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html_x( 'Starter', 'Sample pricing plan name', 'shipnote' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"shipnote-price","style":{"typography":{"fontWeight":"800","lineHeight":"1"}},"fontSize":"xx-large","fontFamily":"display"} -->
<p class="shipnote-price has-display-font-family has-xx-large-font-size" style="font-weight:800;line-height:1"><?php echo esc_html_x( '$0', 'Sample price', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small","fontFamily":"mono"} -->
<p class="has-mono-font-family has-small-font-size"><?php echo esc_html_x( 'free for three people', 'Sample price unit', 'shipnote' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'For a small team trying the weekly rhythm.', 'Sample pricing plan description', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-shipnote-perforated"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-shipnote-perforated"/>
<!-- /wp:separator -->

<!-- wp:list {"className":"is-style-shipnote-checklist","fontSize":"small"} -->
<ul class="wp-block-list is-style-shipnote-checklist has-small-font-size"><!-- wp:list-item -->
<li><?php echo esc_html_x( 'One shared board', 'Sample pricing feature', 'shipnote' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html_x( 'Weekly recap', 'Sample pricing feature', 'shipnote' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html_x( 'Seven days of history', 'Sample pricing feature', 'shipnote' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"auto"}}}} -->
<div class="wp-block-buttons" style="margin-top:auto"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_x( 'Start free', 'Sample pricing button label', 'shipnote' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-shipnote-ticket","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-shipnote-ticket has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html_x( 'Team', 'Sample pricing plan name', 'shipnote' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"shipnote-price","style":{"typography":{"fontWeight":"800","lineHeight":"1"}},"fontSize":"xx-large","fontFamily":"display"} -->
<p class="shipnote-price has-display-font-family has-xx-large-font-size" style="font-weight:800;line-height:1"><?php echo esc_html_x( '$8', 'Sample price', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small","fontFamily":"mono"} -->
<p class="has-mono-font-family has-small-font-size"><?php echo esc_html_x( 'per person, per month', 'Sample price unit', 'shipnote' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'For teams that plan together every Monday.', 'Sample pricing plan description', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-shipnote-perforated"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-shipnote-perforated"/>
<!-- /wp:separator -->

<!-- wp:list {"className":"is-style-shipnote-checklist","fontSize":"small"} -->
<ul class="wp-block-list is-style-shipnote-checklist has-small-font-size"><!-- wp:list-item -->
<li><?php echo esc_html_x( 'Unlimited boards', 'Sample pricing feature', 'shipnote' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html_x( 'Recaps with comments', 'Sample pricing feature', 'shipnote' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html_x( 'Full history and search', 'Sample pricing feature', 'shipnote' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html_x( 'Calendar sync', 'Sample pricing feature', 'shipnote' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"auto"}}}} -->
<div class="wp-block-buttons" style="margin-top:auto"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_x( 'Try Team', 'Sample pricing button label', 'shipnote' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-shipnote-ticket","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-shipnote-ticket" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html_x( 'Studio', 'Sample pricing plan name', 'shipnote' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"shipnote-price","style":{"typography":{"fontWeight":"800","lineHeight":"1"}},"fontSize":"xx-large","fontFamily":"display"} -->
<p class="shipnote-price has-display-font-family has-xx-large-font-size" style="font-weight:800;line-height:1"><?php echo esc_html_x( '$24', 'Sample price', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small","fontFamily":"mono"} -->
<p class="has-mono-font-family has-small-font-size"><?php echo esc_html_x( 'per person, per month', 'Sample price unit', 'shipnote' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'For several teams sharing one workspace.', 'Sample pricing plan description', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-shipnote-perforated"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-shipnote-perforated"/>
<!-- /wp:separator -->

<!-- wp:list {"className":"is-style-shipnote-checklist","fontSize":"small"} -->
<ul class="wp-block-list is-style-shipnote-checklist has-small-font-size"><!-- wp:list-item -->
<li><?php echo esc_html_x( 'Everything in Team', 'Sample pricing feature', 'shipnote' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html_x( 'Shared roadmaps across teams', 'Sample pricing feature', 'shipnote' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html_x( 'Single sign-on', 'Sample pricing feature', 'shipnote' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html_x( 'Priority email support', 'Sample pricing feature', 'shipnote' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"auto"}}}} -->
<div class="wp-block-buttons" style="margin-top:auto"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_x( 'Talk to us', 'Sample pricing button label', 'shipnote' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
