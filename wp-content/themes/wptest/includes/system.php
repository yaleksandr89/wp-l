<?php
/**
 * System theme changes
 *
 * @package WordPress
 * @subpackage [YA] Personal WP theme
 * @since 1.0
 * @version 1.0
 */

// Ограничение количества ревизий
if ( ! defined( 'WP_POST_REVISIONS' ) ) {
	define( 'WP_POST_REVISIONS', 5 );
}

// Отключение возможность редактировать файлы в админке для тем, плагинов
define( 'DISALLOW_FILE_EDIT', true );

// закроем возможность публикации через xmlrpc.php
add_filter( 'xmlrpc_enabled', '__return_false' );

// Удаляем публикации статей через сторонние сервисы
remove_action( 'wp_head', 'rsd_link' );

// Полное Удаление версии WP
remove_action( 'wp_head', 'wp_generator' ); // из заголовка
add_filter( 'the_generator', '__return_empty_string' ); // из фидов и URL

// Удаление версии у стилей и скриптов
add_filter( 'script_loader_src', 'remove_wp_version_css_js' );
add_filter( 'style_loader_src', 'remove_wp_version_css_js' );
function remove_wp_version_css_js( $src ) {
	parse_str( parse_url( $src, PHP_URL_QUERY ), $query );
	if ( ! empty( $query['ver'] ) && $query['ver'] === $GLOBALS['wp_version'] ) {
		$src = remove_query_arg( 'ver', $src );
	}

	return $src;
}

// Замена стандартных ошибок на странице входа
add_filter( 'login_errors', static function () {
	return '<p><strong style="color: #eb586f">Доступ запрещен!</strong><br>Логин или пароль указаны неверно.</p>';
} );

// Отключение wp-embed.js
//add_action( 'wp_footer', static function () {
//	wp_deregister_script( 'wp-embed' );
//} );

// Отключение wp-block-library-css (style.min.css) - нужен для Gutenberg
add_action( 'wp_enqueue_scripts', static function () {
	wp_dequeue_style( 'wp-block-library' );
} );

// Подключение скрипта html5 для IE с cdn
add_action( 'wp_head', static function () {
	//echo '<!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->';
	// или если нужна еще и поддержка при печати
	echo '<!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script><![endif]-->';
} );