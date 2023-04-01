<?php 
/**
 * The post
 *
 *
 * @package Explooring Theme
 * @since 1.0.1
 */

get_header();

if (have_posts()) :
    while(have_posts()) :
        the_post(  );
        ?>
        <article class="">
            <?php
            get_template_part( 'template-parts/post/header' ); 
            get_template_part( 'template-parts/post/content' );
            ?>
        </article>
        <?php
        get_template_part( 'template-parts/post/recommended' );

    endwhile;
else :
    echo "<p>Esta página no tiene contenido</p>";
endif;

get_footer();