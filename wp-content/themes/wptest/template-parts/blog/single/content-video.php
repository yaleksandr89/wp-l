<div class="post-full">
    <h1><?php the_title() ?></h1>
	<?php $id_video = wptest_get_id_video_youtube( 'video_youtube_url' ) ?>
	<?php if ( $id_video ): ?>
        <div class="rel rel-16-9">
            <div class="rel__content">
                <iframe src="https://www.youtube.com/embed/<?= $id_video ?>" allowfullscreen=""></iframe>
            </div>
        </div>
	<?php else: ?>
        <p style="color: red; font-size: 25px; text-align: center;"> Указана некорректная ссылка на видео! </p>
	<?php endif; ?>
    <div><?php the_content() ?></div>
</div>