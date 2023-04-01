<?php
/**
 * Contenents part
 */

$the_id = get_queried_object(  );
$id_child = (!empty( $the_id->parent) ) ? $the_id->parent : $the_id->term_id;

$terms = get_terms(
    'continents',
    [
        'hide_empty' => false,  
        'orderby'    => 'name',
        'child_of'   => $id_child,
        'order'      => 'ASC' 
    ]
);
?>

<nav class="overflow-hidden md:overflow-auto">
    <ul class="flex gap-4 items-center overflow-scroll md:overflow-hidden">
        <?php
        foreach ($terms as $key => $term) :
            ?>
            <li class="rounded-3xl border border-solid border-secondary">
                <a class="font-normal text-base leading-[24px] text-secondary flex gap-[10px] items-center py-2 px-4" href="<?= esc_url( get_term_link( $term ) ); ?>">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_517_10)">
                        <path d="M18.3332 9.99999C18.3332 14.6024 14.6022 18.3333 9.99984 18.3333M18.3332 9.99999C18.3332 5.39762 14.6022 1.66666 9.99984 1.66666M18.3332 9.99999H1.6665M9.99984 18.3333C5.39746 18.3333 1.6665 14.6024 1.6665 9.99999M9.99984 18.3333C12.0842 16.0514 13.2688 13.09 13.3332 9.99999C13.2688 6.91002 12.0842 3.94862 9.99984 1.66666M9.99984 18.3333C7.91544 16.0514 6.73088 13.09 6.6665 9.99999C6.73088 6.91002 7.91544 3.94862 9.99984 1.66666M1.6665 9.99999C1.6665 5.39762 5.39746 1.66666 9.99984 1.66666" stroke="#122023" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_517_10">
                        <rect width="20" height="20" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>

                    <? esc_html_e( $term->name ); ?>
                </a>
            </li>
            <?php
        endforeach;
        ?>
    </ul>
</nav>