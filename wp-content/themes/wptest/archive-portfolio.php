<?php
/**
 * The front page template archive
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
				<?= ucfirst( get_queried_object()->rewrite['slug'] ) ?>
            </h1>
            <div class="posts-flow layout-row">
		        <?php if ( have_posts() ) : ?>
			        <?php while ( have_posts() ) : ?>
				        <?php the_post() ?>
				        <?php get_template_part( 'template-parts/portfolio/flow/content', get_post_type() ); ?>
			        <?php endwhile; ?>
		        <?php else : ?>
                    <p>Записи отсутствуют.</p>
		        <?php endif; ?>
            </div>
	        <?php echo apply_filters( 'wptest_the_posts_pagination', [
		        'class_no_active' => 'pagination-item',
		        'class_active'    => 'pagination-item-current'
	        ] ); ?>
        </main>
		<?php wptest_theme_sidebar( 'template-parts/sidebars/', 'portfolio' ) ?>
    </div>
<?php get_footer();