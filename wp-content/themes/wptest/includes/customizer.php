<?php
/**
 * Изменение в режиме реального времени (JS)
 *
 * @see add_action('customize_preview_init',$func)
 */
add_action( 'customize_preview_init', static function () {
	wp_enqueue_script(
		'theme_customizer_live_js',
		WPTEST_DIR_JS . 'theme-customizer.js',
		[
			'jquery',
			'customize-preview'
		],
		WPTEST_THEME_VERSION,
		true
	);
} );


/**
 * @url https://wp-kama.ru/handbook/theme/customize-api
 *
 * @param WP_Customize_Manager $wp_customize
 */

add_action( 'customize_register', static function ( WP_Customize_Manager $wp_customize ) {
	if ( $panel_main_page = 'panel_main_page' ) {
		$wp_customize->add_panel(
			'panel_main_page',
			[
				'title'    => 'Контента на главной странице',
				'priority' => 999,
			]
		);
		if ( $name_section = 'header_h1' ) {
			$wp_customize->add_section(
				$name_section,
				[
					'panel'    => $panel_main_page,
					'title'    => 'Заголовок (h1) страницы',
					'priority' => 0,
				]
			);
			$wp_customize->add_setting(
				'header_h1',
				[
					'transport' => WPTEST_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'header_h1',
				[
					'section' => $name_section,
					'label'   => 'Текст заголовка',
					'type'    => 'text'
				]
			);
		}
		if ( $panel_main_page = 'panel_header_txt_bottom' ) {
			$wp_customize->add_panel(
				'panel_header_txt_bottom',
				[
					'title'    => 'Блок с текстом под шапкой сайта',
					'priority' => 999,
				]
			);
			if ( $name_section = 'header_bottom' ) {
				$wp_customize->add_section(
					$name_section,
					[
						'panel'    => $panel_main_page,
						'title'    => 'Текст блока',
						'priority' => 0,
					]
				);
				$wp_customize->add_setting(
					'header_txt_bottom',
					[
						'transport' => WPTEST_CUSTOMIZER_TRANSPORT_POST_MESSAGE
					]
				);
				$wp_customize->add_control(
					'header_txt_bottom',
					[
						'section' => $name_section,
						'label'   => 'Содержимое блока',
						'type'    => 'textarea'
					]
				);
			}
		}
	}
} );