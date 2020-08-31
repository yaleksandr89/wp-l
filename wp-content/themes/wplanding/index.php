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
get_header();
?>
    <div class="discover customize-404-page">
        <div class="wrapper">
            <h1 class="header_404">index.php</h1>
            <p class="desc_404">
                Все таки добрался до сюда.
            </p>
            <div class="img-wrapper gif-pos">
                <img src="<?= WPLANDING_DIR_iMAGES?>dont-do-that.jpg" alt="Don't do that!">
            </div>
        </div>
    </div>
<?php get_footer();