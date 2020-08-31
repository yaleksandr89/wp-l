<?php
/**
 * @url https://wp-kama.ru/handbook/theme/customize-api
 *
 * @param WP_Customize_Manager $wp_customize
 */

add_action( 'customize_register', static function ( WP_Customize_Manager $wp_customize ) {
	if ( $panel_main_page = 'panel_global_footer' ) {
		$wp_customize->add_panel(
			$panel_main_page,
			[
				'title'    => 'Подвал (Социальные сети)',
				'priority' => 1000,
			]
		);
		// Facebook
		if ( $name_section = 'footer_social_buttons_facebook' ) {
			$wp_customize->add_section(
				$name_section,
				[
					'panel'    => $panel_main_page,
					'title'    => 'Facebook',
					'priority' => 0,
				]
			);
			$wp_customize->add_setting(
				'footer_facebook_icon',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'footer_facebook_icon',
				[
					'section' => $name_section,
					'label'   => 'Иконка (font awesome)',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'footer_facebook_link',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'footer_facebook_link',
				[
					'section' => $name_section,
					'label'   => 'Ссылка',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'footer_facebook_enable', [
				'default'   => false,
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_REFRESH
			] );
			$wp_customize->add_control(
				'footer_facebook_enable', [
				'section' => $name_section,
				'label'   => 'Включить отображение',
				'type'    => 'checkbox',
			] );
		}
		// Twitter
		if ( $name_section = 'footer_social_buttons_twitter' ) {
			$wp_customize->add_section(
				$name_section,
				[
					'panel'    => $panel_main_page,
					'title'    => 'Twitter',
					'priority' => 0,
				]
			);
			$wp_customize->add_setting(
				'footer_twitter_icon',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'footer_twitter_icon',
				[
					'section' => $name_section,
					'label'   => 'Иконка (font awesome)',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'footer_twitter_link',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'footer_twitter_link',
				[
					'section' => $name_section,
					'label'   => 'Ссылка',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'footer_twitter_enable', [
				'default'   => false,
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_REFRESH
			] );
			$wp_customize->add_control(
				'footer_twitter_enable', [
				'section' => $name_section,
				'label'   => 'Включить отображение',
				'type'    => 'checkbox',
			] );
		}
		// Skype
		if ( $name_section = 'footer_social_buttons_skype' ) {
			$wp_customize->add_section(
				$name_section,
				[
					'panel'    => $panel_main_page,
					'title'    => 'Skype',
					'priority' => 0,
				]
			);
			$wp_customize->add_setting(
				'footer_skype_icon',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'footer_skype_icon',
				[
					'section' => $name_section,
					'label'   => 'Иконка (font awesome)',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'footer_skype_link',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'footer_skype_link',
				[
					'section' => $name_section,
					'label'   => 'Ссылка',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'footer_skype_enable', [
				'default'   => false,
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_REFRESH
			] );
			$wp_customize->add_control(
				'footer_skype_enable', [
				'section' => $name_section,
				'label'   => 'Включить отображение',
				'type'    => 'checkbox',
			] );
		}
		// Youtube
		if ( $name_section = 'footer_social_buttons_youtube' ) {
			$wp_customize->add_section(
				$name_section,
				[
					'panel'    => $panel_main_page,
					'title'    => 'Youtube',
					'priority' => 0,
				]
			);
			$wp_customize->add_setting(
				'footer_youtube_icon',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'footer_youtube_icon',
				[
					'section' => $name_section,
					'label'   => 'Иконка (font awesome)',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'footer_youtube_link',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'footer_youtube_link',
				[
					'section' => $name_section,
					'label'   => 'Ссылка',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'footer_youtube_enable', [
				'default'   => false,
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_REFRESH
			] );
			$wp_customize->add_control(
				'footer_youtube_enable', [
				'section' => $name_section,
				'label'   => 'Включить отображение',
				'type'    => 'checkbox',
			] );
		}
		// Instagram
		if ( $name_section = 'footer_social_buttons_instagram' ) {
			$wp_customize->add_section(
				$name_section,
				[
					'panel'    => $panel_main_page,
					'title'    => 'Instagram',
					'priority' => 0,
				]
			);
			$wp_customize->add_setting(
				'footer_instagram_icon',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'footer_instagram_icon',
				[
					'section' => $name_section,
					'label'   => 'Иконка (font awesome)',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'footer_instagram_link',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'footer_instagram_link',
				[
					'section' => $name_section,
					'label'   => 'Ссылка',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'footer_instagram_enable', [
				'default'   => false,
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_REFRESH
			] );
			$wp_customize->add_control(
				'footer_instagram_enable', [
				'section' => $name_section,
				'label'   => 'Включить отображение',
				'type'    => 'checkbox',
			] );
		}
		// Vimeo
		if ( $name_section = 'footer_social_buttons_vimeo' ) {
			$wp_customize->add_section(
				$name_section,
				[
					'panel'    => $panel_main_page,
					'title'    => 'Vimeo',
					'priority' => 0,
				]
			);
			$wp_customize->add_setting(
				'footer_vimeo_icon',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'footer_vimeo_icon',
				[
					'section' => $name_section,
					'label'   => 'Иконка (font awesome)',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'footer_vimeo_link',
				[
					'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_POST_MESSAGE
				]
			);
			$wp_customize->add_control(
				'footer_vimeo_link',
				[
					'section' => $name_section,
					'label'   => 'Ссылка',
					'type'    => 'text'
				]
			);
			$wp_customize->add_setting(
				'footer_vimeo_enable', [
				'default'   => false,
				'transport' => WPLANDING_CUSTOMIZER_TRANSPORT_REFRESH
			] );
			$wp_customize->add_control(
				'footer_vimeo_enable', [
				'section' => $name_section,
				'label'   => 'Включить отображение',
				'type'    => 'checkbox',
			] );
		}
	}

} );