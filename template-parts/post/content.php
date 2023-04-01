<?php
/**
 * Content
 */

$region = get_the_terms( get_the_ID(  ), 'region' ); 
$tags = get_the_terms( get_the_ID(  ), 'post_tag' );
?>

<div class="bg-white article-content pt-10">
    <div class="first-data flex flex-col gap-[24px] pb-[48px] md:pb-0 md:grid md:grid-cols-3 md:justify-around md:gap-4">
        <?php
        get_template_part( 
            "template-parts/post/first-data",
            '',
            array(
                'title' => 'Moneda',
                'icon' => 'money',
                'content' => 'money'
            )
        );

        get_template_part( 
            "template-parts/post/first-data",
            '',
            array(
                'title' => 'Idioma',
                'icon' => 'language',
                'content' => 'language'
            )
        ); 

        get_template_part( 
            "template-parts/post/first-data",
            '',
            array(
                'title' => 'Ubicación',
                'icon' => 'location',
                'content' => 'location'
            )
        ); 
        ?>
    </div>

    <p class=""><?= esc_html( get_field( 'main_paragraph' ) ); ?></p>
    <h2 class="">UBICACIÓN</h2>
    <div class="location-data flex gap-10 pt-[24px] items-center flex-col md:gap-4 md:justify-between md:flex-row">
        <?php if( have_rows('location_images') ): 
            while( have_rows('location_images') ): 
                the_row(); 

                $country = get_sub_field('country');
                $city = get_sub_field('city');

                ?>
                <div class="">
                    <img src="<?= esc_url( $country['url'] ); ?>" alt="<?= esc_attr( $country['alt'] ); ?>" />
                </div>
                <div class="">
                    <img src="<?= esc_url( $city['url'] ); ?>" alt="<?= esc_attr( $city['alt'] ); ?>" />
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <? the_content( ); ?>

    <div class="tax-content pt-[20px] pb-[70px] md:pt-[64px] md:pb-[92px]">
        <ul class="list-none flex flex-wrap gap-[12px] !p-0 md:justify-between md:items-center md:flex-nowrap">
            <?php 
            if ( $region ) :
                foreach ($region as $item) :
                    ?>
                    <li><?= __( $item->name ); ?></li>
                    <?php
                endforeach;
            endif;

            if ( $tags ) :
                foreach ($tags as $item) :
                    ?>
                    <li><?= __( $item->name ); ?></li>
                    <?php
                endforeach;
            endif;
            ?>
        </ul>
    </div>

    <div class="bg-white separate">
        <div class="flex justify-center items-center gap-6">
            <div class="h-[1px] w-full bg-[#E0E0E0]"></div>
            <div class="">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.3333 4H4V13.3333H13.3333V4Z" stroke="#BDBDBD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M28 4H18.6667V13.3333H28V4Z" stroke="#BDBDBD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M28 18.6667H18.6667V28H28V18.6667Z" stroke="#BDBDBD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M13.3333 18.6667H4V28H13.3333V18.6667Z" stroke="#BDBDBD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="h-[1px] w-full bg-[#E0E0E0]"></div>
        </div>
    </div>
</div>

