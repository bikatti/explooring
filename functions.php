<?php
/**
 * Explooring Theme Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Explooring Theme
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_EXPLOORING_VERSION', '1.0.3' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {
	wp_enqueue_style( 'explooring-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_EXPLOORING_VERSION, 'all' );
	wp_enqueue_style( 'explooring-theme-css', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), CHILD_THEME_EXPLOORING_VERSION, 'all' );

	// Splide
	wp_enqueue_style( 'splide-css', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css', '', '2.4.21', 'all' );
    wp_enqueue_script( 'splide', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js', '', '2.4.21', true );
    wp_enqueue_script( 'splide-grid', 'https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-grid@0.4.1/dist/js/splide-extension-grid.min.js', '', '0.4.1', true );
    wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js', '', '3.11.5', true );

	wp_enqueue_script( 'js-custom-child', get_stylesheet_directory_uri( ).'/assets/js/index.js', '', CHILD_THEME_EXPLOORING_VERSION, 'all' );
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );


/**
 * Inc 
 */

locate_template( '/inc/shortcodes.php', true );

locate_template( '/inc/custom-functions.php', true );

locate_template( '/inc/change-structured-wp.php', true );

locate_template( '/inc/custom-taxonomy.php', true );

locate_template( '/inc/customizer.php', true );

locate_template( '/inc/acf-blocks.php', true );

// locate_template( '/inc/custom-post-type.php', true );

// locate_template( '/inc/custom-taxonomy.php', true );