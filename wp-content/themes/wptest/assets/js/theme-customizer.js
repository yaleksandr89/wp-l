(function ($) {
    var api = wp.customize;
    // header_h1
    api('header_h1', function (value) {
        value.bind(function (new_value) {
            $('.customize_home_page_h1').text(new_value);
        })
    });
    // header_txt_bottom
    api('header_txt_bottom', function (value) {
        value.bind(function (new_value) {
            $('.customize_header_txt_bottom').text(new_value);
        })
    });
})(jQuery);
