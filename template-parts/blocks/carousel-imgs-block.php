<?php
/**
 * Block Name: Imagenes de Carousel (Bloque)
 */
?>

<section class="images-carousel">
    <div class="images-carousel-content">
        <?php
        if( have_rows('images_gallery') ):
                ?>
            <div class="splide" aria-label="Carousel">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php
                        while( have_rows('images_gallery') ) : 
                            the_row();
                            $image = get_sub_field('image');
                            $note = get_sub_field('note');

                            if( !empty( $image ) ):
                                ?>
                                <li class="splide__slide">
                                    <div class="relative overflow-hidden img-card w-full">
                                        <div class="crop">
                                            <img src="<?= esc_url( $image['url'] ); ?>" alt="<?= esc_attr( $image['alt'] ); ?>" />
                                        </div>

                                        <?php if ( !empty( $note ) ) : ?>
                                            <span class="block pt-4 text-textColor-dark uppercase text-base leading-[26px]"><?= esc_html( $note ); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </li>
                            <?php
                            endif;
                        endwhile;
                        ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>