<?php
/**
 * Block Name: 2 Columnas (Bloque)
 */

$title = get_field('title');
$description = get_field('description');
$image = get_field('image');
$align = get_field('align');
$columns_sizes = get_field('columns_sizes');
?>

<section class="two-columns pt-[50px] pb-8 md:pt-20 md:pb-[120px]">
    <div class="container max-w-[1240px]">
        <div class="two-columns-content flex flex-col gap-[40px] items-center <?= esc_attr( $align ); ?> size-<?= esc_attr( $columns_sizes ); ?> md:gap-[0px] md:flex-row">
            <div class="">
                <h2 class="text-[40px] leading-[56px] pb-8 md:pb-6 md:text-[44px] md:leading-[72px]"><?= esc_html( $title ); ?></h2>
                <?php if( !empty( $description ) ) : ?>
                    <p class="text-lg leading-[32px] text-textColor-dark"><?= esc_html( $description ); ?></p>
                <?php endif; ?>
            </div>
            <div class="md:pl-[55px]">
                <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" />
            </div>
        </div>
    </div>
</section>