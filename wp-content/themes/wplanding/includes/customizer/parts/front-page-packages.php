<?php
/**
 * @url https://wp-kama.ru/handbook/theme/customize-api
 *
 * @param WP_Customize_Manager $wp_customize
 */

add_action( 'customize_register', static function ( WP_Customize_Manager $wp_customize ) {
	if ( $panel_main_page = 'panel_front_page_block_packages' ) {
		$wp_customize->add_panel(
			$panel_main_page,
			[
				'title'    => 'Главная страница (Тарифы)',
				'priority' => 999,
			]
		);
		// Sub-block setting
		if ( $name_section = 'block_packages_settings' ) {
			$wp_customize->add_section(
				$name_section,
				[
					'panel'    => $panel_main_page,
					'title'    => 'Настройки блока',
					'priority' => 0,
				]
			);
			$wp_customize->add_setting(
				'block_packages_settings_title',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_settings_title', [
				'section' => $name_section,
				'label'   => 'Заголовок',
				'type'    => 'text',
			] );
			$wp_customize->add_setting(
				'block_packages_settings_a_txt',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_settings_a_txt', [
				'section' => $name_section,
				'label'   => 'Описание ссылки',
				'type'    => 'text',
			] );
			$wp_customize->add_setting(
				'block_packages_settings_a_url',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_settings_a_url', [
				'section' => $name_section,
				'label'   => 'Адрес ссылки',
				'type'    => 'text',
			] );
		}
		// Sub-block #1
		if ( $name_section = 'block_packages_1_section' ) {
			$wp_customize->add_section(
				$name_section,
				[
					'panel'    => $panel_main_page,
					'title'    => '1 Секция',
					'priority' => 0,
				]
			);
			$wp_customize->add_setting(
				'block_packages_1_title',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_1_title',
				[
					'section' => $name_section,
					'label'   => 'Заголовок блока',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_packages_1_header_price',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_1_header_price',
				[
					'section' => $name_section,
					'label'   => '>>> Раздел цена',
					'type'    => 'hidden'
				]
			);
			$wp_customize->add_setting(
				'block_packages_1_price_start',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_1_price_start', [
				'section' => $name_section,
				'label'   => 'Наименование валюты',
				'type'    => 'text',
			] );
			$wp_customize->add_setting(
				'block_packages_1_price_middle',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_1_price_middle',
				[
					'section' => $name_section,
					'label'   => 'Цена',
					'type'    => 'number'
				]
			);
			$wp_customize->add_setting(
				'block_packages_1_price_end',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_1_price_end', [
				'section' => $name_section,
				'label'   => 'Временной диапазон (месяц, год ...)',
				'type'    => 'text',
			] );
			$wp_customize->add_setting(
				'block_packages_1_header_affordable',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_1_header_affordable',
				[
					'section' => $name_section,
					'label'   => '>>> Раздел перечень услуг',
					'type'    => 'hidden'
				]
			);
			// Service 1
			$wp_customize->add_setting(
				'block_packages_1_header_service_1',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_1_header_service_1',
				[
					'section' => $name_section,
					'label'   => 'Услуга 1',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_packages_1_header_service_1_enable', [
				'default'   => false,
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_REFRESH
			] );
			$wp_customize->add_control(
				'block_packages_1_header_service_1_enable', [
				'section' => $name_section,
				'label'   => 'Включить отображение',
				'type'    => 'checkbox',
			] );
			$wp_customize->add_setting(
				'block_packages_1_header_hr',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_1_header_hr',
				[
					'section' => $name_section,
					'label'   => '-------',
					'type'    => 'hidden'
				]
			);
			// Service 2
			$wp_customize->add_setting(
				'block_packages_1_header_service_2',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_1_header_service_2',
				[
					'section' => $name_section,
					'label'   => 'Услуга 2',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_packages_1_header_service_2_enable', [
				'default'   => false,
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_REFRESH
			] );
			$wp_customize->add_control(
				'block_packages_1_header_service_2_enable', [
				'section' => $name_section,
				'label'   => 'Включить отображение',
				'type'    => 'checkbox',
			] );
			$wp_customize->add_setting(
				'block_packages_1_header_hr_2',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_1_header_hr_2',
				[
					'section' => $name_section,
					'label'   => '-------',
					'type'    => 'hidden'
				]
			);
			// Service 3
			$wp_customize->add_setting(
				'block_packages_1_header_service_3',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_1_header_service_3',
				[
					'section' => $name_section,
					'label'   => 'Услуга 3',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_packages_1_header_service_3_enable', [
				'default'   => false,
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_REFRESH
			] );
			$wp_customize->add_control(
				'block_packages_1_header_service_3_enable', [
				'section' => $name_section,
				'label'   => 'Включить отображение',
				'type'    => 'checkbox',
			] );
			$wp_customize->add_setting(
				'block_packages_1_header_hr_3',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_1_header_hr_3',
				[
					'section' => $name_section,
					'label'   => '-------',
					'type'    => 'hidden'
				]
			);
			// Service 4
			$wp_customize->add_setting(
				'block_packages_1_header_service_4',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_1_header_service_4',
				[
					'section' => $name_section,
					'label'   => 'Услуга 4',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_packages_1_header_service_4_enable', [
				'default'   => false,
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_REFRESH
			] );
			$wp_customize->add_control(
				'block_packages_1_header_service_4_enable', [
				'section' => $name_section,
				'label'   => 'Включить отображение',
				'type'    => 'checkbox',
			] );
			$wp_customize->add_setting(
				'block_packages_1_header_hr_4',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_1_header_hr_4',
				[
					'section' => $name_section,
					'label'   => '-------',
					'type'    => 'hidden'
				]
			);
			// Service 5
			$wp_customize->add_setting(
				'block_packages_1_header_service_5',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_1_header_service_5',
				[
					'section' => $name_section,
					'label'   => 'Услуга 5',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_packages_1_header_service_5_enable', [
				'default'   => false,
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_REFRESH
			] );
			$wp_customize->add_control(
				'block_packages_1_header_service_5_enable', [
				'section' => $name_section,
				'label'   => 'Включить отображение',
				'type'    => 'checkbox',
			] );
			$wp_customize->add_setting(
				'block_packages_1_header_hr_5',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_1_header_hr_5',
				[
					'section' => $name_section,
					'label'   => '-------',
					'type'    => 'hidden'
				]
			);
			// Service 6
			$wp_customize->add_setting(
				'block_packages_1_header_service_6',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_1_header_service_6',
				[
					'section' => $name_section,
					'label'   => 'Услуга 6',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_packages_1_header_service_6_enable', [
				'default'   => false,
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_REFRESH
			] );
			$wp_customize->add_control(
				'block_packages_1_header_service_6_enable', [
				'section' => $name_section,
				'label'   => 'Включить отображение',
				'type'    => 'checkbox',
			] );
			$wp_customize->add_setting(
				'block_packages_1_header_hr_6',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_1_header_hr_6',
				[
					'section' => $name_section,
					'label'   => '-------',
					'type'    => 'hidden'
				]
			);
		}
		// Sub-block #2
		if ( $name_section = 'block_packages_2_section' ) {
			$wp_customize->add_section(
				$name_section,
				[
					'panel'    => $panel_main_page,
					'title'    => '2 Секция',
					'priority' => 0,
				]
			);
			$wp_customize->add_setting(
				'block_packages_2_title',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_2_title',
				[
					'section' => $name_section,
					'label'   => 'Заголовок блока',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_packages_2_header_price',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_2_header_price',
				[
					'section' => $name_section,
					'label'   => '>>> Раздел цена',
					'type'    => 'hidden'
				]
			);
			$wp_customize->add_setting(
				'block_packages_2_price_start',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_2_price_start', [
				'section' => $name_section,
				'label'   => 'Наименование валюты',
				'type'    => 'text',
			] );
			$wp_customize->add_setting(
				'block_packages_2_price_middle',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_2_price_middle',
				[
					'section' => $name_section,
					'label'   => 'Цена',
					'type'    => 'number'
				]
			);
			$wp_customize->add_setting(
				'block_packages_2_price_end',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_2_price_end', [
				'section' => $name_section,
				'label'   => 'Временной диапазон (месяц, год ...)',
				'type'    => 'text',
			] );
			$wp_customize->add_setting(
				'block_packages_2_header_affordable',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_2_header_affordable',
				[
					'section' => $name_section,
					'label'   => '>>> Раздел перечень услуг',
					'type'    => 'hidden'
				]
			);
			// Service 1
			$wp_customize->add_setting(
				'block_packages_2_header_service_1',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_2_header_service_1',
				[
					'section' => $name_section,
					'label'   => 'Услуга 1',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_packages_2_header_service_1_enable', [
				'default'   => false,
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_REFRESH
			] );
			$wp_customize->add_control(
				'block_packages_2_header_service_1_enable', [
				'section' => $name_section,
				'label'   => 'Включить отображение',
				'type'    => 'checkbox',
			] );
			$wp_customize->add_setting(
				'block_packages_2_header_hr_1',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_2_header_hr_1',
				[
					'section' => $name_section,
					'label'   => '-------',
					'type'    => 'hidden'
				]
			);
			// Service 2
			$wp_customize->add_setting(
				'block_packages_2_header_service_2',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_2_header_service_2',
				[
					'section' => $name_section,
					'label'   => 'Услуга 2',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_packages_2_header_service_2_enable', [
				'default'   => false,
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_REFRESH
			] );
			$wp_customize->add_control(
				'block_packages_2_header_service_2_enable', [
				'section' => $name_section,
				'label'   => 'Включить отображение',
				'type'    => 'checkbox',
			] );
			$wp_customize->add_setting(
				'block_packages_2_header_hr_2',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_2_header_hr_2',
				[
					'section' => $name_section,
					'label'   => '-------',
					'type'    => 'hidden'
				]
			);
			// Service 3
			$wp_customize->add_setting(
				'block_packages_2_header_service_3',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_2_header_service_3',
				[
					'section' => $name_section,
					'label'   => 'Услуга 3',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_packages_2_header_service_3_enable', [
				'default'   => false,
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_REFRESH
			] );
			$wp_customize->add_control(
				'block_packages_2_header_service_3_enable', [
				'section' => $name_section,
				'label'   => 'Включить отображение',
				'type'    => 'checkbox',
			] );
			$wp_customize->add_setting(
				'block_packages_2_header_hr_2',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_2_header_hr_2',
				[
					'section' => $name_section,
					'label'   => '-------',
					'type'    => 'hidden'
				]
			);
			// Service 4
			$wp_customize->add_setting(
				'block_packages_2_header_service_4',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_2_header_service_4',
				[
					'section' => $name_section,
					'label'   => 'Услуга 4',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_packages_2_header_service_4_enable', [
				'default'   => false,
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_REFRESH
			] );
			$wp_customize->add_control(
				'block_packages_2_header_service_4_enable', [
				'section' => $name_section,
				'label'   => 'Включить отображение',
				'type'    => 'checkbox',
			] );
			$wp_customize->add_setting(
				'block_packages_2_header_hr_4',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_2_header_hr_4',
				[
					'section' => $name_section,
					'label'   => '-------',
					'type'    => 'hidden'
				]
			);
			// Service 5
			$wp_customize->add_setting(
				'block_packages_2_header_service_5',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_2_header_service_5',
				[
					'section' => $name_section,
					'label'   => 'Услуга 5',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_packages_2_header_service_5_enable', [
				'default'   => false,
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_REFRESH
			] );
			$wp_customize->add_control(
				'block_packages_2_header_service_5_enable', [
				'section' => $name_section,
				'label'   => 'Включить отображение',
				'type'    => 'checkbox',
			] );
			$wp_customize->add_setting(
				'block_packages_2_header_hr_5',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_2_header_hr_5',
				[
					'section' => $name_section,
					'label'   => '-------',
					'type'    => 'hidden'
				]
			);
			// Service 6
			$wp_customize->add_setting(
				'block_packages_2_header_service_6',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_2_header_service_6',
				[
					'section' => $name_section,
					'label'   => 'Услуга 6',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_packages_2_header_service_6_enable', [
				'default'   => false,
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_REFRESH
			] );
			$wp_customize->add_control(
				'block_packages_2_header_service_6_enable', [
				'section' => $name_section,
				'label'   => 'Включить отображение',
				'type'    => 'checkbox',
			] );
			$wp_customize->add_setting(
				'block_packages_2_header_hr_6',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_2_header_hr_6',
				[
					'section' => $name_section,
					'label'   => '-------',
					'type'    => 'hidden'
				]
			);
		}
		// Sub-block #3
		if ( $name_section = 'block_packages_3_section' ) {
			$wp_customize->add_section(
				$name_section,
				[
					'panel'    => $panel_main_page,
					'title'    => '3 Секция',
					'priority' => 0,
				]
			);
			$wp_customize->add_setting(
				'block_packages_3_title',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_3_title',
				[
					'section' => $name_section,
					'label'   => 'Заголовок блока',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_packages_3_header_price',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_3_header_price',
				[
					'section' => $name_section,
					'label'   => '>>> Раздел цена',
					'type'    => 'hidden'
				]
			);
			$wp_customize->add_setting(
				'block_packages_3_price_start',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_3_price_start', [
				'section' => $name_section,
				'label'   => 'Наименование валюты',
				'type'    => 'text',
			] );
			$wp_customize->add_setting(
				'block_packages_3_price_middle',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_3_price_middle',
				[
					'section' => $name_section,
					'label'   => 'Цена',
					'type'    => 'number'
				]
			);
			$wp_customize->add_setting(
				'block_packages_3_price_end',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_3_price_end', [
				'section' => $name_section,
				'label'   => 'Временной диапазон (месяц, год ...)',
				'type'    => 'text',
			] );
			$wp_customize->add_setting(
				'block_packages_3_header_affordable',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_3_header_affordable',
				[
					'section' => $name_section,
					'label'   => '>>> Раздел перечень услуг',
					'type'    => 'hidden'
				]
			);
			// Service 1
			$wp_customize->add_setting(
				'block_packages_3_header_service_1',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_3_header_service_1',
				[
					'section' => $name_section,
					'label'   => 'Услуга 1',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_packages_3_header_service_1_enable', [
				'default'   => false,
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_REFRESH
			] );
			$wp_customize->add_control(
				'block_packages_3_header_service_1_enable', [
				'section' => $name_section,
				'label'   => 'Включить отображение',
				'type'    => 'checkbox',
			] );
			$wp_customize->add_setting(
				'block_packages_3_header_hr_1',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_3_header_hr_1',
				[
					'section' => $name_section,
					'label'   => '-------',
					'type'    => 'hidden'
				]
			);
			// Service 2
			$wp_customize->add_setting(
				'block_packages_3_header_service_2',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_3_header_service_2',
				[
					'section' => $name_section,
					'label'   => 'Услуга 2',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_packages_3_header_service_2_enable', [
				'default'   => false,
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_REFRESH
			] );
			$wp_customize->add_control(
				'block_packages_3_header_service_2_enable', [
				'section' => $name_section,
				'label'   => 'Включить отображение',
				'type'    => 'checkbox',
			] );
			$wp_customize->add_setting(
				'block_packages_3_header_hr_2',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_3_header_hr_2',
				[
					'section' => $name_section,
					'label'   => '-------',
					'type'    => 'hidden'
				]
			);
			// Service 3
			$wp_customize->add_setting(
				'block_packages_3_header_service_3',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_3_header_service_3',
				[
					'section' => $name_section,
					'label'   => 'Услуга 3',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_packages_3_header_service_3_enable', [
				'default'   => false,
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_REFRESH
			] );
			$wp_customize->add_control(
				'block_packages_3_header_service_3_enable', [
				'section' => $name_section,
				'label'   => 'Включить отображение',
				'type'    => 'checkbox',
			] );
			$wp_customize->add_setting(
				'block_packages_3_header_hr_2',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_3_header_hr_2',
				[
					'section' => $name_section,
					'label'   => '-------',
					'type'    => 'hidden'
				]
			);
			// Service 4
			$wp_customize->add_setting(
				'block_packages_3_header_service_4',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_3_header_service_4',
				[
					'section' => $name_section,
					'label'   => 'Услуга 4',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_packages_3_header_service_4_enable', [
				'default'   => false,
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_REFRESH
			] );
			$wp_customize->add_control(
				'block_packages_3_header_service_4_enable', [
				'section' => $name_section,
				'label'   => 'Включить отображение',
				'type'    => 'checkbox',
			] );
			$wp_customize->add_setting(
				'block_packages_3_header_hr_4',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_3_header_hr_4',
				[
					'section' => $name_section,
					'label'   => '-------',
					'type'    => 'hidden'
				]
			);
			// Service 5
			$wp_customize->add_setting(
				'block_packages_3_header_service_5',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_3_header_service_5',
				[
					'section' => $name_section,
					'label'   => 'Услуга 5',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_packages_3_header_service_5_enable', [
				'default'   => false,
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_REFRESH
			] );
			$wp_customize->add_control(
				'block_packages_3_header_service_5_enable', [
				'section' => $name_section,
				'label'   => 'Включить отображение',
				'type'    => 'checkbox',
			] );
			$wp_customize->add_setting(
				'block_packages_3_header_hr_5',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_3_header_hr_5',
				[
					'section' => $name_section,
					'label'   => '-------',
					'type'    => 'hidden'
				]
			);
			// Service 6
			$wp_customize->add_setting(
				'block_packages_3_header_service_6',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_3_header_service_6',
				[
					'section' => $name_section,
					'label'   => 'Услуга 6',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'block_packages_3_header_service_6_enable', [
				'default'   => false,
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_REFRESH
			] );
			$wp_customize->add_control(
				'block_packages_3_header_service_6_enable', [
				'section' => $name_section,
				'label'   => 'Включить отображение',
				'type'    => 'checkbox',
			] );
			$wp_customize->add_setting(
				'block_packages_3_header_hr_6',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'block_packages_3_header_hr_6',
				[
					'section' => $name_section,
					'label'   => '-------',
					'type'    => 'hidden'
				]
			);

		}
	}
} );