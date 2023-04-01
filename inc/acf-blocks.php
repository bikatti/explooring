<?php
/**
 * Registers ACF Blocks
 *
 * @package    Explooring Theme
 * @since      Explooring Theme 1.0.0
 */


if( function_exists('acf_register_block') ) :
    $result = acf_register_block(array(
        'name'              => 'hero_block',
        'title'             => __('Hero (Bloque)'),
        'description'       => __(''),
        'render_callback'   => 'hero_block_html',
        'category'          => 'layout',
        'icon'              => 'list-view',
    ));
endif;

function hero_block_html() {
    include( get_theme_file_path ('/template-parts/blocks/hero-block.php'));
}

if( function_exists('acf_register_block') ) :
    $result = acf_register_block(array(
        'name'              => 'explore_categories_block',
        'title'             => __('Explora (Bloque)'),
        'description'       => __(''),
        'render_callback'   => 'explore_categories_block_html',
        'category'          => 'layout',
        'icon'              => 'list-view',
    ));
endif;

function explore_categories_block_html() {
    include( get_theme_file_path ('/template-parts/blocks/explore-categories-block.php'));
}

if( function_exists('acf_register_block') ) :
    $result = acf_register_block(array(
        'name'              => 'columns_content_block',
        'title'             => __('Columns Content Block'),
        'description'       => __(''),
        'render_callback'   => 'columns_content_block_html',
        'category'          => 'layout',
        'icon'              => 'list-view',
    ));
endif;

function columns_content_block_html() {
    include( get_theme_file_path ('/template-parts/blocks/columns-content-block.php'));
}

if( function_exists('acf_register_block') ) :
    $result = acf_register_block(array(
        'name'              => 'content_list_block',
        'title'             => __('2 Columnas (Bloque)'),
        'description'       => __(''),
        'render_callback'   => 'content_list_block_html',
        'category'          => 'layout',
        'icon'              => 'list-view',
    ));
endif;

function content_list_block_html() {
    include( get_theme_file_path ('/template-parts/blocks/content-list-block.php'));
}


if( function_exists('acf_register_block') ) :
    $result = acf_register_block(array(
        'name'              => 'most_visited_places_block',
        'title'             => __('Articulos (Bloque)'),
        'description'       => __(''),
        'render_callback'   => 'most_visited_places_block_html',
        'category'          => 'layout',
        'icon'              => 'list-view',
    ));
endif;

function most_visited_places_block_html() {
    include( get_theme_file_path ('/template-parts/blocks/most-visited-places-block.php'));
}

if( function_exists('acf_register_block') ) :
    $result = acf_register_block(array(
        'name'              => 'testimonials_block',
        'title'             => __('Testimonios (Bloque)'),
        'description'       => __(''),
        'render_callback'   => 'testimonials_block_html',
        'category'          => 'layout',
        'icon'              => 'list-view',
    ));
endif;

function testimonials_block_html() {
    include( get_theme_file_path ('/template-parts/blocks/testimonials-block.php'));
}

if( function_exists('acf_register_block') ) :
    $result = acf_register_block(array(
        'name'              => 'images_group_block',
        'title'             => __('Grupos de Imagenes (Bloque)'),
        'description'       => __(''),
        'render_callback'   => 'images_group_block_html',
        'category'          => 'layout',
        'icon'              => 'list-view',
    ));
endif;

function images_group_block_html() {
    include( get_theme_file_path ('/template-parts/blocks/images-group-block.php'));
}

if( function_exists('acf_register_block') ) :
    $result = acf_register_block(array(
        'name'              => 'lists_icons_block',
        'title'             => __('Lista de Iconos + texto (Bloque)'),
        'description'       => __(''),
        'render_callback'   => 'lists_icons_block_html',
        'category'          => 'layout',
        'icon'              => 'list-view',
    ));
endif;

function lists_icons_block_html() {
    include( get_theme_file_path ('/template-parts/blocks/lists-icons-block.php'));
}

if( function_exists('acf_register_block') ) :
    $result = acf_register_block(array(
        'name'              => 'cta_banner_small_block',
        'title'             => __('Banner - CTA (Bloque)'),
        'description'       => __(''),
        'render_callback'   => 'cta_banner_block_html',
        'category'          => 'layout',
        'icon'              => 'list-view',
    ));
endif;

function cta_banner_block_html() {
    include( get_theme_file_path ('/template-parts/blocks/cta-banner-block.php'));
}

if( function_exists('acf_register_block') ) :
    $result = acf_register_block(array(
        'name'              => 'carousel_imgs_block',
        'title'             => __('Imagenes de Carousel (Bloque)'),
        'description'       => __(''),
        'render_callback'   => 'carousel_imgs_block_html',
        'category'          => 'layout',
        'icon'              => 'list-view',
    ));
endif;

function carousel_imgs_block_html() {
    include( get_theme_file_path ('/template-parts/blocks/carousel-imgs-block.php'));
}

if( function_exists('acf_register_block') ) :
    $result = acf_register_block(array(
        'name'              => 'dropdown_block',
        'title'             => __('Contenido desplegable (Bloque)'),
        'description'       => __(''),
        'render_callback'   => 'dropdown_block_html',
        'category'          => 'layout',
        'icon'              => 'list-view',
    ));
endif;

function dropdown_block_html() {
    include( get_theme_file_path ('/template-parts/blocks/dropdown-block.php'));
}

if( function_exists('acf_register_block') ) :
    $result = acf_register_block(array(
        'name'              => 'did_you_know_block',
        'title'             => __('Did you know? (Bloque)'),
        'description'       => __(''),
        'render_callback'   => 'did_you_know_block_html',
        'category'          => 'layout',
        'icon'              => 'list-view',
    ));
endif;

function did_you_know_block_html() {
    include( get_theme_file_path ('/template-parts/blocks/did-you-know-block.php'));
}
