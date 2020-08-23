<div class="aside-box">
    <div class="h2">
		<?php
		$ru_time = get_the_time( 'Y-m-d H:i:s' );
		$en_time = get_date_from_gmt( $ru_time, 'j F Y' );
		echo $en_time;
		?>
    </div>
    <div class="h2">Author: <?php the_author() ?></div>
</div>
<div class="aside-box">
    <div class="h2">Post categories</div>
    <ul class="secondery-navigation">
		<?php the_terms( get_the_ID(), 'category' ); ?>
    </ul>
</div>
<div class="aside-box">
    <div class="h2">Post tags</div>
	<?php the_terms( get_the_ID(), 'post_tag', '<ul class="secondery-navigation"><li>', '</li><li>', '</li></ul>' ); ?>
</div>