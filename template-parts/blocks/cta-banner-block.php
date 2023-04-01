<?php
/**
 * Block Name: Banner - CTA (Bloque)
 */

$title = get_field('title');
$description = get_field('description');
$image = get_field('image');
$btn = get_field('btn');
$bg_color = get_field('bg_color');
$banner_type = get_field('banner_type');
$btn_type = get_field('btn_type');
?>

<section class="banner-container">
    <div class="banner-content<?= esc_attr( " banner-$bg_color" ); ?><?= esc_attr( " banner-$banner_type" ); ?>">
        <?php if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="banner-texts">
            <h2 class="text-[44px] leading-[64px] pb-6"><?= esc_html( $title ); ?></h2>
            <?php if( !empty( $description ) ): ?>
                <p class=""><?= esc_html( $description ); ?></p>
            <?php endif; ?>
        </div>
        <?php 
        if ( !empty( $btn ) ) : 
            $link_url = $btn['url'];
            $link_title = $btn['title'];
            $link_target = $btn['target'] ? $btn['target'] : '_self';
        ?>
            <a class="<?= esc_attr( "btn btn-$btn_type" ); ?>" href="<?= esc_url( $link_url ); ?>" target="<?= esc_attr( $link_target ); ?>"><?= esc_html( $link_title ); ?></a>
        <?php endif; ?>
    </div>
</section>