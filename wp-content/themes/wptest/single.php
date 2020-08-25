<?php
/**
 * The single page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
get_header(); ?>
    <div class="content-wrapper layout-row">
        <main class="layout-col layout-col-main">
			<?php the_post(); ?>
			<?php get_template_part( 'template-parts/blog/single/content', get_post_type() ); ?>
        </main>
	    <?php wptest_theme_sidebar( 'template-parts/sidebars/', 'single-post' ) ?>
    </div>
<?php get_footer(); ?>