<div class="botSlider">
	<?php $reviews = apply_filters( 'wplanding_get_reviews', '', 10, 1 ); ?>
	<div class="sliderBot">
		<?php if ( $reviews ): ?>
			<?php foreach ( $reviews as $review ): ?>
				<div class="slider__team">
					<div class="sliderBot__img">
						<?= $review['thumbnail'] ?>
					</div>
					<div class="sliderBot__text">
						<?= $review['content'] ?>
					</div>
					<div class="sliderBot__title"><?= $review['client'] ?></div>
					<div class="sliderBot__position">
						<?php if ( is_array( $review['type_work'] ) ): ?>
							<?= implode( ', ', $review['type_work'] ) ?>
						<?php else: ?>
							<?= $review['type_work'] ?>
						<?php endif; ?>
					</div>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
</div>