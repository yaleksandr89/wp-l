<?php
/**
 * The home page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
get_header(); ?>
    <div class="header-bottom">
        Wood Design is a modern web & graphic design studio in Europe. We create beautiful things for web and print.
        You can see our great work examples in <a href="/portfolio">Portfolio</a>. If you need a professional
        design services <a href="/contacts">Contact</a> us. We would love to work with you.
    </div>
    <div class="content-wrapper layout-row">
        <main class="layout-col layout-col-taxonomy-page">
            <h1 class="taxonomy_page_header"><?= get_queried_object()->post_title ?> page</h1>
            <div class="posts-flow layout-row">
                <?php
                // manual: https://wp-kama.ru/question/funktsiya-get_posts-i-paginatsiya-kak-podklyuchit
                global $wp_query;
                $save_wpq = $wp_query;
                ?>
                <?php $wp_query = new WP_Query([
                    'posts_per_page' => 4,
                    'paged' => get_query_var('paged') ?: 1
                ]); ?>
                <?php if (have_posts()) : ?>
                    <?php while ($wp_query->have_posts()) : ?>
                        <?php $wp_query->the_post(); ?>
                        <article class="post-card layout-col">
                            <a href="<?php the_permalink(); ?>" class="post-card-link">
                                <?php the_post_thumbnail() ?>
                            </a>
                            <h2 class="post-card-title">
                                <?php the_title() ?>
                            </h2>
                            <div class="post-card-intro">
                                <?php the_field('preview_article'); ?>
                            </div>
                        </article>
                    <?php endwhile; ?>
                    <div class="pagination">
                        <?php the_posts_pagination(['prev_next' => false]); ?>
                    </div>
                <?php else : ?>
                    <p>Записи отсутствуют.</p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <?php $wp_query = $save_wpq; ?>
            </div>
        </main>
    </div>
<?php get_footer();