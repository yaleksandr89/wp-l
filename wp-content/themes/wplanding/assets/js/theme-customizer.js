(function ($) {
    var api = wp.customize;
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