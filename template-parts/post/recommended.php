<?php
/**
 * Recommended
 */

$argumentos = array(
    'post_type'           => 'post',
    'posts_per_page'      => 4,
    'ignore_sticky_posts' => 1,
    'orderby' => 'rand'
);

$the_query = new WP_Query($argumentos);
?>

<section class="bg-white pt-[92px] pb-[140px]">
    <div class="container max-w-[1260px]">
        <div class="">
            <h2 class="text-center text-[32px] leading-[48px] px-8 pb-[24px]">CONTENIDO RELACIONADO</h2>

            <div class="!grid grid-cols-2 gap-[12px] md:!grid-cols-4 md:!gap-6">
            <?php
            if ( $the_query->have_posts(  ) ) :
                while ( $the_query->have_posts(  ) ) :
                    $the_query->the_post(  );
                    
                    get_template_part( 'template-parts/archive/post' );
                endwhile;
            endif;
            ?>
            </div>
        </div>
    </div>
</section>