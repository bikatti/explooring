<?php
/**
 * Header archive
 */

$bg_img = get_theme_mod( 'site_archive_img' );
$title = get_theme_mod( 'site_archive_title' );
?>

<section class="archive-header overflow-hidden h-[375px] relative md:h-[360px]">
    <div class="crop-overlay"></div>
    <img class="archive-header-bg" src= "<?= esc_url( $bg_img ); ?>" alt="archive" />

    <div class="relative z-[15] flex flex-col justify-center h-full px-[24px] max-w-[654px] mx-auto mt-8 px-4 gap-2">
        <h1 class="text-[36px] leading-[52px] text-white uppercase md:text-[44px] md:leading-[60px]"><?= __( $title ); ?></h1>
        <span class="text-sm leading-[32px] text-[#E0E0E0] md:text-base">5 Continentes   •   +10,000 experiencias</span>
        <?php get_template_part( 'searchform' ); ?>
    </div>
</section>