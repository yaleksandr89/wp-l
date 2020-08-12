<?php
/**
 * @url https://wp-kama.ru/handbook/theme/customize-api
 *
 * @param WP_Customize_Manager $wp_customize
 */

add_action('customize_register', static function (WP_Customize_Manager $wp_customize) {
    if ($panel_main_page = 'panel_main_page') {
        $wp_customize->add_panel(
            'panel_main_page',
            array(
                'title' => 'Контента на главной странице',
                'priority' => 999,
            )
        );
        if ($name_section = 'footer_section_1') {
            $wp_customize->add_section(
                $name_section,
                array(
                    'panel' => $panel_main_page,
                    'title' => 'Заголовок (h1) страницы',
                    'priority' => 0,
                )
            );
            $wp_customize->add_setting(
                'header_h1',
                array(
                    'transport' => WPTEST_GET_THE_MOD_DEFAULT
                )
            );
            $wp_customize->add_control(
                'header_h1',
                array(
                    'section' => $name_section,
                    'label' => 'Текст заголовка',
                    'type' => 'text'
                )
            );
        }
    }
});