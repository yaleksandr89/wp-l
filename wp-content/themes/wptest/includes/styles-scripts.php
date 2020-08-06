<?php
/**
 * Connecting styles and scripts
 *
 * @package WordPress
 * @subpackage [YA] Personal WP theme
 * @since 1.0
 * @version 1.0
 */

add_action( 'wp_enqueue_scripts', static function () {
	// Отключение встроенного в WordPress jQuery и подключение общего JS файла
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', ( get_template_directory_uri() . '/assets/js/script.js' ), [], WP_TEST_THEME_VERSION, true );
	wp_enqueue_script( 'jquery' );

	// CSS
	wp_enqueue_style( 'style', ( get_template_directory_uri() . '/assets/css/style.css' ), [], WP_TEST_THEME_VERSION );
} );