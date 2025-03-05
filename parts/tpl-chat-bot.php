<?php
if ( function_exists('get_field') ) {
    $title  = get_sub_field('title');
    $text  = get_sub_field('text');
    $advantages  = get_sub_field('advantages');
    $mark  = get_sub_field('mark');
    $titleMessages  = get_sub_field('title-messages');
    $messages  = get_sub_field('messages');
    $link  = get_sub_field('link-button');

}
?>

<section id="chatbot" class="chat-bot">
    <div class="chat-bot__container">
        <div class="chat-bot__info">
            <?php if(!empty($title)) : ?>
                <h2><?=$title?></h2>
            <?php endif; ?>

            <?php if(!empty($text)) : ?>
                <div class="chat-bot__info-text">
                    <p><?=$text?></p>
                </div>
            <?php endif; ?>

            <?php if(!empty($advantages)) : ?>
            <div class="chat-bot__advantages advantages">
                <?php foreach ($advantages as $key=>$item):?>
                <div class="advantages__item panel">
                    <div class="advantages__icon icon">
                        <svg width="24" height="24">
                            <use href="<?=get_template_directory_uri()?>/assets/dist/icons/icons.svg#<?=$item['icon']?>"></use>
                        </svg>
                    </div>
                    <h3><?=$item['title']?></h3>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
        <div class="chat-bot__example">
            <div class="chat-bot__example-head">
                <span><?=$mark?></span>
                <h3><?=$titleMessages?></h3>
            </div>
            <?php if(!empty($messages)) : ?>
            <div class="chat-bot__messages">
                <?php foreach ($messages as $key=>$item):?>
                <div data-animate class="chat-bot__message <?=($key % 2)? '--question' : '--answer'?>">
                    <?=$item['message']?>
                    <span class="time"><?=$item['time']?></span>
                </div>
                <?php endforeach; ?>
                <div data-animate class="chat-bot__dialog">
                    <a href="<?=$link?>" class="btn" target="_self">
                        Да
                        <svg width="8" height="8">
                            <use href="<?=get_template_directory_uri()?>/assets/dist/icons/icons.svg#small-row"></use>
                        </svg>
                    </a>
                    <a href="<?=$link?>" class="btn" target="_self">
                        Нет
                        <svg width="8" height="8">
                            <use href="<?=get_template_directory_uri()?>/assets/dist/icons/icons.svg#small-row"></use>
                        </svg>
                    </a>
                    </div>
                </div>
            <?php endif; ?>

            <div class="chat-bot__caption">
                Чат-бот доставки пиццы
            </div>
        </div>
    </div>
    <div class="blur"></div>
</section>
