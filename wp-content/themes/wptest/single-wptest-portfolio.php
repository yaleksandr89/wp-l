<?php
/**
 * The single single page
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
            <h1><?php the_title() ?></h1>
            <div class="post-full">
                <p><?php the_content() ?></p>
            </div>
        </main>
        <aside class="layout-col layout-col-aside">
		    <?php get_template_part('template-parts/single-portfolio-sidebar'); ?>
        </aside>
    </div>
<?php get_footer(); ?>