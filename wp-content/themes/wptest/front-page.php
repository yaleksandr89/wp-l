<?php
/**
 * The front page template file
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
            <h1 class="customize_home_page_h1">
				<?= get_theme_mod( 'header_h1', WPTEST_GET_THE_MOD_DEFAULT ) ?>
            </h1>
			<?php get_template_part( 'template-parts/default-output-post' ); ?>
        </main>
		<?php if ( is_active_sidebar( 'sidebar_main_page' ) ) : ?>
            <aside class="layout-col layout-col-aside">
				<?php dynamic_sidebar( 'sidebar_main_page' ); ?>
            </aside>
		<?php endif; ?>
    </div>
<?php get_footer();