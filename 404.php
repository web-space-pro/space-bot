<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package space-bot
 */

get_header();
?>

    <section class="error-404">
        <div class="container">
            <div>
                <h1>404</h1>
                <h2>Упс! Эта страница не найдена.</h2>
                <a class="button button--bordered" href="<?=get_home_url()?>" target="_self">Вернуться на главную</a>
            </div>
        </div>
    </section>

<?php
get_footer();
