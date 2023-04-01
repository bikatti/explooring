<?php
/**
 * Block Name: Articulos (Bloque)
 */

$title = get_field('title');
$link = get_field('link');
$posts = get_field('posts');
?>

<section class="articles py-[120px]">
    <div class="container">
        <div class="articles-content">
            <div class="flex justify-between items-center pb-10">
                <h2 class="text-[44px] leading-[72px]"><?= esc_html( $title ); ?></h2>

                <?php 
                if( !empty( $link ) ) : 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                    <a class="flex gap-4 items-center" href="<?= esc_url( $link_url ); ?>" target="<?= esc_attr( $link_target ); ?>">
                        <span class="text-lg leading-[26px] text-secondary font-medium"><?= esc_html( $link_title ); ?></span>

                        <svg width="52" height="28" viewBox="0 0 52 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="51" height="27" rx="13.5" fill="#E2E700"/>
                            <path d="M17.25 14H34.75M34.75 14L30.375 9.625M34.75 14L30.375 18.375" stroke="#122023" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <rect x="0.5" y="0.5" width="51" height="27" rx="13.5" stroke="#E2E700"/>
                        </svg>
                    </a>
                <?php endif; ?>
            </div>

            <?php
            if( $posts ):
                ?>
                <div class="splide" aria-label="Carousel">
                    <div class="splide__track">
                        <ul class="splide__list md:!grid md:!grid-cols-4 md:!gap-6">
                        <?php
                        foreach( $posts as $post ):  
                            setup_postdata( $post );

                            get_template_part( 
                                'template-parts/archive/post', 
                                '', 
                                $args = array(
                                    'id' => "$post->ID"
                                )
                            );
                        endforeach;
                        ?>
                        </ul>
                    </div>
                </div>
            <?php 
                wp_reset_postdata();
            endif; 
            ?>
        </div>
    </div>
</section>