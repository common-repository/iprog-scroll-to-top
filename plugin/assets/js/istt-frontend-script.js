var istt = jQuery.noConflict();

istt(document).ready(function (istt) {

    istt(window).scroll(function () {
        if (istt(this).scrollTop() > 100) {
            istt('.istt-button').fadeIn("slow");
        } else {
            istt('.istt-button').fadeOut("slow");
        }   
    });

    istt('.istt-button,.istt-arrow-up').click(function () {
        istt("html, body").animate({
            scrollTop: 0
        }, 1000);
        return false;
    });

});