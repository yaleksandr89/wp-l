<?php while ( have_posts() ) : ?>
	<?php the_post() ?>
    <article class="post-card layout-col">
		<?php if ( has_term( 'post-format-aside', 'post_format' ) ): ?>
            <div class="post-label post-label-project">New Project</div>
		<?php elseif ( has_term( 'post-format-video', 'post_format' ) ): ?>
            <div class="post-label post-label-video">New Video</div>
		<?php endif; ?>
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