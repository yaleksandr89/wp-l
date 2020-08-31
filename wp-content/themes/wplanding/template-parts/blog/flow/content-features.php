<?php $features = apply_filters( 'wplanding_get_blog_features', 6, 10, 1 ); ?>
<?php if ( $features ): ?>
	<?php foreach ( $features as $feature ): ?>
        <div class="ftItem">
            <div class="ftItem__img">
                <img class="ftItem__icon" src="<?= $feature['thumbnail_url'] ?>" alt="">
            </div>
            <div class="ftItem__box">
                <div class="ftItem__title">
	                <?= $feature['title'] ?>
                </div>
                <div class="ftItem__text">
	                <?= $feature['excerpt'] ?>
                </div>
                <div class="ftItem__meta">
                    <a class="ftItem__link-more" href="<?= $feature['link'] ?>">
                        Read more<i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
	<?php endforeach; ?>
<?php else : ?>
    <p>Записи отсутствуют.</p>
<?php endif; ?>