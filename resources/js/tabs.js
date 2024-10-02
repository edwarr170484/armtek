$(".tab-nav").click(function () {
    $(this).parents(".tab-navs").find(".tab-nav").removeClass("active");
    $(this).addClass("active");

    $(this).parents(".tab-navs").next(".tabs").find(".tab").removeClass("active");

    let tab = $(this).data('tab');

    $("#" + tab).addClass("active");
});