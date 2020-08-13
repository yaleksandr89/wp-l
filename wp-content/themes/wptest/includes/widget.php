<?php

/**
 * @url https://wp-kama.ru/function/register_widget
 */
/*
|--------------------------------------------------------------------------
| Поддержка виджетов в теме
|--------------------------------------------------------------------------
*/
add_action( 'widgets_init', static function () {
	// Виджет на главной странице
	register_sidebar( [
		'name'          => 'Боковая колонка для главной',
		'id'            => 'sidebar_main_page',
		'description'   => 'Выводится только на главной странице',
		'class'         => '',
		'before_widget' => '<div class="aside-box">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="h2">',
		'after_title'   => '</div>'
	] );
} );

/*
|--------------------------------------------------------------------------
| Модификация стандартного виджета "категории"
|--------------------------------------------------------------------------
*/
add_action( 'wptest_widget_front_page', static function ( $name_widget ) {
	ob_start();
	dynamic_sidebar( $name_widget );
	$sidebar              = ob_get_clean();
	$sidebar_corrected_ul = str_replace( "<ul>", '<ul class="secondery-navigation">', $sidebar );
	echo $sidebar_corrected_ul;
} );