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
            beforeOpen: function () {
                if ($(window).width() < 700) {
                    this.st.focus = false;
                } else {
                    this.st.focus = '#name';
                }
            }
        }
    });

    $('#form-request').on('submit', function (event) {
        event.preventDefault();

        var $form = $(this);
        var $name = $form.find('#name').val();
        var $phone = $form.find('#phone').val();

        $.ajax({
            method: 'POST',
            url: window._GLOBAL.ajaxurl,
            data: {
                action: 'request_form',
                name: $name,
                phone: $phone
            },
            dataType: 'json',
            success: function (response) {
                if (response.result) {
                    $form.html('Request has be send!');
                } else {
                    $form.find('.form-error').html(response.error);
                }
            },
            error: function (error) {
                $form.find('.form-error').html(error);
            }
        });
    });

});
