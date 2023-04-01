<?php
/**
 * Block Name: Grupos de Imagenes (Bloque)
 */
?>

<section class="images-group py-[100px]">
    <div class="container">
        <div class="images-group-content">
            <?php
            if( have_rows('images') ):
                ?>
                <div class="grid grid-cols-2 gap-2 md:grid-cols-4">
                    <?php
                    while( have_rows('images') ) : 
                        the_row();

                        $image = get_sub_field('image');
                        ?>
                        <div class="image-content img-card relative">
                            <div class="crop">
                                <img src= "<?= esc_url( $image['url'] ); ?>" alt="<?= esc_attr( $image['alt'] ); ?>" />
                            </div>

                            <?php if( !empty( $image['caption'] ) ): ?>
                                <div class="content-hover">
                                    <div class="crop-overlay">
                                    </div>
                                    <span class="text-white font-medium text-base leading-[24px] uppercase absolute inset-0 flex items-center justify-center z-[15]"><?= esc_html( $image['caption'] ); ?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>