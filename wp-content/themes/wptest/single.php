<?php get_header(); ?>
    <main>
        <div class="container">
            <?php the_post(); ?>
            <h1><?php the_title() ?></h1>
            <div><?php the_content(); ?></div>
        </div>
    </main>
<?php get_footer(); ?>