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
	wp_register_script( 'jquery', ( WPTEST_DIR_JS . 'jquery-3.5.1.min.js' ), [], WPTEST_THEME_VERSION, true );
	wp_enqueue_script( 'jquery' );
	// JS
	wp_enqueue_script( 'js', WPTEST_DIR_JS . 'script.js', [], WPTEST_THEME_VERSION, true);

	// CSS
	wp_enqueue_style( 'reset', ( WPTEST_DIR_CSS . 'reset.css' ), [], WPTEST_THEME_VERSION );
	wp_enqueue_style( 'style', ( WPTEST_DIR_CSS . 'styles.css' ), [], WPTEST_THEME_VERSION );
} );