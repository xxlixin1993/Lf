/**
 * Created by lixin on 17-8-8.
 */
jQuery(function ($) {

    $.supersized({

        // Functionality
        slide_interval: 4000,    // Length between transitions
        transition: 1,    // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
        transition_speed: 1000,    // Speed of transition
        performance: 1,    // 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)

        // Size & Position
        min_width: 0,    // Min width allowed (in pixels)
        min_height: 0,    // Min height allowed (in pixels)
        vertical_center: 1,    // Vertically center background
        horizontal_center: 1,    // Horizontally center background
        fit_always: 0,    // Image will never exceed browser width or height (Ignores min. dimensions)
        fit_portrait: 1,    // Portrait images will not exceed browser height
        fit_landscape: 0,    // Landscape images will not exceed browser width

        // Components
        slide_links: 'blank',    // Individual links for each slide (Options: false, 'num', 'name', 'blank')
        slides: [    // Slideshow Images
            {image: '/app/static/img/backgrounds/1.jpg'},
            {image: '/app/static/img/backgrounds/2.jpg'},
            {image: '/app/static/img/backgrounds/3.jpg'}
        ]

    });


    $('.page-container form .username, .page-container form .password').keyup(function () {
        $(this).parent().find('.error').fadeOut('fast');
    });

    $('#login').click(function () {
        var username =$("input[name='username']").val();
        var password = $("input[name='password']").val();
        var error = $(".error");
        if (username == '') {
            error.css('display', 'block');
            return false;
        }
        if (password == '') {
            error.css('top', '92px');
            error.css('display', 'block');
            return false;
        }

        console.log(username + '    ' + password);
        $.ajax({
            type: 'POST',
            url: '/signIn',
            data: {"username": $("input[name='username']").val(), "password":$("input[name='password']").val()},
            success:  function (data) {
                if (data.code == 200) {
                    location.href = '/';
                } else {
                    $(".errorInfo").html(data.message);
                }
            },
            dataType: 'json'
        });
    });


});

