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
    <section class="main-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper mt-5 text-center">
                        <h1>404<code>(index.php)</code></h1>
                        <h2>Страница не найдена<code>(index.php)</code></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>