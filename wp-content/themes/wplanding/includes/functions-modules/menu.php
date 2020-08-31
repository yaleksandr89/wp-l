<?php
add_action( 'after_setup_theme', static function () {
	register_nav_menu( 'landing-nav', 'Навигационное меню' );
} );

/*
|--------------------------------------------------------------------------
| Кастомизация навигационного меню. Изменение CLASS и ID
| url1: https://wp-kama.ru/function/wp_nav_menu
| url2: https://wp-kama.ru/hook/nav_menu_item_id
| url3: https://wp-kama.ru/hook/nav_menu_css_class
| url4: https://wp-kama.ru/note/dobavlyaet-atribut-class-aktivnoj-ssylke
|--------------------------------------------------------------------------
*/
add_filter( 'nav_menu_css_class', static function ( $menu_class, $item, $args, $depth ) {
	if ($args->theme_location === 'landing-nav'){
		$array_class = [];
		$array_class[] = 'navMenu__list';
		if ($item->current) {
			$array_class[] = 'active';
		}
		return $array_class;
	}
	return $menu_class;
}, 10, 4 );

add_filter( 'nav_menu_item_id', static function ( $menu_id, $item, $args, $depth ) {
	return $args->theme_location === 'landing-nav' ? '' : $menu_id;
}, 10, 4 );

add_filter( 'nav_menu_link_attributes', static function ( $attributes, $item, $args, $depth ) {
	if ( $args->theme_location && ! isset( $attributes['class'] ) ) {
		$attributes['class'] = 'navMenu__link';
	}
	$attributes['class'] = trim( $attributes['class'] );

	return $attributes;
}, 10, 4 );