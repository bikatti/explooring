<?php 
/**
 * The page
 *
 *
 * @package Explooring Theme
 * @since 1.0.3
 */

get_header();

if (have_posts()) :
    while(have_posts()) :
        the_post(  );
        ?>
        <article>
            <div class="article-content py-20">
                <h1><? the_title( ); ?></h1>
                <? the_content( ); ?>
            </div>
        </article>
        <?php
    endwhile;
else :
    echo "<p>Esta página no tiene contenido</p>";
endif;

get_footer();