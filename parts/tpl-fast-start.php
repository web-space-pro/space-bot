<?php
if ( function_exists('get_field') ) {
    $title  = get_sub_field('title');
    $text  = get_sub_field('text');
    $link  = get_sub_field('link');
    $signature = get_sub_field('signature');
    $photo  = get_sub_field('photo');

}
?>

<section id="fast-start" class="fast-start">
    <div class="fast-start__container">
        <div class="fast-start__desc">
            <?php if(!empty($title)) : ?>
                <h2><?=$title?></h2>
            <?php endif; ?>

            <?php if(!empty($text)) : ?>
                <div class="fast-start__desc--text">
                    <p><?=$text?></p>
                </div>
            <?php endif; ?>

            <?php if(!empty($link)) : ?>
                <a href="<?=$link['url']?>" target="_self" class="btn btn-primary"><?=$link['title']?></a>
            <?php endif; ?>

        </div>
        <div class="fast-start__img">
            <?php if(!empty($photo)) : ?>
                <figure>
                    <img src="<?=$photo?>" alt="<?=get_bloginfo()?>" width="100%" height="100%">
                </figure>
            <?php endif; ?>

            <?php if(!empty($signature)) : ?>
                <span><?=$signature?></span>
            <?php endif; ?>
        </div>
    </div>
    <div class="blur"></div>
</section>
