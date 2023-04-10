<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

/**
 * pse functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage pse
 * @since pse 1.0
 */


/*
 * ADD style.css
 * set version to last time it was saved
 * also check if the file exists to set version
 * only add file if it exists
 */

function pse_styles()
{
	$css_file = get_stylesheet_directory() . '/style.css';

	if (file_exists($css_file)) {
		$css_version = filemtime($css_file);
		wp_enqueue_style('style', get_stylesheet_uri(), false, $css_version);
	}
}
add_action('wp_enqueue_scripts', 'pse_styles');



/**
 * Add theme support.
 */
function pse_setup()
{
	/*
	 * Load additional block styles.
	 */
	$styled_blocks = [];
	foreach ($styled_blocks as $block_name) {
		$args = array(
			'handle' => "phuc-$block_name",
			'src'    => get_theme_file_uri("assets/css/blocks/$block_name.css"),
			'path'   => get_theme_file_path("assets/css/blocks/$block_name.css"),
		);
		// Replace the "core" prefix if you are styling blocks from plugins.
		wp_enqueue_block_style("core/$block_name", $args);
	}
}
add_action('after_setup_theme', 'pse_setup');
