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
	wp_register_script( 'jquery', ( WPLANDING_DIR_LIBS . 'jquery/jquery.min.js' ), [], WPLANDING_THEME_VERSION, true );
	wp_enqueue_script( 'jquery' );
	// JS
	wp_enqueue_script( 'slick', WPLANDING_DIR_LIBS . 'slick-carousel/slick.min.js', [], WPLANDING_THEME_VERSION, true );
	wp_enqueue_script( 'magnific-popup', WPLANDING_DIR_JS . 'jquery.magnific-popup.min.js', [], WPLANDING_THEME_VERSION, true );
	wp_enqueue_script( 'main', WPLANDING_DIR_JS . 'main.js', [], WPLANDING_THEME_VERSION, true );

	// CSS
	wp_enqueue_style( 'ubuntu', ( WPLANDING_DIR_CSS . 'ubuntu.css' ), [], WPLANDING_THEME_VERSION );
	wp_enqueue_style( 'font-awesome', ( WPLANDING_DIR_CSS . 'font-awesome.min.css' ), [], WPLANDING_THEME_VERSION );
	wp_enqueue_style( 'slick', ( WPLANDING_DIR_LIBS . 'slick-carousel/slick.css' ), [], WPLANDING_THEME_VERSION );
	wp_enqueue_style( 'slick-theme', ( WPLANDING_DIR_LIBS . 'slick-carousel/slick-theme.css' ), [], WPLANDING_THEME_VERSION );
	wp_enqueue_style( 'magnific-popup', ( WPLANDING_DIR_CSS . 'magnific-popup.css' ), [], WPLANDING_THEME_VERSION );
	wp_enqueue_style( 'main', ( WPLANDING_DIR_CSS . 'style.css' ), [], WPLANDING_THEME_VERSION );
} );

// AJAX variable
add_action( 'wp_enqueue_scripts', static function () {
	wp_localize_script( 'main', '_GLOBAL',
		[
			'ajaxurl' => admin_url( 'admin-ajax.php' )
		],
	);
}, 99 );