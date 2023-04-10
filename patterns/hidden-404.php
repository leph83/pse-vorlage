<?php

/**
 * Title: Hidden 404
 * Slug: pse-vorlage/hidden-404
 * Inserter: no
 */
?>

<!-- wp:group {
    "tagName":"main",
    "className":"main",
    "style":{
        "spacing":{
            "margin":{
                "top":"0"
            }
        }
    },
    "layout":{
        "type":"constrained"
    }
} -->
<main class="wp-block-group main" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

	<!-- wp:heading {"level":1} -->
	<h1 >
		<?php echo esc_html_x('404', 'Error code for a webpage that is not found.', 'twentytwentythree'); ?>
	</h1>
	<!-- /wp:heading -->



	<!-- wp:group {
		"style":{
			"spacing":{
				"margin":{
					"top":"0",
					"bottom":"0"
				}
			}
		},
		"layout":{
			"type":"default"
		}
	} -->
	<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph -->
		<?php echo esc_html_x( 'This page could not be found.', 'Message to convey that a webpage could not be found', 'twentytwentythree' ); ?>
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



</main>
<!-- /wp:group -->