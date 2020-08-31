<?php $articles = apply_filters( 'wplanding_get_blog_articles', '', 10, 1 ); ?>
<?php if ( $articles ): ?>
	<?php foreach ( $articles as $article ): ?>
        <div class="blogItem">
            <a href="<?= $article['link'] ?>">
				<?= $article['thumbnail'] ?>
            </a>
            <div class="blogItem__title">
				<?= $article['title'] ?>
            </div>
            <div class="blogItem__text">
				<?= $article['excerpt'] ?>
            </div>
            <div class="blogItem__meta">
        		<span class="blogItem__metaItem">
        		<span class="blogItem__metaIcon fa fa-user"></span>
        			<span class="some"> <?= $article['author'] ?></span>
        		</span>
                <span class="blogItem__metaItem">
        			<span class="blogItem__metaIcon fa fa-calendar"></span>
        			<span class="some"> <?= $article['date'] ?></span>
        		</span>
            </div>
        </div>
	<?php endforeach; ?>
<?php else : ?>
    <p>Записи отсутствуют.</p>
<?php endif; ?>