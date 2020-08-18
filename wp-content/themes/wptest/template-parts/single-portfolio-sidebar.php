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
    <div class="h2">Type work</div>
	<?php the_terms( get_the_ID(), 'wptest-type-work', '<ul class="secondery-navigation"><li>', '</li><li>', '</li></ul>' ) ?>
</div>
<div class="aside-box">
    <div class="h2">Clients</div>
	<?php the_terms( get_the_ID(), 'wptest-clients', '<ul class="secondery-navigation"><li>', '</li><li>', '</li></ul>' ) ?>
</div>