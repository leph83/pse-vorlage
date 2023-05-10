<?php
/**
 * Title: Hidden 404
 * Slug: pse-vorlage/hidden-404
 * Inserter: no
 */
?>



<!-- wp:group {
	"layout":{
		"type":"constrained"
	}
} -->
<div class="wp-block-group">

	<!-- wp:heading {"level":1} -->
	<h1>
		<?php echo esc_html_x('404', 'Error code for a webpage that is not found.', 'pse-vorlage'); ?>
	</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p>
	<?php echo esc_html_x('This page could not be found.', 'Message to convey that a webpage could not be found', 'pse-vorlage'); ?>
	</p>
	<!-- /wp:paragraph -->

	<!-- wp:search {
			"label":"Search",
			"showLabel":false,
			"placeholder":"Search...",
			"width":100,
			"widthUnit":"%",
			"buttonText":"Search",
			"buttonUseIcon":true,
			"align":"center"
		} /-->
</div>
<!-- /wp:group -->