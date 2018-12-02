
jQuery(".fa-bars").on('click',function($){
    jQuery(".header__menu").slideToggle();
})


jQuery(window).on('scroll', function () {
    if (jQuery(this).scrollTop() > 200) {
        jQuery('.btn_up').fadeIn();
    } else {
        jQuery('.btn_up').fadeOut();
    }
})
jQuery('.btn_up').on('click', function (e) {
    e.preventDefault();
    jQuery('html , body').animate({
        scrollTop: 0
    } , 800);
})

jQuery(window).on('scroll', function(){
    var ratio = jQuery(document).scrollTop()/((jQuery(document).height()-jQuery(window).height())/100);
    jQuery('.progressbar').width(ratio+'%');
})