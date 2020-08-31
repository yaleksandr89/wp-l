<?php
/**
 * The single page ($slug - 'features') template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
get_header(); ?>
    <section class="blog">
        <div class="wrapper">
			<?php the_post(); ?>
			<?php get_template_part( 'template-parts/blog/single/content', get_post_format() ); ?>
        </div>
    </section>
<?php get_footer(); ?>