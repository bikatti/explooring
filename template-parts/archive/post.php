<?php
/**
 * Post structured
 */

$the_id = $args['id'];
$link_post = get_permalink( $the_id );
?>


<a class="post-related img-card w-full" href="<?= esc_url( $link_post ); ?>" target="Enlace para ver el articulo: <?= esc_attr( get_the_title( $the_id ) ); ?>">
    <?php if (has_post_thumbnail( $the_id ) ): 
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $the_id ), 'single-post-thumbnail' ); 
        ?>
        <div class="crop md:h-full">
            <img src="<?= esc_url( $image[0] ); ?>" alt="<?= esc_attr($image['alt']); ?>" />
        </div>
        <h2 class="text-xl leading-[28px] text-secondary font-medium pt-4"><?= esc_html( get_the_title( $the_id ) ); ?></h2>
    <?php endif; ?>
</a>