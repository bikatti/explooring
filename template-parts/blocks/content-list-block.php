<?php
/**
 * Block Name: Contenido de Lista (Bloque)
 */

$title = get_field('title');
$bg_img = get_field('bg_img');
?>

<section class="lists relative pt-[152px] pb-[75px] md:py-[152px]">
    <img class="lists-bg" src= "<?= esc_url($bg_img['url']); ?>" alt="<?= esc_attr($bg_img['alt']); ?>" />

    <div class="container">
        <div class="lists-content">
            <h2 class="text-center text-[44px] leading-[72px] px-8 pb-[56px] text-white relative z-10"><?= esc_html( $title ); ?></h2>

            <?php
            if( have_rows('list') ):
                 ?>
                <div class="splide relative z-10" aria-label="Carousel">
                    <div class="splide__arrows block md:hidden">
                        <button class="splide__arrow splide__arrow--prev">
                            <svg width="72" height="40" viewBox="0 0 72 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M46.5 20L25.5 20M25.5 20L30.75 25.25M25.5 20L30.75 14.75" stroke="white" stroke-opacity="0.32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <rect x="0.5" y="0.5" width="71" height="39" rx="19.5" stroke="white" stroke-opacity="0.32"/>
                            </svg>
                        </button>
                        <button class="splide__arrow splide__arrow--next">
                            <svg width="72" height="40" viewBox="0 0 72 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25.5 20H46.5M46.5 20L41.25 14.75M46.5 20L41.25 25.25" stroke="#E2E700" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <rect x="0.5" y="0.5" width="71" height="39" rx="19.5" stroke="#E2E700"/>
                            </svg>
                        </button>
                    </div>
                    <div class="splide__track">
                        <ul class="splide__list md:!grid md:!grid-cols-3 md:!gap-x-8 md:!gap-y-5 md:!justify-around">
                        <?php
                        while( have_rows('list') ) : 
                            the_row();
                            $image = get_sub_field('image');
                            $text = get_sub_field('text');
                            ?>
                            <li class="splide__slide">
                                <div class="flex gap-4 items-center">
                                    <img class="h-[40px] w-[40px]" src= "<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" />
                                    <p class="text-[17px] leading-[24px] text-white"><?= esc_html( $text ); ?></p>
                                </div>
                            </li>
                        <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>