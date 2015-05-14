$(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1000) {
            $('.navPopup').fadeIn('fast');
        } else {
            $('.navPopup').fadeOut('fast');
        }
    });

    $('#backToTop').click(function (e) {
        e.preventDefault();
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
});
