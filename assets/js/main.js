$('.menu-link').click(function (e) {
    e.preventDefault();
    $(this).toggleClass('close');
    $('#sidebar_nav').toggleClass('hamburger_open');
});

$(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 250) {
            $('#header').addClass('active animated bounceInDown');
        } else if ($(this).scrollTop() > 0) {
            $('#header').removeClass('active animated bounceInDown');
        }
    });
});