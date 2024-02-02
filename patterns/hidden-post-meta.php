<?php
/**
 * Title: Post meta
 * Slug: intranetbasetheme/hidden-post-meta
 * Inserter: no
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.3em"}},"layout":{"type":"flex","justifyContent":"left"}} -->
	<div class="wp-block-group">
		<!-- wp:post-date {"format":"M j, Y","isLink":false} /-->

		<!-- wp:paragraph {"textColor":"contrast"} -->
		<p class="has-contrast-color has-text-color">—</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"small","textColor":"dark"} -->
		<p class="has-small-font-size has-dark-color has-text-color"><?php echo esc_html_x('by', 'Prefix for the post author block: By author name', 'intranetbasetheme'); ?></p>
		<!-- /wp:paragraph -->

        <!-- wp:post-author-name {"isLink":false, "color": {"textColor: var(--wp--preset--color--contrast)"}} /-->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
