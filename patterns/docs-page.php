<?php
/**
 * Title: Docs page with sidebar
 * Slug: shipnote/docs-page
 * Categories: shipnote-docs
 * Keywords: docs, documentation, guide, sidebar, table of contents
 * Viewport Width: 1400
 * Post Types: page
 * Description: A documentation article with an "On this page" list in a sticky sidebar that links to its sections. Sample content.
 *
 * @package Shipnote
 * @since 1.0.0
 */

?>
<!-- wp:columns {"align":"wide","className":"shipnote-docs","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide shipnote-docs"><!-- wp:column {"width":"14rem","className":"shipnote-docs__aside"} -->
<div class="wp-block-column shipnote-docs__aside" style="flex-basis:14rem"><!-- wp:group {"tagName":"nav","ariaLabel":"<?php echo esc_attr_x( 'On this page', 'Docs table of contents label', 'shipnote' ); ?>","className":"shipnote-toc","style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|30"}}},"fontSize":"small","layout":{"type":"default"}} -->
<nav class="wp-block-group shipnote-toc has-small-font-size" style="padding-top:var(--wp--preset--spacing--30)" aria-label="<?php echo esc_attr_x( 'On this page', 'Docs table of contents label', 'shipnote' ); ?>"><!-- wp:paragraph {"fontFamily":"mono","fontSize":"x-small","textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color has-mono-font-family has-x-small-font-size"><?php echo esc_html_x( 'On this page', 'Docs table of contents label', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"shipnote-toc__list"} -->
<ul class="wp-block-list shipnote-toc__list"><!-- wp:list-item -->
<li><a href="#install"><?php echo esc_html_x( 'Install', 'Sample docs section link', 'shipnote' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#invite"><?php echo esc_html_x( 'Invite the team', 'Sample docs section link', 'shipnote' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#recap"><?php echo esc_html_x( 'Write the recap', 'Sample docs section link', 'shipnote' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></nav>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html_x( 'Set up a board for your team and close your first week. It takes about ten minutes.', 'Sample docs lead paragraph', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"anchor":"install"} -->
<h2 class="wp-block-heading" id="install"><?php echo esc_html_x( 'Install', 'Sample docs section heading', 'shipnote' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Create a board from the dashboard and give it the name of your team. The first week starts on the next Monday, or today if you pick Start now.', 'Sample docs text', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre class="wp-block-code"><code><?php echo esc_html_x( 'weekboard init --team &quot;Product&quot; --start monday', 'Sample command in documentation', 'shipnote' ); ?></code></pre>
<!-- /wp:code -->

<!-- wp:heading {"anchor":"invite"} -->
<h2 class="wp-block-heading" id="invite"><?php echo esc_html_x( 'Invite the team', 'Sample docs section heading', 'shipnote' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Send invites from Settings, then People. Each person gets one link that works for seven days.', 'Sample docs text', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"is-style-shipnote-ticket","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"0.5rem"}},"backgroundColor":"base-2","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-shipnote-ticket has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"className":"is-style-shipnote-tag"} -->
<p class="is-style-shipnote-tag"><?php echo esc_html_x( 'Note', 'Docs callout label', 'shipnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'The free plan has three seats. Invites past that wait until someone upgrades the board.', 'Sample docs callout text', 'shipnote' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"anchor":"recap"} -->
<h2 class="wp-block-heading" id="recap"><?php echo esc_html_x( 'Write the recap', 'Sample docs section heading', 'shipnote' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'When the week closes, the board drafts a recap from the cards that moved. Edit it, then copy it to your chat tool.', 'Sample docs text', 'shipnote' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
