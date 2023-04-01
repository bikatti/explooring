<?php
/**
 * Footer
 *
 * @package    Explooring Theme
 * @since      Explooring Theme 1.0.0
 */

$year = date('Y');
$blog_info = get_bloginfo( 'name' );
$image = get_theme_mod( 'site_footer_logo' );
?>

<footer class="footer pt-20 pb-8 bg-secondary">
    <div class="footer-container container">
        <div class="footer-content">
            <div class="flex flex-col pb-16 gap-[32px] md:justify-between md:items-center md:flex-row">
                <div class="">
                    <img src="<?php esc_attr_e( $image ); ?>" alt="logotipo de <?php esc_attr_e( $blog_info ); ?>">
                    <span class="block text-textColor-normal text-sm leading-[24px] pt-[8px]">
                        Copyright © All right reserved.
                    </span>
                </div>
    
                <div class="">
                    <?php wp_nav_menu(
                        array(
                            'theme_location'  => 'footer',
                            'menu_class'      => 'footer-list',
                            'container'       => 'ul',
                            )
                    ); ?>
                </div>
            </div>

            <div class="text-center font-sans px-4 text-textColor-light text-sm leading-[24px]">
                Hecho con ❤️ por el equipo de Explooring.
            </div>
        </div>
    </div>
</footer>