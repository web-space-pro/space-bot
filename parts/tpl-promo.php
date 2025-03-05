<?php
if ( function_exists('get_field') ) {
    $title  = get_sub_field('title');
    $icon  = get_sub_field('icon_id');

}
?>

<section class="promo">
    <div class="promo__container">
        <?php if(!empty($icon)) : ?>
        <div class="promo__icon">
            <svg width="230" height="228">
                <use href="<?=get_template_directory_uri()?>/assets/dist/icons/icons.svg#<?=$icon?>"></use>
            </svg>
        </div>
        <?php endif; ?>
        <?php if(!empty($title)) : ?>
            <div class="promo__title">
                <h2><?=$title?></h2>
            </div>
        <?php endif; ?>
    </div>
    <div class="blur"></div>
</section>
