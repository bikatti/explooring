<?php 
/* 
 * Archive
 * 
 * 
 * @package    Explooring Theme
 * @since      Explooring Theme 1.0.3
 */ 

$the_id = get_queried_object(  );
$title = (!empty( $the_id->parent) ) ? get_term( $the_id->parent )->name : $the_id->name;
$url = $_SERVER['HTTP_HOST'] . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

get_header( );
?>

<div class="archive">
    <?php get_template_part( 'template-parts/archive/header' ); ?>
    
    <section class="bg-white pt-[24px] pb-[104px] md:pb-[140px] md:pt-[56px]">
        <div class="container max-w-[1280px]">
            <div class="flex flex-col gap-[32px] md:flex-row md:gap-[60px] md:justify-between">
                <div class="">
                    <?php get_template_part( 'template-parts/archive/continents' ); ?>
                </div>

                <div class="w-full">
                    <h2 class="text-[36px] leading-[56px] text-secondary uppercase <? if (!is_search(  ) && strpos($url,'destinos') === false) _e( 'pb-5' ); ?>">
                        <?php
                        if (is_search(  ) == false && strpos($url,'destinos') !== false) :
                            esc_html_e( "Destinos" );
                        elseif (is_search(  ) == false && strpos($url,'destinos') === false) :
                            esc_html_e( $title );
                        elseif (is_search(  ) == false && strpos($url,'destinos') === false && have_posts(  ) === false) :
                            esc_html_e( $title );
                        else :
                            esc_html_e( "Encontramos:" );
                        endif;
                        ?>
                    </h2>
                    <?php 
                    if (!is_search(  ) && strpos($url,'destinos') === false) :
                        get_template_part( 'template-parts/archive/continents-part' ); 
                    endif;
                    ?>
                    <div class="grid grid-cols-2 gap-2 md:grid-cols-4 pt-[32px] md:pt-[48px]">
                        <?php
                        if (have_posts(  )) :
                            while(have_posts()) :
                                the_post(  );

                                ?>
                                <a class="archive-card relative overflow-hidden h-[268px] categories-card w-full md:h-[412px]"  href="<?= esc_url( get_permalink( ) ); ?>" target="Enlace para ver el articulo: <?= esc_attr( get_the_title( ) ); ?>">
                                    <div class="w-full">
                                        <div class="crop">
                                            <? the_post_thumbnail( 'post-thumbnail', ['class' => ''] ); ?>
                                        </div>

                                        <div class="crop-gradient"></div>
                                        <div class="absolute inset-0 flex items-end justify-between p-6 z-[5]">
                                            <span class="font-normal text-xl leading-[28px] text-white"><?= esc_html( get_the_title( ) ); ?></span>
                                        </div>
                                    </div>
                                </a>
                                <?php
                            endwhile;
                        else :
                            ?>
                            <div class="col-span-2 md:col-span-4">
                                <span class="text-center text-xl leading-[28px] text-textColor">No hay articulos estos lugares de destino todavia.</span>
                            </div>
                            <?php
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php 
get_footer( );