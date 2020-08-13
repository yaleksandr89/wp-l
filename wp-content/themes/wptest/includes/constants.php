<?php
/**
 * A constant declaration
 *
 * @package WordPress
 * @subpackage [YA] Personal WP theme
 * @since 1.0
 * @version 1.0
 */

// Версия плагина
define( 'WPTEST_THEME_VERSION', '1.0.0' );

// Префикс темы
define( 'WPTEST_THEME_PREFIX', 'wptest_' );

// Путь до CSS
define('WPTEST_DIR_CSS', get_template_directory_uri() . '/assets/css/');

// Путь до JS
define('WPTEST_DIR_JS', get_template_directory_uri() . '/assets/js/');

// Путь до Images
define('WPTEST_DIR_iMAGES', get_template_directory_uri() . '/assets/images/');

/**
 * Значение возвращается, если не удалось вернуть на стройку темы.
 * @url https://wp-kama.ru/function/get_theme_mod
 */
define( 'WPTEST_GET_THE_MOD_DEFAULT', 'Значение поля не установлено' );