$(window).scroll(function () {
    fixHeader();
});

$(document).ready(function () {
    fixHeader();

    $(".scroll-up").click(function () {
        var body = $("html, body");
        body.stop().animate({ scrollTop: 0 }, 500, 'swing');
    });
});

function fixHeader() {
    let sticky = $('header');
    let scroll = $(window).scrollTop();

    if (scroll >= 100) {
        sticky.addClass('fixed');
        $(".scroll-up").addClass("active");
    } else {
        sticky.removeClass('fixed');
        $(".scroll-up").removeClass("active");
    }
}