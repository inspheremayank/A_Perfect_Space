

/***********************************/
/* Sidebar Slide in on top */
/**********************************/
$('.navigation__main').children().clone().appendTo('.responsive-standalone');
$('.open-menu').on('click', function (event) {
    event.preventDefault();
    $('body').addClass('noscroll');
    $('.responsive-standalone').addClass('navigation-active');
    $(".responsive-standalone-overlay").animate({
        "opacity": "toggle"
    }, {
        duration: 500
    }, function () {
        $(".responsive-standalone-overlay").fadeIn();
    });
    return false;
});
$('.responsive-standalone-close').on('click', function (event) {
    event.preventDefault();
    $('body').removeClass('noscroll');
    $('.responsive-standalone').removeClass('navigation-active');
    $(".responsive-standalone-overlay").hide();
    return false;
});
$(".responsive-standalone-overlay").on('click', function () {
    $('.responsive-standalone').removeClass('navigation-active');
    $(".responsive-standalone-overlay").hide();
    $('body').removeClass('noscroll');
});

/***********************************/
/* card favourite toggle class */
/**********************************/

$(".card__view-content .favorite").on('click', function() {
    $(this).parents('.card__view-content').toggleClass('active');
});