<?php
/**
 * @url https://wp-kama.ru/handbook/theme/customize-api
 *
 * @param WP_Customize_Manager $wp_customize
 */

add_action( 'customize_register', static function ( WP_Customize_Manager $wp_customize ) {
	if ( $name_section = 'block_discover' ) {
		$wp_customize->add_section(
			$name_section,
			[
				'title'    => 'Главная страница (Открытие)',
				'priority' => 997,
			]
		);
		$wp_customize->add_setting(
			'block_discover_title',
			[
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
			]
		);
		$wp_customize->add_control(
			'block_discover_title',
			[
				'section' => $name_section,
				'label'   => 'Заголовок блока',
				'type'    => 'text'
			]
		);
		$wp_customize->add_setting(
			'block_discover_image',
			[
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
			]
		);
		$wp_customize->add_control(
			'block_discover_image',
			[
				'section' => $name_section,
				'label'   => 'Изображение',
				'type'    => 'text'
			]
		);
		$wp_customize->add_setting(
			'block_discover_description',
			[
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
			]
		);
		$wp_customize->add_control(
			'block_discover_description',
			[
				'section' => $name_section,
				'label'   => 'Описание блока',
				'type'    => 'textarea'
			]
		);
		// Icon #1
		$wp_customize->add_setting(
			'block_discover_header_icon_1',
			[
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
			]
		);
		$wp_customize->add_control(
			'block_discover_header_icon_1',
			[
				'section' => $name_section,
				'label'   => '>>> ИКОНКА #1',
				'type'    => 'hidden'
			]
		);
		$wp_customize->add_setting(
			'block_discover_image_icons_1',
			[
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
			]
		);
		$wp_customize->add_control(
			'block_discover_image_icons_1',
			[
				'section' => $name_section,
				'label'   => 'Имя файла из папки темы/assets/images',
				'type'    => 'text'
			]
		);
		$wp_customize->add_setting(
			'block_discover_title_icons_1',
			[
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
			]
		);
		$wp_customize->add_control(
			'block_discover_title_icons_1',
			[
				'section' => $name_section,
				'label'   => 'Заголовок блока',
				'type'    => 'text'
			]
		);
		// Icon #2
		$wp_customize->add_setting(
			'block_discover_header_icon_2',
			[
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
			]
		);
		$wp_customize->add_control(
			'block_discover_header_icon_2',
			[
				'section' => $name_section,
				'label'   => '>>> ИКОНКА #2',
				'type'    => 'hidden'
			]
		);
		$wp_customize->add_setting(
			'block_discover_image_icons_2',
			[
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
			]
		);
		$wp_customize->add_control(
			'block_discover_image_icons_2',
			[
				'section' => $name_section,
				'label'   => 'Имя файла из папки темы/assets/images',
				'type'    => 'text'
			]
		);
		$wp_customize->add_setting(
			'block_discover_title_icons_2',
			[
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
			]
		);
		$wp_customize->add_control(
			'block_discover_title_icons_2',
			[
				'section' => $name_section,
				'label'   => 'Заголовок блока',
				'type'    => 'text'
			]
		);
		// Icon #3
		$wp_customize->add_setting(
			'block_discover_header_icon_3',
			[
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
			]
		);
		$wp_customize->add_control(
			'block_discover_header_icon_3',
			[
				'section' => $name_section,
				'label'   => '>>> ИКОНКА #3',
				'type'    => 'hidden'
			]
		);
		$wp_customize->add_setting(
			'block_discover_image_icons_3',
			[
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
			]
		);
		$wp_customize->add_control(
			'block_discover_image_icons_3',
			[
				'section' => $name_section,
				'label'   => 'Имя файла из папки темы/assets/images',
				'type'    => 'text'
			]
		);
		$wp_customize->add_setting(
			'block_discover_title_icons_3',
			[
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
			]
		);
		$wp_customize->add_control(
			'block_discover_title_icons_3',
			[
				'section' => $name_section,
				'label'   => 'Заголовок блока',
				'type'    => 'text'
			]
		);
		// Icon #4
		$wp_customize->add_setting(
			'block_discover_header_icon_4',
			[
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
			]
		);
		$wp_customize->add_control(
			'block_discover_header_icon_4',
			[
				'section' => $name_section,
				'label'   => '>>> ИКОНКА #4',
				'type'    => 'hidden'
			]
		);
		$wp_customize->add_setting(
			'block_discover_image_icons_4',
			[
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
			]
		);
		$wp_customize->add_control(
			'block_discover_image_icons_4',
			[
				'section' => $name_section,
				'label'   => 'Имя файла из папки темы/assets/images',
				'type'    => 'text'
			]
		);
		$wp_customize->add_setting(
			'block_discover_title_icons_4',
			[
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
			]
		);
		$wp_customize->add_control(
			'block_discover_title_icons_4',
			[
				'section' => $name_section,
				'label'   => 'Заголовок блока',
				'type'    => 'text'
			]
		);
	}
} );