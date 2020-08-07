<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 */
get_header();
?>
    <div class="header-bottom">
        Wood Design is a modern web & graphic design studio in Europe. We create beautiful things for web and print.
        You can see our great work examples in <a href="/portfolio">Portfolio</a>. If you need a professional
        design services <a href="/contacts">Contact</a> us. We would love to work with you.
    </div>
    <div class="content-wrapper layout-row">
        <main class="layout-col layout-col-taxonomy-page">
            <h1 class="header_404">Ошибка 404</h1>
            <div class="posts-flow layout-row">
                <p class="desc_404">
                    Запрашиваемая страница удалена или никогда не существовала.
                </p>
            </div>
        </main>
    </div>
<?php
get_footer();