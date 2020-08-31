<?php
/**
 * @url https://wp-kama.ru/handbook/theme/customize-api
 *
 * @param WP_Customize_Manager $wp_customize
 */

add_action( 'customize_register', static function ( WP_Customize_Manager $wp_customize ) {
	if ( $panel_main_page = 'panel_front_page_block_represent' ) {
		$wp_customize->add_panel(
			$panel_main_page,
			[
				'title'    => 'Главная страница (Представление)',
				'priority' => 996,
			]
		);
		// // Sub-block setting
		if ( $name_section = 'block_represent_setting' ) {
			$wp_customize->add_section(
				$name_section,
				[
					'panel'    => $panel_main_page,
					'title'    => 'Настройки блока',
					'priority' => 0,
				]
			);
			$wp_customize->add_setting(
				'block_represent_setting_title',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_represent_setting_title',
				[
					'section' => $name_section,
					'label'   => 'Заголовок блока',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_represent_setting_description',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_represent_setting_description',
				[
					'section' => $name_section,
					'label'   => 'Описание блока',
					'type'    => 'textarea'
				]
			);
		}
		// Sub-block #1
		if ( $name_section = 'block_represent_1_section' ) {
			$wp_customize->add_section(
				$name_section,
				[
					'panel'    => $panel_main_page,
					'title'    => '1 Секция',
					'priority' => 0,
				]
			);
			$wp_customize->add_setting(
				'block_represent_1_img',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_represent_1_img',
				[
					'section' => $name_section,
					'label'   => 'Имя изображения из папки темы/assets/images',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_represent_1_title',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_represent_1_title',
				[
					'section' => $name_section,
					'label'   => 'Заголовок',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_represent_1_desc',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_represent_1_desc', [
				'section' => $name_section,
				'label'   => 'Описание',
				'type'    => 'textarea',
			] );
		}
		// Sub-block #2
		if ( $name_section = 'block_represent_2_section' ) {
			$wp_customize->add_section(
				$name_section,
				[
					'panel'    => $panel_main_page,
					'title'    => '2 Секция',
					'priority' => 0,
				]
			);
			$wp_customize->add_setting(
				'block_represent_2_img',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_represent_2_img',
				[
					'section' => $name_section,
					'label'   => 'Имя изображения из папки темы/assets/images',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_represent_2_title',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_represent_2_title',
				[
					'section' => $name_section,
					'label'   => 'Заголовок',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_represent_2_desc',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_represent_2_desc', [
				'section' => $name_section,
				'label'   => 'Описание',
				'type'    => 'textarea',
			] );
		}
		// Sub-block #3
		if ( $name_section = 'block_represent_3_section' ) {
			$wp_customize->add_section(
				$name_section,
				[
					'panel'    => $panel_main_page,
					'title'    => '3 Секция',
					'priority' => 0,
				]
			);
			$wp_customize->add_setting(
				'block_represent_3_img',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_represent_3_img',
				[
					'section' => $name_section,
					'label'   => 'Имя изображения из папки темы/assets/images',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_represent_3_title',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_represent_3_title',
				[
					'section' => $name_section,
					'label'   => 'Заголовок',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_represent_3_desc',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_represent_3_desc', [
				'section' => $name_section,
				'label'   => 'Описание',
				'type'    => 'textarea',
			] );
		}
	}
} );