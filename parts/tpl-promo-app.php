<?php
if ( function_exists('get_field') ) {
    $title  = get_sub_field('title');
    $text  = get_sub_field('text');
    $link  = get_sub_field('link');
    $photo_left = get_sub_field('photo_left');
    $photo_right  = get_sub_field('photo_right');

}
?>

<section id="web-app" class="promo-app">
    <div class="promo-app__container">
        <?php if(!empty($photo_left)) : ?>
            <div class="promo-app__mocUp --first">
                <figure>
                    <img src="<?=$photo_left?>" alt="<?=get_bloginfo()?>" width="100%" height="100%">
                </figure>
            </div>
        <?php endif; ?>


        <div class="promo-app__content">
            <div class="promo-app__content--box">
                <?php if(!empty($title)) : ?>
                    <h2><?=$title?></h2>
                <?php endif; ?>

                <?php if(!empty($text)) : ?>
                    <div class="promo-app__content--text">
                      <p><?=$text?></p>
                    </div>
                <?php endif; ?>

                <?php if(!empty($link)) : ?>
                    <div class="promo-app__content--link">
                        <a href="<?=$link['url']?>" target="_self" class="btn btn-primary"><?=$link['title']?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <?php if(!empty($photo_right)) : ?>
            <div class="promo-app__mocUp --second">
                <figure>
                    <img src="<?=$photo_right?>" alt="<?=get_bloginfo()?>" width="100%" height="100%">
                </figure>
            </div>
        <?php endif; ?>

    </div>
</section>
