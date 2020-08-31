(function ($) {
    var api = wp.customize;
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
})(jQuery);