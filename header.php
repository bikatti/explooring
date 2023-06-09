<?php 
/**
 * Tag <html>, the metatags on head,
 * and the header
 *
 * @package    Explooring Theme
 * @since      Explooring Theme 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) :
	exit; // Exit if accessed directly.
endif;
?>
<!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
    <head>
    <?php astra_head_top(); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    <?php astra_head_bottom(); ?>
    </head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
    <?php astra_body_top(); ?>
    <?php wp_body_open(); ?>

    <a
        class="skip-link screen-reader-text"
        href="#content"
        role="link"
        title="<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>">
            <?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>
    </a>

    <div
    <?php
        echo astra_attr(
            'site',
            array(
                'id'    => 'page',
                'class' => 'hfeed site',
            )
        );
        ?>
    >
        <?php
        astra_header_before();

        get_template_part( 'template-parts/menu' );

        get_template_part( 'template-parts/header' );

        astra_header_after();

        astra_content_before();
        ?>
        <div id="content" class="site-content">
            <div class="ast-container">
            <?php //astra_content_top(); ?>