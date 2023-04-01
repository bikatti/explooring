<?php
/**
 * Block Name: Explora (Bloque)
 */

$title = get_field('title');
?>

<section class="explore py-[30px] md:py-20">
    <div class="container max-w-[1312px]">
        <div class="explore-content">
            <h2 class="text-center text-[40px] leading-[56px] pb-10 md:px-8 md:text-[44px] md:leading-[72px]"><?= esc_html( $title ); ?></h2>

            <?php
            if( have_rows('continents') ):
                 ?>
                <div class="flex flex-col !gap-2 md:!grid md:!grid-cols-5">
                    <?php
                    while( have_rows('continents') ) : 
                        the_row();
                        $link = get_sub_field('link');
                        $name_continent = get_sub_field('name_continent');
                        $image = get_sub_field('image');
                        $soon = get_sub_field('soon');

                        $tagContainer = ($soon) ? 'div' : 'a' ;
                        $linkContent = ($tagContainer == 'a') ? 'href="' . $link_url . '" target="' . $link_target . '"' : '' ;
                        
                        if( !empty( $image ) ):
                            ?>
                            <<?= __( $tagContainer ); ?> class="relative overflow-hidden h-[268px] categories-card w-full md:h-[412px]" <?= __( $linkContent ); ?>>
                                <div class="w-full">
                                    <div class="crop">
                                        <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" />
                                    </div>

                                    <?php if ( $soon ) : ?>
                                        <div class="crop-overlay"></div>
                                        <span class="text-white font-medium text-base leading-[24px] uppercase absolute inset-0 flex items-center justify-center z-[15]">
                                            Próximamente
                                        </span>
                                    <?php endif; ?>

                                    <div class="crop-gradient"></div>
                                    <div class="absolute inset-0 flex items-end justify-between p-6 z-[5]">
                                        <span class="font-semibold text-xl leading-[28px] text-white"><?= esc_html( $name_continent ); ?></span>
                                        <? get_template_part( 'template-parts/icons/arrow-right', '', $args = array( 'color' => '#E2E700'  ) ); ?>
                                    </div>
                                </div>
                            </<?= __( $tagContainer ); ?>>
                        <?php
                        endif;
                    endwhile;
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>