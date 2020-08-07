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
            <h1><?php the_title() ?></h1>
            <div class="post-full">
                <p><?php the_content() ?></p>
            </div>
        </main>
        <aside class="layout-col layout-col-aside">
            <div class="aside-box">
                <div class="h2">
                    <?php
                    $ru_time = get_the_time('Y-m-d H:i:s');
                    $en_time = get_date_from_gmt($ru_time, 'j F Y');
                    echo $en_time;
                    ?>
                </div>
                <div class="h2">Author: <?php the_author() ?></div>
            </div>
            <div class="aside-box">
                <div class="h2">Post categories</div>
                <ul class="secondery-navigation">
                    <?php foreach (get_the_category() as $category): ?>
                        <li>
                            <a href="<?= esc_url(get_category_link($category)) ?>">
                                <?= esc_html($category->name) ?>
                            </a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
            <div class="aside-box">
                <div class="h2">Post tags</div>
                <?php the_tags('<ul class="secondery-navigation"><li>','</li><li>','</li></ul>')?>
            </div>
        </aside>
    </div>
<?php get_footer(); ?>