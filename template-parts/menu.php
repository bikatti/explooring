<?php
/**
 * Menu
 *
 * @package    Explooring Theme
 * @since      Explooring Theme 1.0.3
 */

$blog_info = get_bloginfo( 'name' );
$image     = get_theme_mod( 'site_footer_logo' );
$qoute     = get_theme_mod( 'site_header_qoute' );
$author    = get_theme_mod( 'site_header_author' );
?>

<div class="burger-menu bg-secondary fixed w-screen h-screen z-[120] top-[-100vh] left-0 right-0" hidden>
    <div class="container">
        <div class="flex py-8 justify-between gap-4">
            <a href="<?= esc_url( home_url( ) ); ?>" class="header-logo">
                <img src="<?php esc_attr_e( $image ); ?>" alt="logotipo de <?php esc_attr_e( $blog_info ); ?>">
            </a><!-- .header-logo -->

            <div class="close cursor-pointer">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24 8L8 24M8 8L24 24" stroke="#FAFAFA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>

        <div class="mx-auto pt-[36px] md:py-0">
            <nav class="pb-[80px] md:py-[24px]">
                <?php wp_nav_menu(
                    array(
                        'theme_location'  => 'header_menu',
                        'menu_class'      => 'header-list',
                        'container'       => 'ul',
                        )
                ); ?>
            </nav>
    
            <div class="flex flex-col items-center gap-2 justify-center pt-4">
                <svg width="36" height="24" viewBox="0 0 36 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.70367 3.66566L5.70368 3.66565C6.559 2.56062 7.21166 1.74859 7.71568 1.20916C7.96798 0.939137 8.16934 0.752422 8.32881 0.634192C8.41254 0.572116 8.47208 0.538526 8.51051 0.520455C8.54186 0.578551 8.584 0.683183 8.62679 0.858708C8.73911 1.31944 8.80783 2.05084 8.86799 3.09465L8.86799 3.09467C8.94636 4.45338 9.0682 6.33354 9.1392 7.27441C9.1392 7.27444 9.1392 7.27446 9.13921 7.27449L9.26751 8.97806L9.30234 9.44051H9.7661H12.6844C13.6618 9.44051 14.3967 9.46361 14.9044 9.50845C15.1579 9.53083 15.3409 9.5575 15.4636 9.58532C15.4788 9.68419 15.4943 9.81836 15.5095 9.98805C15.5452 10.3882 15.5756 10.9465 15.6 11.6158C15.6489 12.9521 15.6735 14.7046 15.6735 16.46C15.6735 18.2155 15.6489 19.968 15.6 21.3043C15.5756 21.9735 15.5452 22.5319 15.5095 22.932C15.4965 23.0775 15.4832 23.1969 15.4701 23.2904C15.3721 23.3042 15.2455 23.3181 15.0906 23.3318C14.6748 23.3685 14.0936 23.3996 13.3969 23.4247C12.0056 23.4748 10.1791 23.5 8.34963 23.5C6.5202 23.5 4.69367 23.4748 3.30238 23.4247C2.60563 23.3996 2.02448 23.3685 1.60871 23.3318C1.44357 23.3173 1.31078 23.3023 1.21025 23.2876C1.20336 23.2458 1.19621 23.1959 1.18902 23.137C1.15631 22.8689 1.12879 22.4665 1.10711 21.899C1.06387 20.767 1.04541 19.0244 1.04541 16.4863V9.7259L2.02857 8.43568C2.02858 8.43568 2.02858 8.43568 2.02858 8.43567C2.62436 7.65387 4.27805 5.50743 5.70367 3.66566ZM15.5848 9.6213C15.5847 9.62131 15.5835 9.62076 15.5813 9.61959C15.5838 9.6207 15.5849 9.6213 15.5848 9.6213ZM15.4369 9.44741C15.4314 9.43381 15.4318 9.43074 15.436 9.44453C15.4363 9.44537 15.4365 9.44632 15.4369 9.44741ZM15.436 23.4755C15.4318 23.4893 15.4314 23.4862 15.4369 23.4726C15.4365 23.4737 15.4363 23.4747 15.436 23.4755ZM1.24648 23.4478C1.2464 23.448 1.24525 23.4454 1.24326 23.4394C1.24557 23.4446 1.24656 23.4476 1.24648 23.4478ZM28.5485 8.97806L28.5834 9.44051H29.0471H31.9654C32.9429 9.44051 33.6777 9.46361 34.1855 9.50845C34.4389 9.53083 34.6219 9.5575 34.7446 9.58532C34.7598 9.68419 34.7754 9.81836 34.7905 9.98805C34.8262 10.3882 34.8566 10.9465 34.8811 11.6158C34.9299 12.9521 34.9545 14.7046 34.9545 16.46C34.9545 18.2155 34.9299 19.968 34.8811 21.3043C34.8566 21.9735 34.8262 22.5319 34.7905 22.932C34.7775 23.0775 34.7642 23.1969 34.7511 23.2904C34.6531 23.3042 34.5266 23.3181 34.3716 23.3318C33.9558 23.3685 33.3746 23.3996 32.6779 23.4247C31.2866 23.4748 29.4601 23.5 27.6307 23.5C25.8012 23.5 23.9747 23.4748 22.5834 23.4247C21.8867 23.3996 21.3055 23.3685 20.8897 23.3318C20.7246 23.3173 20.5918 23.3023 20.4913 23.2876C20.4844 23.2458 20.4772 23.1959 20.47 23.137C20.4373 22.8689 20.4098 22.4665 20.3881 21.899C20.3449 20.767 20.3264 19.0244 20.3264 16.4863V9.7259L21.3096 8.43568C21.9054 7.65389 23.5591 5.50744 24.9847 3.66566L24.6156 3.37999L24.9847 3.66565C25.84 2.56062 26.4927 1.74859 26.9967 1.20916C27.249 0.939137 27.4504 0.752422 27.6098 0.634192C27.6936 0.572116 27.7531 0.538526 27.7915 0.520455C27.8229 0.578551 27.865 0.683183 27.9078 0.858708C28.0201 1.31944 28.0889 2.05084 28.149 3.09465L28.149 3.09467C28.2274 4.45338 28.3492 6.33354 28.4202 7.27441C28.4202 7.27444 28.4202 7.27446 28.4202 7.27449L28.5485 8.97806ZM34.8658 9.6213C34.8657 9.62127 34.8644 9.62073 34.8623 9.61961C34.8649 9.62074 34.866 9.62134 34.8658 9.6213ZM34.7179 9.44742C34.7124 9.43381 34.7128 9.43073 34.717 9.44453C34.7173 9.44537 34.7176 9.44633 34.7179 9.44742ZM34.717 23.4755C34.7128 23.4893 34.7124 23.4862 34.7179 23.4726C34.7176 23.4737 34.7173 23.4747 34.717 23.4755ZM20.5275 23.4478C20.5275 23.448 20.5263 23.4455 20.5243 23.4394C20.5266 23.4445 20.5276 23.4475 20.5275 23.4478Z" stroke="#E2E700"/>
                </svg>
                <span class="block text-center font-light text-lg text-[#BDBDBD] leading-[28px] pt-[24px]"><?= __( $qoute ); ?></span>
                <div class="flex max-w-[175px] w-full items-center gap-[12px] mx-auto">
                    <div class="h-[1px] w-full bg-textColor-light"></div>
                    <span class="font-light text-lg text-textColor-light leading-[28px] whitespace-nowrap"><?= __( $author ); ?></span>
                    <div class="h-[1px] w-full bg-textColor-light"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="overlay top-[-100vh]" hidden></div>