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
                <?= ucfirst(get_queried_object()->rewrite['slug']) ?>
            </h1>
            <div class="posts-flow layout-row">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : ?>
						<?php the_post() ?>
                        <article class="post-card layout-col">
                            <a href="<?php the_permalink(); ?>" class="post-card-link">
								<?php the_post_thumbnail() ?>
                            </a>
                            <h2 class="post-card-title">
								<?php the_title() ?>
                            </h2>
                            <div class="post-card-intro">
								<?php the_field( 'preview_portfolio' ); ?>
                            </div>
                        </article>
					<?php endwhile; ?>
				<?php else : ?>
                    <p>Записи отсутствуют.</p>
				<?php endif; ?>
                <div class="pagination">
					<?php the_posts_pagination( [ 'prev_next' => false ] ); ?>
                </div>
            </div>
        </main>
        <aside class="layout-col layout-col-aside">
			<?php get_template_part( 'template-parts/portfolio-sidebar' ); ?>
        </aside>
    </div>
<?php get_footer();