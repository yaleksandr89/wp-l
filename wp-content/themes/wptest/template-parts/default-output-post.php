<div class="posts-flow layout-row">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : ?>
			<?php the_post() ?>
            <article class="post-card layout-col">
                <a href="<?php the_permalink(); ?>" class="post-card-link">
					<?php the_post_thumbnail() ?>
                </a>
                <h2 class="post-card-title">
					<?php the_title() ?>
                </h2>
				<?php if ( ( ! is_tag() ) && ( is_post_type_archive() || is_tax() ) ): ?>
                    <div class="post-card-intro">
						<?php the_field( 'preview_portfolio' ); ?>
                    </div>
				<?php else: ?>
                    <div class="post-card-intro">
						<?php the_field( 'preview_article' ); ?>
                    </div>
				<?php endif; ?>
            </article>
		<?php endwhile; ?>
	<?php else : ?>
        <p>Записи отсутствуют.</p>
	<?php endif; ?>
</div>
<?php echo apply_filters( 'wptest_the_posts_pagination', [
	'class_no_active' => 'pagination-item',
	'class_active'    => 'pagination-item-current',
] ); ?>