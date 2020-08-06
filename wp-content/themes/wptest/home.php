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
    <div class="content-wrapper layout-row">
        <main class="layout-col layout-col-main">
            <h1>Wood design - home page</h1>
            <div class="posts-flow layout-row">
                <article class="post-card layout-col">
                    <a href="post-sample.html" class="post-card-link">
                        <img src="<?= WPTEST_DIR_iMAGES ?>1st_Design.jpg" alt="1st Design">
                    </a>
                    <h2 class="post-card-title">Fictional Design Studio Layout</h2>
                    <div class="post-card-intro">This work description goes here. Just simple and short text about this
                        work.
                    </div>
                </article>
                <article class="post-card layout-col">
                    <a href="post-sample.html" class="post-card-link">
                        <img src="<?= WPTEST_DIR_iMAGES ?>2nd_Design.png" alt="1st Design">
                    </a>
                    <h2 class="post-card-title">Creative Mouse Design</h2>
                    <div class="post-card-intro">This work description goes here. Just simple and short text about this
                        work.
                    </div>
                </article>
                <article class="post-card layout-col">
                    <a href="post-sample.html" class="post-card-link">
                        <img src="<?= WPTEST_DIR_iMAGES ?>3rd_Design.png" alt="1st Design">
                    </a>
                    <h2 class="post-card-title">Real Estate Company Layout</h2>
                    <div class="post-card-intro">This work description goes here. Just simple and short text about this
                        work.
                    </div>
                </article>
                <article class="post-card layout-col">
                    <a href="post-sample.html" class="post-card-link">
                        <img src="<?= WPTEST_DIR_iMAGES ?>4th_Design.png" alt="1st Design">
                    </a>
                    <h2 class="post-card-title">Web Design Fan - Blog for designers</h2>
                    <div class="post-card-intro">This work description goes here. Just simple and short text about this
                        work.
                    </div>
                </article>
            </div>
        </main>
        <?php if (is_active_sidebar('sidebar_main_page')) : ?>
            <aside class="layout-col layout-col-aside">
                <?php
                // manual: https://stackoverflow.com/questions/16885027/wordpress-how-to-add-class-to-ul-of-sidebar-widget
                ob_start();
                dynamic_sidebar('sidebar_main_page');
                $sidebar = ob_get_clean();
                $sidebar_corrected_ul = str_replace("<ul>", '<ul class="secondery-navigation">', $sidebar);
                echo $sidebar_corrected_ul;
                ?>
            </aside>
        <?php endif; ?>
    </div>
<?php get_footer();