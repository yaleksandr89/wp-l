<div class="topSlider">
	<?php $front_slider = apply_filters( 'wplanding_get_sliders', 'Главная страница', 999, 10, 2 ); ?>
	<?php if ( $front_slider ): ?>
		<div class="slider">
			<?php foreach ( $front_slider as $slider ): ?>
				<div class="slider__sale">
					<div class="slider__slogan-1"><?= $slider['slogan_1'] ?></div>
					<div class="slider__slogan-2"><?= $slider['slogan_2'] ?></div>
					<div class="slider__blogButtons">
						<div class="btn btn-green p-0">
							<a class="link_blog" href="<?= $slider['ssylka_zelenoj_knopki'] ?>">
								<?= $slider['opisanie_zelenoj_knopki'] ?>
							</a>
						</div>
						<div class="btn btn--white p-0">
							<a class="link_blog" href="<?= $slider['ssylka_prozrachnoj_knopki'] ?>">
								<?= $slider['opisanie_prozrachnoj_knopki'] ?>
							</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
</div>