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
                <div class="img-wrapper">
                    <img src="<?= WPTEST_DIR_iMAGES?>img_404_page.jpg" alt="image 404 page">
                </div>
                <p class="desc_404">
                    Запрашиваемая страница удалена или никогда не существовала.
                </p>
            </div>
        </main>
    </div>
<?php
get_footer();