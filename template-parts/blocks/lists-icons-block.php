<?php
/**
 * Block Name: Lista de Iconos + texto (Bloque)
 */
?>

<section class="lists-icons">
    <div class="container">
        <div class="lists-icons-content">
            <ul class="list-none">
                <?php
                if( have_rows('list_icons') ):
                    while( have_rows('list_icons') ) : 
                        the_row();

                        $icon = get_sub_field('icon');
                        $title = get_sub_field('title');
                        $content = get_sub_field('content');
                        ?>
                        <li class="flex flex-col gap-4 md:flex-row md:gap-6">
                            <img src="<?= esc_url( $icon['url']); ?>" alt="<?= esc_attr($icon['alt']); ?>" class="h-[48px] w-[48px]">
                            <div class="">
                                <?= __( $content ); ?>
                            </div>
                        </li>
                    <?php 
                    endwhile;
                endif; 
                ?>
            </ul>
        </div>
    </div>
</section>