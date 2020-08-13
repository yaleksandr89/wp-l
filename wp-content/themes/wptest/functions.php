<?php
/**
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

/*
|--------------------------------------------------------------------------
| Подключение необходимых файлов
|--------------------------------------------------------------------------
*/
include_once __DIR__ . '/helpers/connect.php';
include_once __DIR__ . '/includes/system.php';
include_once __DIR__ . '/includes/constants.php';
include_once __DIR__ . '/includes/styles-scripts.php';
include_once __DIR__ . '/includes/customizer.php';
include_once __DIR__ . '/includes/widget.php';

/*
|--------------------------------------------------------------------------
| Переключение админ-бара (on/off)
| url: https://wp-kama.ru/function/show_admin_bar (show_admin_bar())
|--------------------------------------------------------------------------
*/
//add_filter('show_admin_bar', '__return_false'); // turn off
//add_filter('show_admin_bar', '__return_true'); // turn on

/*
|--------------------------------------------------------------------------
| Поддержка новых возможностей темы
| url: https://wp-kama.ru/function/add_theme_support
|--------------------------------------------------------------------------
*/
add_action( 'after_setup_theme', static function () {
	// Поддержка миниатюр
	add_theme_support( 'post-thumbnails' );
	// Возможномсть менять <title> (wp_title())
	add_theme_support( 'title-tag' );
	// Поддержка HTML5 разметки
	add_theme_support(
		'html5',
		[
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		]
	);
	// Поддержка блоков встраивания (embeds)
	add_theme_support( 'responsive-embeds' );
	// Поддержка навигационного меню
	register_nav_menu( 'header', 'Меню в шапке' );
} );

/*
|--------------------------------------------------------------------------
| Модификация <title>
| url: https://wp-kama.ru/hook/document_title_parts
|
| >>> 1 - Удаление названия сайта из <title> (singular page)
| >>> 2 - Удаление описания сайта и изменение <title> у главной страницы
|--------------------------------------------------------------------------
*/
// >>> 1
add_filter( 'document_title_parts', static function ( $parts ) {
	if ( isset( $parts['site'] ) ) {
		unset( $parts['site'] );
	}

	return $parts;
} );
// >>> 2
add_filter( 'document_title_parts', static function ( $title ) {
	if ( isset( $title['tagline'] ) ) {
		unset( $title['tagline'] );
	}
	if ( is_front_page() ) {
		$title['title'] = 'Home';
	}

	return $title;
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
	return $args->theme_location === 'header' ? [] : $menu_class;
}, 10, 4 );

add_filter( 'nav_menu_item_id', static function ( $menu_id, $item, $args, $depth ) {
	return $args->theme_location === 'header' ? '' : $menu_id;
}, 10, 4 );

add_filter( 'nav_menu_link_attributes', static function ( $attributes, $item, $args, $depth ) {
	if ( $args->theme_location ) {
		if ( ! isset( $attributes['class'] ) ) {
			$attributes['class'] = '';
		}

		if ( $item->current ) {
			$class               = 'active';
			$attributes['class'] .= isset( $atts['class'] ) ? "{$atts['class']} $class" : $class;
		}
	}
	$attributes['class'] = trim( $attributes['class'] );

	return $attributes;
}, 10, 4 );

/*
|--------------------------------------------------------------------------
| Удаление кнопки: "Читать далее"
|--------------------------------------------------------------------------
*/
add_filter( 'the_content_more_link', '__return_empty_string' );

/*
|--------------------------------------------------------------------------
| Изменение разметки для пагинации
| url: https://wp-kama.ru/function/the_posts_pagination
|--------------------------------------------------------------------------
*/
add_filter( 'navigation_markup_template', static function ( $template, $class ) {
	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}, 10, 2 );