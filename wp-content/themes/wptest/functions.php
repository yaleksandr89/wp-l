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
include_once __DIR__ . '/widgets/init.php';
include_once __DIR__ . '/includes/custom-post-types/init.php';

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
	// Форматы постов
	add_theme_support( 'post-formats', [
		'aside',
		'video',
	] );
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
	if ( is_post_type_archive() ) {
		$title['title'] = ru2Lat( $title['title'] );
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
|--------------------------------------------------------------------------
*/
add_filter( 'wptest_the_posts_pagination', static function ( $args ) {
	ob_start();
	the_posts_pagination( [
		'prev_next' => isset( $args['prev_next'] ) ?: false,
	] );
	$default_pagination = ob_get_clean();

	return str_replace(
		[
			"page-numbers",
			"current"
		],
		[
			$args['class_no_active'],
			$args['class_active']
		],
		$default_pagination );
} );

add_filter( 'navigation_markup_template', static function ( $template, $class ) {
	return '
	<nav class="pagination">
		<div class="pagination-links">%3$s</div>
	</nav>
	';
}, 10, 2 );

/*
|--------------------------------------------------------------------------
| Подключение сайдбара из поддиректории
|--------------------------------------------------------------------------
*/
function wptest_theme_sidebar( $path, $name = '' ) {
	do_action( 'get_sidebar', $name );
	if ( $name ) {
		$name = "-$name";
	}
	locate_template( $path . 'sidebar' . $name . '.php', true );
}