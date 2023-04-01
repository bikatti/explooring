<?php
/**
 * Contenents
 */

$terms = get_terms(
    'continents',
    [
        'hide_empty' => false,  
        'orderby'    => 'name',
        'parent'   => 0,
        'order'      => 'ASC' 
    ]
);
?>

<aside class="continents md:w-[195px]">
    <nav class="overflow-hidden md:overflow-auto">
        <ul class="flex flex-row border-b border-solid border-[#E0E0E0] overflow-scroll md:border-0 md:border-r md:!pl-[32px] md:!py-3 md:overflow-hidden md:flex-col">
            <?php
            foreach ($terms as $key => $term) :
                ?>
                <li class="p-[12px] pb-[18px] md:p-4 md:pr-[18px]" data-slug="<?= esc_attr( $term->slug ); ?>">
                    <a class="text-[#9E9E9E] text-base font-medium leading-[24px]" href="<?= esc_url( get_term_link( $term ) ); ?>">
                        <? esc_html_e( $term->name ); ?>
                    </a>
                </li>
                <?php
            endforeach;
            ?>
        </ul>
    </nav>
</aside>