<?php
if ( function_exists('get_field') ) {
    $title  = get_sub_field('title');
    $text  = get_sub_field('text');
    $link  = get_sub_field('link');
    $photo_left = get_sub_field('img_left');
    $photo_right  = get_sub_field('img_right');

}
?>

<section id="company" class="tech-bot">
    <div class="tech-bot__container">

        <?php if(!empty($photo_left)) : ?>
            <div class="tech-bot__mocUp --first">
                <figure>
                    <img src="<?=$photo_left?>" alt="<?=get_bloginfo()?>" width="100%" height="100%">
                </figure>
            </div>
        <?php endif; ?>

        <div class="tech-bot__content">
            <div class="tech-bot__content--box">
                <?php if(!empty($title)) : ?>
                    <h2><?=$title?></h2>
                <?php endif; ?>

                <?php if(!empty($text)) : ?>
                    <div class="tech-bot__content--text">
                        <p><?=$text?></p>
                    </div>
                <?php endif; ?>

                <?php if(!empty($link)) : ?>
                    <div class="tech-bot__content--link">
                        <a href="<?=$link['url']?>" target="_self" class="btn btn-primary"><?=$link['title']?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <?php if(!empty($photo_right)) : ?>
            <div class="tech-bot__mocUp --second">
                <figure>
                    <img src="<?=$photo_right?>" alt="<?=get_bloginfo()?>" width="100%" height="100%">
                </figure>
            </div>
        <?php endif; ?>

    </div>
    <div class="blur --first"></div>
    <div class="blur --second"></div>
</section>
