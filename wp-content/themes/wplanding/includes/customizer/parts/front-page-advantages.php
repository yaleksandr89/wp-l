<?php
/**
 * @url https://wp-kama.ru/handbook/theme/customize-api
 *
 * @param WP_Customize_Manager $wp_customize
 */

add_action( 'customize_register', static function ( WP_Customize_Manager $wp_customize ) {
	if ( $panel_main_page = 'panel_front_page_block_advantages' ) {
		$wp_customize->add_panel(
			$panel_main_page,
			[
				'title'    => 'Главная страница (Преимущества)',
				'priority' => 997,
			]
		);

		// Sub-block #1
		if ( $name_section = 'block_advantages_1_section' ) {
			$wp_customize->add_section(
				$name_section,
				[
					'panel'    => $panel_main_page,
					'title'    => '1 Секция',
					'priority' => 0,
				]
			);
			$wp_customize->add_setting(
				'block_advantages_1_img',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_advantages_1_img',
				[
					'section' => $name_section,
					'label'   => 'Имя изображения из папки темы/assets/images',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_advantages_1_title',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_advantages_1_title',
				[
					'section' => $name_section,
					'label'   => 'Число',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_advantages_1_desc',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_advantages_1_desc', [
				'section' => $name_section,
				'label'   => 'Описание',
				'type'    => 'text',
			] );
		}
		// Sub-block #2
		if ( $name_section = 'block_advantages_2_section' ) {
			$wp_customize->add_section(
				$name_section,
				[
					'panel'    => $panel_main_page,
					'title'    => '2 Секция',
					'priority' => 0,
				]
			);
			$wp_customize->add_setting(
				'block_advantages_2_img',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_advantages_2_img',
				[
					'section' => $name_section,
					'label'   => 'Имя изображения из папки темы/assets/images',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_advantages_2_title',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_advantages_2_title',
				[
					'section' => $name_section,
					'label'   => 'Число',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_advantages_2_desc',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_advantages_2_desc', [
				'section' => $name_section,
				'label'   => 'Описание',
				'type'    => 'text',
			] );
		}
		// Sub-block #3
		if ( $name_section = 'block_advantages_3_section' ) {
			$wp_customize->add_section(
				$name_section,
				[
					'panel'    => $panel_main_page,
					'title'    => '3 Секция',
					'priority' => 0,
				]
			);
			$wp_customize->add_setting(
				'block_advantages_3_img',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_advantages_3_img',
				[
					'section' => $name_section,
					'label'   => 'Имя изображения из папки темы/assets/images',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_advantages_3_title',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_advantages_3_title',
				[
					'section' => $name_section,
					'label'   => 'Число',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_advantages_3_desc',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_advantages_3_desc', [
				'section' => $name_section,
				'label'   => 'Описание',
				'type'    => 'text',
			] );
		}
	}

} );