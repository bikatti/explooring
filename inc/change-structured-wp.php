<?php
/**
 * Change structured wordpress
 *
 * @package    Explooring Theme
 * @since      Explooring Theme 1.0.0
 */


if ( ! function_exists( 'init_template' ) ) {
	function init_template() {
        // add_theme_support('post-thumbnails');
        // add_theme_support( 'title-tag' );
        // add_theme_support( 'custom-header' );
        // add_theme_support( 'custom-logo' );
        // add_theme_support('editor-styles'); 
    
        register_nav_menus( 
            [
                'header_menu' => 'Menú',
                'footer'      => 'Pie de pagina',
            ]
        );
    }

	add_action( 'after_setup_theme', 'init_template', 0 );
}


// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

    global $wp_version;
    if ( $wp_version !== '4.7.1' ) {
       return $data;
    }
  
    $filetype = wp_check_filetype( $filename, $mimes );
  
    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
  
}, 10, 4 );
  
function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
add_filter( 'upload_mimes', 'cc_mime_types' );
  
function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
  }
add_action( 'admin_head', 'fix_svg' );