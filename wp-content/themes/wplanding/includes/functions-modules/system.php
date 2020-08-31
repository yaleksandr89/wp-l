<?php
/**
 * System theme changes
 *
 * @package WordPress
 * @subpackage [YA] Personal WP theme
 * @since 1.0
 * @version 1.0
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
} );

// Ограничение количества ревизий
add_filter( 'wp_revisions_to_keep', static function ( $revisions ) {
	return 3;
} );

// Отключение возможность редактировать файлы в админке для тем, плагинов
define( 'DISALLOW_FILE_EDIT', true );

// закроем возможность публикации через xmlrpc.php
add_filter( 'xmlrpc_enabled', '__return_false' );

// Удаляем публикации статей через сторонние сервисы
remove_action( 'wp_head', 'rsd_link' );

// Полное Удаление версии WP
remove_action( 'wp_head', 'wp_generator' ); // из заголовка
add_filter( 'the_generator', '__return_empty_string' ); // из фидов и URL

// Замена версии у скриптов и стилей
function _remove_script_and_css_version( $src ) {
	$modifiedSrc    = explode( '?', $src );
	$modifiedSrc[1] = 'ver=' . WPLANDING_THEME_VERSION;
	$modifiedSrc    = implode( '?', $modifiedSrc );

	return $modifiedSrc;
}

add_filter( 'script_loader_src', '_remove_script_and_css_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_and_css_version', 15, 1 );

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

/*
|--------------------------------------------------------------------------
| Настройка SMTP сервера
| url: https://www.kobzarev.com/wordpress/smtp-wordpress/
|--------------------------------------------------------------------------
*/
add_action( 'phpmailer_init', static function ( PHPMailer $phpmailer ) {
	$phpmailer->isSMTP();
	$phpmailer->Host       = SMTP_HOST;
	$phpmailer->SMTPAuth   = SMTP_AUTH;
	$phpmailer->Port       = SMTP_PORT;
	$phpmailer->Username   = SMTP_USER;
	$phpmailer->Password   = SMTP_PASS;
	$phpmailer->SMTPSecure = SMTP_SECURE;
	$phpmailer->From       = SMTP_FROM;
	$phpmailer->FromName   = SMTP_NAME;
} );

/*
|--------------------------------------------------------------------------
| Транслитерация кириллицы в латиницу
|--------------------------------------------------------------------------
*/
function ru2Lat($string) {
	$string = strip_tags( $string );
	$string = str_replace( [ "\n", "\r", '/\s+/' ], ' ', $string );
	$string = trim($string);
	$rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
	$lat = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya');
	$string = str_replace( $rus, $lat, $string );

	return $string;
}