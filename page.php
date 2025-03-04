<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package space-bot
 */

get_header();
?>

<?php
    while ( have_posts() ) :
    the_post();
    if ( function_exists('have_rows') && have_rows('components' )  ) :
        while( have_rows('components') )
        {
            the_row();
            $layout = get_row_layout();
            $inclusion = get_stylesheet_directory() . DIRECTORY_SEPARATOR . "parts" . DIRECTORY_SEPARATOR ."tpl-{$layout}.php";
            if( file_exists( $inclusion ) )
            {
                include( $inclusion );
            }
        }
    else:
        ?>
        <section class="gutenberg">
                <div class="container">
                    <?php get_template_part( 'content-parts/content', get_post_type() ); ?>
                </div>
        </section>
    <?php
    endif;
endwhile;
?>

<?php
//get_sidebar();
get_footer();
