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
define( 'WPLANDING_THEME_VERSION', '1.0.0' );

// Префикс темы
define( 'WPLANDING_THEME_PREFIX', 'wplanding_' );

// Путь до CSS
define('WPLANDING_DIR_CSS', get_template_directory_uri() . '/assets/css/');

// Путь до LIBS
define('WPLANDING_DIR_LIBS', get_template_directory_uri() . '/assets/libs/');

// Путь до JS
define('WPLANDING_DIR_JS', get_template_directory_uri() . '/assets/js/');

// Путь до Images
define('WPLANDING_DIR_iMAGES', get_template_directory_uri() . '/assets/images/');

/**
 * Значение возвращается, если не удалось вернуть на стройку темы.
 * @url https://wp-kama.ru/function/get_theme_mod
 */
define( 'WPLANDING_GET_THE_MOD_DEFAULT', 'Значение поля не установлено' );

/**
 * Параметры отображения предварительного просмотра изменений в Настройщике тем.
 * @url https://wp-kama.ru/handbook/theme/customize-api
 */
define( 'WPLANDING_CUSTOMIZER_TRANSPORT_REFRESH', 'refresh' );
define( 'WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE', 'postMessage' );