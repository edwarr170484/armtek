$(document).ready(function () {
    $("#close-cookies").click(function () {
        $(".cookies").fadeOut();
    });

    $("#menu-toggler").click(function () {
        if ($(this).hasClass('opened')) {
            $(this).removeClass('opened');
            $(".main-menu").removeClass('opened');
        } else {
            $(this).addClass('opened');
            $(".main-menu").addClass('opened');
        }
    });
});