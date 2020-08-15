<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 */
get_header(); ?>
    <div class="content-wrapper layout-row">
        <main class="layout-col layout-col-taxonomy-page">
            <h1 class="header_404">Ошибка 404</h1>
            <div class="posts-flow layout-row">
                <p class="desc_404">
                    Запрашиваемая страница удалена или никогда не существовала.
                </p>
                <div class="img-wrapper gif-pos">
                    <img src="<?= WPTEST_DIR_iMAGES?>404-page.gif" alt="image 404 page">
                </div>
            </div>
        </main>
    </div>
<?php
get_footer();