<?php

/**
 * @url https://wp-kama.ru/function/register_widget
 */

// Регистрация панели виджета
function wptest_register_widget() {
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
}

// Отключение стандарных виджетов (+ виджет Ninja form)
function wptest_remove_default_widgets() {
	unregister_widget( 'WP_Widget_Archives' );
	unregister_widget( 'WP_Widget_Calendar' );
	unregister_widget('WP_Widget_Categories');
	unregister_widget( 'WP_Widget_Meta' );
	unregister_widget( 'WP_Widget_Pages' );
	unregister_widget( 'WP_Widget_Recent_Comments' );
	unregister_widget( 'WP_Widget_Recent_Posts' );
	unregister_widget( 'WP_Widget_RSS' );
	unregister_widget( 'WP_Widget_Search' );
	unregister_widget( 'WP_Widget_Tag_Cloud' );
	unregister_widget( 'WP_Widget_Text' );
	unregister_widget( 'WP_Nav_Menu_Widget' );
	unregister_widget( 'NF_Widget' );
	unregister_widget( 'WP_Widget_Media_Video' );
	unregister_widget( 'WP_Widget_Media_Gallery' );
	unregister_widget( 'WP_Widget_Media_Image' );
	unregister_widget( 'WP_Widget_Media_Audio' );
}

// Инициализация созданного виджета
function wptest_add_widgets() {
	register_widget( 'WPTEST_Widget_Categories' );
}

add_action( 'widgets_init', 'wptest_register_widget', 10 );
add_action( 'widgets_init', 'wptest_remove_default_widgets', 20 );
add_action( 'widgets_init', 'wptest_add_widgets', 30 );

// Подключение виджета "категорий"
include_once __DIR__ . '/wptest-widget-categories.php';

// Модификация виджета "категорий"
add_filter( 'wptest_widget_categories_wrapper', static function ( $wrapper_args ) {
	$wrapper_args['container_class'] = 'secondery-navigation';
	return $wrapper_args;
});