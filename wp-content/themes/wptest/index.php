<?php
/**
 * The index file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>
<?php get_header(); ?>
    <div class="content-wrapper layout-row">
        <main class="layout-col layout-col-taxonomy-page">
            <h1 class="header_404">index.php</h1>
            <div class="posts-flow layout-row">
                <p class="desc_404">Все таки добрался до сюда.</p>
                <p class="desc_404">Не надо так!</p>
            </div>
        </main>
    </div>
<?php get_footer(); ?>