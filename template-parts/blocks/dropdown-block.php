<?php
/**
 * Block Name: Contenido desplegable (Bloque)
 */
?>

<section class="dropdown">
    <div class="dropdown-content">
        <?php
        if( have_rows('content_dropdown') ):
            while( have_rows('content_dropdown') ) : 
                the_row();
                
                $title = get_sub_field('title');
                $content = get_sub_field('content');
                ?>
                <div class="dropdown-item py-[24px] border-b border-[#00000033]">
                    <div class="dropdown-clic flex gap-4 items-center justify-between cursor-pointer">
                        <h3 class="!text-textColor-dark !font-bold !text-[18px] !leading-[32px] !normal-case !font-sans"><?= esc_html( $title ); ?></h3>

                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 9L12 15L18 9" stroke="#616161" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="dropdown-text"><?= __( $content ); ?></div>
                </div>
            <?php
            endwhile;
        endif; ?>
    </div>
</section>