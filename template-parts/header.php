<?php
/**
 * Header
 *
 * @package    Explooring Theme
 * @since      Explooring Theme 1.0.0
 */

$blog_info = get_bloginfo( 'name' );
$image     = ( is_page( 'home-new' ) || is_front_page( ) || is_page( ) ) ? get_theme_mod( 'site_header_logo' ) : get_theme_mod( 'site_footer_logo' );
?>

<header class="header fixed top-0 left-0 right-0 z-[100]  <?= ( is_page( 'home-new' ) || is_front_page( ) || is_page( ) ) ? 'bg-white' : ''; ?>">
    <div class="header-container container">
        <div class="header-content flex py-4 justify-between gap-4">
            <a href="<?= esc_url( home_url( ) ); ?>" class="header-logo">
                <img src="<?= esc_url( $image ); ?>" alt="logotipo de <?php esc_attr_e( $blog_info ); ?>">
            </a><!-- .header-logo -->

            <div class="burguer cursor-pointer">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 16H28M4 8H28M4 24H28" stroke="<?= ( is_page( 'home-new' ) || is_front_page( ) || is_page( ) ) ? '#122023' : '#fff'; ?>" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div><!-- .burguer -->
        </div><!-- .header-content -->
    </div><!-- .header-container -->
</header><!-- .header -->