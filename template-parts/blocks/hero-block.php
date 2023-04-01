<?php
/**
 * Block Name: Hero (Bloque)
 */

$title = get_field('title');
$description = get_field('description');
$btn = get_field('btn');
?>

<section class="hero pt-20 pb-[30px] md:pb-[100px]">
    <div class="container">
        <div class="hero-content relative flex flex-col items-center gap-[40px] md:grid md:grid-cols-2 md:justify-between md:gap-x-[64px]">
            <div class="overflow-hidden grid grid-cols-3 justify-around gap-4 hero-images h-[340px] md:h-[420px] xl:h-full">
                <?php
                if( have_rows('images_group') ):
                    while( have_rows('images_group') ) : 
                        the_row();
                        $image = get_sub_field('image');

                        if( !empty( $image ) ):
                        ?>
                            <div class="h-full relative">
                                <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" />
                            </div>
                        <?php
                        endif;
                    endwhile;
                endif;
                ?>
            </div>

            <div class="">
                <h1 class="text-[44px] leading-[60px] md:text-[64px] md:leading-[80px]"><?= esc_html( $title ); ?></h1>
                <?php if( !empty( $description ) ) : ?>
                    <p class="pt-4 text-lg leading-[32px] text-textColor"><?= esc_html( $description ); ?></p>
                <?php endif; ?>
                <?php 
                if( !empty( $btn ) ) : 
                    $link_url = $btn['url'];
                    $link_title = $btn['title'];
                    $link_target = $btn['target'] ? $btn['target'] : '_self';
                ?>
                    <a class="mt-8 btn btn-primary" href="<?= esc_url( $link_url ); ?>" target="<?= esc_attr( $link_target ); ?>"><?= esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>