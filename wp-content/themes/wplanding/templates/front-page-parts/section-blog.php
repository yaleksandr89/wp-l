<section class="blog">
	<div class="wrapper">
		<h2 class="blogTitle">From the blog</h2>
		<div class="blogItems">
			<?php get_template_part( 'template-parts/blog/flow/content', 'articles' ); ?>
		</div>
		<div class="blogButtons">
			<div class="btn btn-green p-0">
				<a class="link_blog" href="<?= get_home_url( '', 'blog' ) ?>">
					See all posts
				</a>
			</div>
		</div>
	</div>
</section>