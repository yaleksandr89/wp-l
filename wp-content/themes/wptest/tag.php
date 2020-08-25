<?php
/**
 * The tag page template file
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
				<?= get_queried_object()->name ?>
            </h1>
            <div class="posts-flow layout-row">
		        <?php if ( have_posts() ) : ?>
			        <?php while ( have_posts() ) : ?>
				        <?php the_post() ?>
				        <?php get_template_part( 'template-parts/blog/flow/content', get_post_format() ); ?>
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
    </div>
<?php get_footer();