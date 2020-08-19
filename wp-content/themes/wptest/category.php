<?php
/**
 * The category page template file
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
        <main class="layout-col layout-col-taxonomy-page">
            <h1 class="taxonomy_page_header">
                Category «<?= get_queried_object()->name ?>»
            </h1>
	        <?php get_template_part( 'template-parts/default-output-post' ); ?>
        </main>
    </div>
<?php get_footer();