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
		<?php foreach ( get_the_category() as $category ): ?>
            <li>
                <a href="<?= esc_url( get_category_link( $category ) ) ?>">
					<?= esc_html( $category->name ) ?>
                </a>
            </li>
		<?php endforeach ?>
    </ul>
</div>
<div class="aside-box">
    <div class="h2">Post tags</div>
	<?php the_tags( '<ul class="secondery-navigation"><li>', '</li><li>', '</li></ul>' ) ?>
</div>