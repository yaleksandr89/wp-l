$(function () {
    "use strict";
    $(".slider").slick({speed: 900}), $(".sliderBot").slick({speed: 900});
    var nav = $(".navMenu__block");
    $(".navMenu__hide").click(function () {
        $(nav).slideToggle(400), $(".navMenu__block").css("display", "block")
    }), $(window).resize(function () {
        $(window).width() > 490 && $(".navMenu__block").is(":hidden") && $(".navMenu__block").css("display", "flex")
    });
    var search = $(".navMenu__formInput");
    $(".fa-search").click(function () {
        $(search).slideToggle(400)
    });

    $('.footer__socialItem').hover(
        function () {
            $(this).addClass('footer__socialItem--green')
        }, function () {
            $(this).removeClass('footer__socialItem--green')
        }
    );

    $('.popup-with-form').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: '#name',

        // When elemened is focused, some mobile browsers in some cases zoom in
        // It looks not nice, so we disable it:
        callbacks: {
            beforeOpen: function() {
                if($(window).width() < 700) {
                    this.st.focus = false;
                } else {
                    this.st.focus = '#name';
                }
            }
        }
    });
});
