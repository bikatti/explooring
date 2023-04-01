<?php
/**
 * Block Name: Testimonios (Bloque)
 */

$title = get_field('titlt');
?>

<section class="testimonials py-16">
    <div class="testimonials-content md:grid md:grid-cols-12 md:items-center">
        <div class="relative  top-[50px] mt-[-50px] md:col-span-3 md:top-auto md:mt-0 md:left-[50px] md:ml-[-50px]">
            <div class="h-[560px] p-[64px] flex items-center justify-center bg-primary rounded-b-[48px] md:rounded-none md:rounded-r-[48px] md:h-[648px]">
                <h2 class="text-[44px] leading-[64px]"><?= esc_html( $title ); ?></h2>
            </div>
        </div>

        <div class="py-[80px] bg-[#F5F5F5] px-[24px] rounded-bl-[48px] md:pl-[48px] md:py-20 md:col-span-9 md:rounded-l-[48px]">
            <?php
            if( have_rows('testimonials') ):
                ?>
                <div class="splide" aria-label="Carousel">
                    <div class="splide__arrows">
                        <button class="splide__arrow splide__arrow--prev">
                            <? get_template_part( 'template-parts/icons/arrow-left' ); ?>
                        </button>
                        <button class="splide__arrow splide__arrow--next">
                            <? get_template_part( 'template-parts/icons/arrow-right' ); ?>
                        </button>
                    </div>
                    <div class="splide__track">
                        <ul class="splide__list">
                        <?php
                        while( have_rows('testimonials') ) : 
                            the_row();
                            $text = get_sub_field('text');
                            $name_testimonials = get_sub_field('name_testimonials');
                            ?>
                            <li class="splide__slide">
                                <div class="h-[488px] p-[12px] flex flex-col justify-center md:h-[648px] md:p-[72px]">
                                    <div class="h-[64px] w-[64px] mb-6">
                                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M47.5286 16.7268C53.4813 21.1911 61.0958 24.785 62.476 32.1642C63.8535 39.5282 59.2189 46.6851 54.186 52.3184C49.8696 57.1496 43.711 59.3638 37.359 60.2772C31.4865 61.1217 25.546 60.3618 20.6149 57.1458C15.6362 53.8989 13.0877 48.5352 10.8539 42.9914C7.80902 35.4345 2.4135 27.5779 5.64677 19.9976C9.15038 11.7835 18.0528 6.14441 26.864 5.4563C35.0488 4.8171 41.0038 11.8334 47.5286 16.7268Z" fill="#E2E700"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0587 18.3432C8.70637 21.3821 5.97607 24.926 4.99099 26.2186L3.19995 28.569V40.0023C3.19995 48.3779 3.32153 51.56 3.65443 51.9008C4.30434 52.5661 27.8495 52.5661 28.4994 51.9008C29.1486 51.2362 29.1486 28.6815 28.4994 28.0169C28.1938 27.704 26.4698 27.5516 23.2293 27.5516H18.4141L18.2024 24.7406C18.0857 23.1948 17.885 20.0976 17.7558 17.8585C17.3612 11.0113 16.6965 11.0593 11.0587 18.3432ZM42.8724 18.3432C40.5201 21.3821 37.7898 24.926 36.8047 26.2186L35.0136 28.569V40.0023C35.0136 48.3779 35.1352 51.56 35.4681 51.9008C36.118 52.5661 59.6632 52.5661 60.3131 51.9008C60.9622 51.2362 60.9622 28.6815 60.3131 28.0169C60.0074 27.704 58.2834 27.5516 55.043 27.5516H50.2278L50.0161 24.7406C49.8994 23.1948 49.6987 20.0976 49.5695 17.8585C49.1749 11.0113 48.5102 11.0593 42.8724 18.3432Z" fill="#122023"/>
                                        </svg>
                                    </div>

                                    <p class="text-lg leading-[32px] pb-5 text-secondary"><?= esc_html( $text ); ?></p>
                                    <div class="flex items-center gap-2">
                                        <svg width="11" height="2" viewBox="0 0 11 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 1H10.6685" stroke="#122023" stroke-opacity="0.64"/>
                                        </svg>

                                        <span class="text-sm font-medium uppercase leading-[20px] text-[#122023A3]"><?= esc_html( $name_testimonials ); ?></span>
                                    </div>
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