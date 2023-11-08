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
 * Add style.css to admin
 */
function load_admin_style() {
    wp_enqueue_style( 'style', get_stylesheet_uri(), false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'load_admin_style' );

/**
 * Register Block Styles
 */
function pse_register_block_styles() {
	register_block_style(
        'core/group',
        array(
            'name' => 'custom',
            'label' => __( 'custom', 'pse-vorlage' )
		)
    );
}
add_action( 'init', 'pse_register_block_styles' );