<?php
/**
 * @url https://wp-kama.ru/handbook/theme/customize-api
 *
 * @param WP_Customize_Manager $wp_customize
 */

add_action( 'customize_register', static function ( WP_Customize_Manager $wp_customize ) {
	if ( $panel_main_page = 'panel_front_page_block_stats' ) {
		$wp_customize->add_panel(
			$panel_main_page,
			[
				'title'    => 'Главная страница (Статистика)',
				'priority' => 999,
			]
		);
		// Sub-block #1
		if ( $name_section = 'block_stats_1_section' ) {
			$wp_customize->add_section(
				$name_section,
				[
					'panel'    => $panel_main_page,
					'title'    => '1 Секция',
					'priority' => 0,
				]
			);
			$wp_customize->add_setting(
				'block_stats_1_img',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_stats_1_img',
				[
					'section' => $name_section,
					'label'   => 'Имя изображения из папки темы/assets/images',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_stats_1_count',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_stats_1_count',
				[
					'section' => $name_section,
					'label'   => 'Число',
					'type'    => 'number'
				]
			);
			$wp_customize->add_setting(
				'block_stats_1_desc',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_stats_1_desc', [
				'section' => $name_section,
				'label'   => 'Описание',
				'type'    => 'text',
			] );
		}
		// Sub-block #2
		if ( $name_section = 'block_stats_2_section' ) {
			$wp_customize->add_section(
				$name_section,
				[
					'panel'    => $panel_main_page,
					'title'    => '2 Секция',
					'priority' => 0,
				]
			);
			$wp_customize->add_setting(
				'block_stats_2_img',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_stats_2_img',
				[
					'section' => $name_section,
					'label'   => 'Имя изображения из папки темы/assets/images',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_stats_2_count',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_stats_2_count',
				[
					'section' => $name_section,
					'label'   => 'Число',
					'type'    => 'number'
				]
			);
			$wp_customize->add_setting(
				'block_stats_2_desc',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_stats_2_desc', [
				'section' => $name_section,
				'label'   => 'Описание',
				'type'    => 'text',
			] );
		}
		// Sub-block #3
		if ( $name_section = 'block_stats_3_section' ) {
			$wp_customize->add_section(
				$name_section,
				[
					'panel'    => $panel_main_page,
					'title'    => '3 Секция',
					'priority' => 0,
				]
			);
			$wp_customize->add_setting(
				'block_stats_3_img',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_stats_3_img',
				[
					'section' => $name_section,
					'label'   => 'Имя изображения из папки темы/assets/images',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_stats_3_count',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_stats_3_count',
				[
					'section' => $name_section,
					'label'   => 'Число',
					'type'    => 'number'
				]
			);
			$wp_customize->add_setting(
				'block_stats_3_desc',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_stats_3_desc', [
				'section' => $name_section,
				'label'   => 'Описание',
				'type'    => 'text',
			] );
		}
		// Sub-block #4
		if ( $name_section = 'block_stats_4_section' ) {
			$wp_customize->add_section(
				$name_section,
				[
					'panel'    => $panel_main_page,
					'title'    => '4 Секция',
					'priority' => 0,
				]
			);
			$wp_customize->add_setting(
				'block_stats_4_img',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_stats_4_img',
				[
					'section' => $name_section,
					'label'   => 'Имя изображения из папки темы/assets/images',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_stats_4_count',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_stats_4_count',
				[
					'section' => $name_section,
					'label'   => 'Число',
					'type'    => 'number'
				]
			);
			$wp_customize->add_setting(
				'block_stats_4_desc',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_stats_4_desc', [
				'section' => $name_section,
				'label'   => 'Описание',
				'type'    => 'text',
			] );
		}
	}

} );