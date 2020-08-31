<?php
// Базовая подготовка - удаление ненужных секций и настроек
add_action( 'customize_register', static function ( WP_Customize_Manager $wp_customize ) {
	$wp_customize->remove_section( 'static_front_page' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'installed_themes' );
	$wp_customize->remove_section( 'wporg_themes' );
	$wp_customize->remove_section( 'custom_css' );
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_control( 'site_icon' );
}, 999 );

// Кастомизация "Подвала"
include_once( __DIR__ . '/parts/footer.php' );

// Кастомизация блока "Статистика (.stats) на главной странице"
include_once( __DIR__ . '/parts/front-page-stat.php' );

// Кастомизация блока "Преимущества (.advantages) на главной странице"
include_once( __DIR__ . '/parts/front-page-advantages.php' );

// Кастомизация блока "Преимущества (.advantages) на главной странице"
include_once( __DIR__ . '/parts/front-page-represent.php' );

// Кастомизация блока "Открытие (.discover) на главной странице"
include_once( __DIR__ . '/parts/front-page-discover.php' );

// Кастомизация блока "Доступные предложения (.packages) на главной странице"
include_once( __DIR__ . '/parts/front-page-packages.php' );

/**
 * Изменение в режиме реального времени (JS)
 *
 * @see add_action('customize_preview_init',$func)
 */
add_action( 'customize_preview_init', static function () {
	wp_enqueue_script(
		'theme_customizer_live_js',
		WPLANDING_DIR_JS . 'theme-customizer.js',
		[
			'jquery',
			'customize-preview'
		],
		WPLANDING_THEME_VERSION,
		true
	);
} );


add_action( 'wp_enqueue_scripts', static function () {
	wp_localize_script( 'theme_customizer_live_js', 'WPLANDING_DIR_iMAGES', [
		'url' => WPLANDING_DIR_iMAGES,
	] );
} );