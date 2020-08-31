<?php if ( have_posts() ) : ?>
    <section class="blog">
        <div class="wrapper">
            <h2 class="blogTitle">From the blog</h2>
            <div class="blogItems">
				<?php while ( have_posts() ) : ?>
					<?php the_post() ?>
                    <div class="blogItem">
                        <a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'thumbnail' ) ?>
                        </a>
                        <h2 class="post-card-title">
							<?php the_title() ?>
                        </h2>
                        <div class="post-card-intro">
							<?php the_field( 'preview_article' ); ?>
                        </div>
                    </div>
				<?php endwhile; ?>
            </div>
        </div>
    </section>
<?php else : ?>
    <p>Записи отсутствуют.</p>
<?php endif; ?>