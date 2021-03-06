(function ($) {
    var api = wp.customize;
    // >>> Блок "Представления" (.represent) //
    // Секция "Настроки блока"
    api('block_represent_setting_title', function (value) {
        value.bind(function (new_value) {
            $('#block_represent_setting_title').text(new_value);
        })
    });
    api('block_represent_setting_description', function (value) {
        value.bind(function (new_value) {
            $('#block_represent_setting_description').text(new_value);
        })
    });
    // 1 Секция
    api('block_represent_1_img', function (value) {
        value.bind(function (new_value) {
            $('#block_represent_1_img').attr('src', window.WPLANDING_DIR_iMAGES.url + new_value);
        })
    });
    api('block_represent_1_title', function (value) {
        value.bind(function (new_value) {
            $('#block_represent_1_title').text(new_value);
        })
    });
    api('block_represent_1_desc', function (value) {
        value.bind(function (new_value) {
            $('#block_represent_1_desc').text(new_value);
        })
    });
    // 2 Секция
    api('block_represent_2_img', function (value) {
        value.bind(function (new_value) {
            $('#block_represent_2_img').attr('src', window.WPLANDING_DIR_iMAGES.url + new_value);
        })
    });
    api('block_represent_2_title', function (value) {
        value.bind(function (new_value) {
            $('#block_represent_2_title').text(new_value);
        })
    });
    api('block_represent_2_desc', function (value) {
        value.bind(function (new_value) {
            $('#block_represent_2_desc').text(new_value);
        })
    });
    // 3 Секция
    api('block_represent_3_img', function (value) {
        value.bind(function (new_value) {
            $('#block_represent_3_img').attr('src', window.WPLANDING_DIR_iMAGES.url + new_value);
        })
    });
    api('block_represent_3_title', function (value) {
        value.bind(function (new_value) {
            $('#block_represent_3_title').text(new_value);
        })
    });
    api('block_represent_3_desc', function (value) {
        value.bind(function (new_value) {
            $('#block_represent_3_desc').text(new_value);
        })
    });
    // Блок "Представления" (.represent) <<< //

    // >>> Блок "Открытие" (.discover) //
    api('block_discover_title', function (value) {
        value.bind(function (new_value) {
            $('#block_discover_title').text(new_value);
        })
    });
    api('block_discover_image', function (value) {
        value.bind(function (new_value) {
            $('#block_discover_image').attr('src', window.WPLANDING_DIR_iMAGES.url + new_value);
        })
    });
    api('block_discover_description', function (value) {
        value.bind(function (new_value) {
            $('#block_discover_description').text(new_value);
        })
    });
    api('block_discover_image_icons_1', function (value) {
        value.bind(function (new_value) {
            $('#block_discover_image_icons_1').attr('src', window.WPLANDING_DIR_iMAGES.url + new_value);
        })
    });
    api('block_discover_title_icons_1', function (value) {
        value.bind(function (new_value) {
            $('#block_discover_title_icons_1').text(new_value);
        })
    });
    api('block_discover_image_icons_2', function (value) {
        value.bind(function (new_value) {
            $('#block_discover_image_icons_2').attr('src', window.WPLANDING_DIR_iMAGES.url + new_value);
        })
    });
    api('block_discover_title_icons_2', function (value) {
        value.bind(function (new_value) {
            $('#block_discover_title_icons_2').text(new_value);
        })
    });
    api('block_discover_image_icons_3', function (value) {
        value.bind(function (new_value) {
            $('#block_discover_image_icons_3').attr('src', window.WPLANDING_DIR_iMAGES.url + new_value);
        })
    });
    api('block_discover_title_icons_3', function (value) {
        value.bind(function (new_value) {
            $('#block_discover_title_icons_3').text(new_value);
        })
    });
    api('block_discover_image_icons_4', function (value) {
        value.bind(function (new_value) {
            $('#block_discover_image_icons_4').attr('src', window.WPLANDING_DIR_iMAGES.url + new_value);
        })
    });
    api('block_discover_title_icons_4', function (value) {
        value.bind(function (new_value) {
            $('#block_discover_title_icons_4').text(new_value);
        })
    });
    // Блок "Открытие" (.discover) <<< //

    // >>> Блок "Преимущества" (.advantages) //
    // 1 Секция
    api('block_advantages_1_img', function (value) {
        value.bind(function (new_value) {
            $('#block_advantages_1_img').attr('src', window.WPLANDING_DIR_iMAGES.url + new_value);
        })
    });
    api('block_advantages_1_title', function (value) {
        value.bind(function (new_value) {
            $('#block_advantages_1_title').text(new_value);
        })
    });
    api('block_advantages_1_desc', function (value) {
        value.bind(function (new_value) {
            $('#block_advantages_1_desc').text(new_value);
        })
    });
    // 2 Секция
    api('block_advantages_2_img', function (value) {
        value.bind(function (new_value) {
            $('#block_advantages_2_img').attr('src', window.WPLANDING_DIR_iMAGES.url + new_value);
        })
    });
    api('block_advantages_2_title', function (value) {
        value.bind(function (new_value) {
            $('#block_advantages_2_title').text(new_value);
        })
    });
    api('block_advantages_2_desc', function (value) {
        value.bind(function (new_value) {
            $('#block_advantages_2_desc').text(new_value);
        })
    });
    // 3 Секция
    api('block_advantages_3_img', function (value) {
        value.bind(function (new_value) {
            $('#block_advantages_3_img').attr('src', window.WPLANDING_DIR_iMAGES.url + new_value);
        })
    });
    api('block_advantages_3_title', function (value) {
        value.bind(function (new_value) {
            $('#block_advantages_3_title').text(new_value);
        })
    });
    api('block_advantages_3_desc', function (value) {
        value.bind(function (new_value) {
            $('#block_advantages_3_desc').text(new_value);
        })
    });
    // Блок "Преимущества" (.advantages) <<< //

    // >>> Блок "Статистика" (.stats) //
    // 1 Секция
    api('block_stats_1_img', function (value) {
        value.bind(function (new_value) {
            $('#block_stats_1_img').attr('src', window.WPLANDING_DIR_iMAGES.url + new_value);
        })
    });
    api('block_stats_1_count', function (value) {
        value.bind(function (new_value) {
            $('#block_stats_1_count').text(new_value);
        })
    });
    api('block_stats_1_desc', function (value) {
        value.bind(function (new_value) {
            $('#block_stats_1_desc').text(new_value);
        })
    });
    // 2 Секция
    api('block_stats_2_img', function (value) {
        value.bind(function (new_value) {
            $('#block_stats_2_img').attr('src', window.WPLANDING_DIR_iMAGES.url + new_value);
        })
    });
    api('block_stats_2_count', function (value) {
        value.bind(function (new_value) {
            $('#block_stats_2_count').text(new_value);
        })
    });
    api('block_stats_2_desc', function (value) {
        value.bind(function (new_value) {
            $('#block_stats_2_desc').text(new_value);
        })
    });
    // 3 Секция
    api('block_stats_3_img', function (value) {
        value.bind(function (new_value) {
            $('#block_stats_3_img').attr('src', window.WPLANDING_DIR_iMAGES.url + new_value);
        })
    });
    api('block_stats_3_count', function (value) {
        value.bind(function (new_value) {
            $('#block_stats_3_count').text(new_value);
        })
    });
    api('block_stats_3_desc', function (value) {
        value.bind(function (new_value) {
            $('#block_stats_3_desc').text(new_value);
        })
    });
    // 4 Секция
    api('block_stats_4_img', function (value) {
        value.bind(function (new_value) {
            $('#block_stats_4_img').attr('src', window.WPLANDING_DIR_iMAGES.url + new_value);
        })
    });
    api('block_stats_4_count', function (value) {
        value.bind(function (new_value) {
            $('#block_stats_4_count').text(new_value);
        })
    });
    api('block_stats_4_desc', function (value) {
        value.bind(function (new_value) {
            $('#block_stats_4_desc').text(new_value);
        })
    });
    // Блок "Статистика" (.stats) <<< //

    // >>> Блок "Открытые предложения" (.packages) //
    api('block_packages_settings_title', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_settings_title').text(new_value);
        })
    });
    api('block_packages_settings_a_txt', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_settings_a').text(new_value);
        })
    });
    api('block_packages_settings_a_url', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_settings_a').attr('href', new_value);
        })
    });
    // Services #1
    api('block_packages_1_title', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_1_title').text(new_value);
        })
    });
    api('block_packages_1_price_start', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_1_price_start').text(new_value);
        })
    });
    api('block_packages_1_price_middle', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_1_price_middle').text(new_value);
        })
    });
    api('block_packages_1_price_end', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_1_price_end').text(new_value);
        })
    });
    api('block_packages_1_header_service_1', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_1_header_service_1').text(new_value);
        })
    });
    api('block_packages_1_header_service_2', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_1_header_service_2').text(new_value);
        })
    });
    api('block_packages_1_header_service_3', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_1_header_service_3').text(new_value);
        })
    });
    api('block_packages_1_header_service_4', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_1_header_service_4').text(new_value);
        })
    });
    api('block_packages_1_header_service_5', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_1_header_service_5').text(new_value);
        })
    });
    api('block_packages_1_header_service_6', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_1_header_service_6').text(new_value);
        })
    });
    // Services #2
    api('block_packages_2_title', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_2_title').text(new_value);
        })
    });
    api('block_packages_2_price_start', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_2_price_start').text(new_value);
        })
    });
    api('block_packages_2_price_middle', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_2_price_middle').text(new_value);
        })
    });
    api('block_packages_2_price_end', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_2_price_end').text(new_value);
        })
    });
    api('block_packages_2_header_service_1', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_2_header_service_1').text(new_value);
        })
    });
    api('block_packages_2_header_service_2', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_2_header_service_2').text(new_value);
        })
    });
    api('block_packages_2_header_service_3', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_2_header_service_3').text(new_value);
        })
    });
    api('block_packages_2_header_service_4', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_2_header_service_4').text(new_value);
        })
    });
    api('block_packages_2_header_service_5', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_2_header_service_5').text(new_value);
        })
    });
    api('block_packages_2_header_service_6', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_2_header_service_6').text(new_value);
        })
    });
    // Services #3
    api('block_packages_3_title', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_3_title').text(new_value);
        })
    });
    api('block_packages_3_price_start', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_3_price_start').text(new_value);
        })
    });
    api('block_packages_3_price_middle', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_3_price_middle').text(new_value);
        })
    });
    api('block_packages_3_price_end', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_3_price_end').text(new_value);
        })
    });
    api('block_packages_3_header_service_1', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_3_header_service_1').text(new_value);
        })
    });
    api('block_packages_3_header_service_2', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_3_header_service_2').text(new_value);
        })
    });
    api('block_packages_3_header_service_3', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_3_header_service_3').text(new_value);
        })
    });
    api('block_packages_3_header_service_4', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_3_header_service_4').text(new_value);
        })
    });
    api('block_packages_3_header_service_5', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_3_header_service_5').text(new_value);
        })
    });
    api('block_packages_3_header_service_6', function (value) {
        value.bind(function (new_value) {
            $('#block_packages_3_header_service_6').text(new_value);
        })
    });
    // Блок "Открытые предложения" (.packages) <<< //

    // >>> ПОДВАЛ //
    // facebook
    api('footer_facebook_link', function (value) {
        value.bind(function (new_value) {
            $('#footer_fb_link').attr('href', new_value);
        })
    });
    api('footer_facebook_icon', function (value) {
        value.bind(function (new_value) {
            $('#footer_fb_icon').removeClass().addClass(new_value);
        })
    });
    // Twitter
    api('footer_twitter_link', function (value) {
        value.bind(function (new_value) {
            $('#footer_twitter_link').attr('href', new_value);
        })
    });
    api('footer_twitter_icon', function (value) {
        value.bind(function (new_value) {
            $('#footer_twitter_icon').removeClass().addClass(new_value);
        })
    });
    // Skype
    api('footer_skype_link', function (value) {
        value.bind(function (new_value) {
            $('#footer_skype_link').attr('href', new_value);
        })
    });
    api('footer_skype_icon', function (value) {
        value.bind(function (new_value) {
            $('#footer_skype_icon').removeClass().addClass(new_value);
        })
    });
    // Youtube
    api('footer_youtube_link', function (value) {
        value.bind(function (new_value) {
            $('#footer_youtube_link').attr('href', new_value);
        })
    });
    api('footer_youtube_icon', function (value) {
        value.bind(function (new_value) {
            $('#footer_youtube_icon').removeClass().addClass(new_value);
        })
    });
    // Instagram
    api('footer_instagram_link', function (value) {
        value.bind(function (new_value) {
            $('#footer_instagram_link').attr('href', new_value);
        })
    });
    api('footer_instagram_icon', function (value) {
        value.bind(function (new_value) {
            $('#footer_instagram_icon').removeClass().addClass(new_value);
        })
    });
    // Vimeo
    api('footer_vimeo_link', function (value) {
        value.bind(function (new_value) {
            $('#footer_vimeo_link').attr('href', new_value);
        })
    });
    api('footer_vimeo_icon', function (value) {
        value.bind(function (new_value) {
            $('#footer_vimeo_icon').removeClass().addClass(new_value);
        })
    });
    // ПОДВАЛ <<< //
})(jQuery);