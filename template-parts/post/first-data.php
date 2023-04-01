<?php
/**
 * Header Date
 */

$title = $args['title'];
$url_icon = $args['icon'];
$content_dinamyc = $args['content'];
?>

<div class="flex gap-[24px] md:gap-[0px] md:pb-10 md:flex-col">
    <div class="w-[56px] h-[56px] md:mx-auto md:pb-2">
        <? get_template_part( "template-parts/icons/$url_icon" ); ?>
    </div>
    <div class="flex flex-col md:justify-center md:items-center">
        <span class="text-textColor-normal text-sm leading-[20px] uppercase md:text-center"><?= esc_html( $title ); ?></span>
        <span class="text-textColor-dark text-lg leading-[32px] md:text-center"><?= esc_html( get_field( $content_dinamyc ) ); ?></span>
    </div>
</div>