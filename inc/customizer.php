<?php
/**
 * Registers options with the Theme Customizer
 *
 * @param      object    $wp_customize    The WordPress Theme Customizer
 * @package    Explooring Theme
 * @since      Explooring Theme 1.0.0
 */


function customize_footer_logo_theme( $wp_customize ) {
    $wp_customize->add_panel( 'text_theme_options', 
    [
        'priority'       => 100,
        'title'            => __( 'Personalización del temas' ),
        'description'      => __( '' ),
    ]);

    $wp_customize->add_section( 'site_footer', 
    [
        'title'         => __( 'Pie de página' ),
        'priority'      => 10,
        'panel'         => 'text_theme_options',
    ]);

    // Setting Image 1
    $wp_customize->add_setting( 'site_footer_logo',
    [
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    ]);
        
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'site_footer_logo',
        [
            'label' => __( 'Logo del pie de página' ),
            'description' => esc_html__( 'Seleccione el logo del Pie de página' ),
            'section' => 'site_footer',
        ]
    ) );


    $wp_customize->add_section( 'site_header', 
    [
        'title'         => __( 'Header' ),
        'priority'      => 9,
        'panel'         => 'text_theme_options',
    ]);

    // Setting Image 1
    $wp_customize->add_setting( 'site_header_logo',
    [
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    ]);
        
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'site_header_logo',
        [
            'label' => __( 'Logo del header' ),
            'description' => esc_html__( 'Seleccione el logo del menu' ),
            'section' => 'site_header',
        ]
    ) );


    // Text
    $wp_customize->add_setting( 'site_header_qoute',
    [
        'default'           => __( 'Cita...' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ]);
    
    $wp_customize->add_control( 'site_header_qoute', 
    [
        'type'        => 'textarea',
        'priority'    => 20,
        'section'     => 'site_header',
        'label'       => 'Cita del autor',
        'description' => '',
    ]);

    $wp_customize->add_setting( 'site_header_author',
    [
        'default'           => __( '' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ]);
    
    $wp_customize->add_control( 'site_header_author', 
    [
        'type'        => 'text',
        'priority'    => 30,
        'section'     => 'site_header',
        'label'       => 'Nombre del author',
        'description' => '',
    ]);


    // 
    $wp_customize->add_section( 'site_archive', 
    [
        'title'         => __( 'Archive' ),
        'priority'      => 40,
        'panel'         => 'text_theme_options',
    ]);

    // Setting Image 1
    $wp_customize->add_setting( 'site_archive_img',
    [
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    ]);
        
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'site_archive_img',
        [
            'label' => __( 'Imagen del hero' ),
            'description' => esc_html__( 'Seleccione la imagen de background de la pagina' ),
            'section' => 'site_archive',
        ]
    ) );

    $wp_customize->add_setting( 'site_archive_title',
    [
        'default'           => __( '' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ]);
    
    $wp_customize->add_control( 'site_archive_title', 
    [
        'type'        => 'text',
        'priority'    => 1 ,
        'section'     => 'site_archive',
        'label'       => 'Titulo',
        'description' => '',
    ]);
}

add_action('customize_register','customize_footer_logo_theme');