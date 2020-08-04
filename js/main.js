$(function () {
    new WOW().init();


    /*start niceScroll*/
    $("body").niceScroll({
        cursorcolor: "#08526D",
        cursorwidth: "15px",
        cursorminheight: 100,
        cursorborder: "1px solid #08526D"

    });

    /*go to any section when click in header nav*/
    $('.navbar ul li a[data-go]').click(function () {
        $('html').animate({
            scrollTop:$($(this).data('go')).offset().top
        },1000);
    });

//   set slider height
    $('.slider ,.carousel-item').height(($(window).height()-$('.upper-bar').innerHeight()-$('.navbar').innerHeight()));


    //feature work shuffle
    $(window).resize(function () {
        var dataClass=$('.featured-work ul li.active').data('class');
        if (dataClass=='.all'){
            $('.featured-work .img_featured-word div img').css({opacity:1}).parent().css('display','block');
        }else{
            $('.featured-work .img_featured-word div img').css({opacity:0.08}).parent().css('display','block');
            $(dataClass).css({opacity:1}).parent().css('display','block');
        }

        if (window.outerWidth<588){
            $('.featured-work .img_featured-word div img').not(dataClass).parent().css('display','none');
        }
    });

    $('.featured-work ul li').on('click',function () {
        $(this).addClass('active');
        $(this).siblings().removeClass('active');
        var dataClass=$(this).data('class');
        if (dataClass=='.all'){
            $('.featured-work .img_featured-word div img').css({opacity:1}).parent().css('display','block');
        }else{
            $('.featured-work .img_featured-word div img').css({opacity:0.08}).parent().css('display','block');
            $(dataClass).css({opacity:1}).parent().css('display','block');
        }

        if (window.outerWidth<588){
            $('.featured-work .img_featured-word div img').not(dataClass).parent().css('display','none');
        }
    });

    //enimation in #main
    $('#main_slider a span').css('display','none');
    $('#main_slider h1').css({display:'none'}).slideDown(1000);
    $('#main_slider').hover(function () {
        $('#main_slider a span').slideDown(1000);
    },function () {
        $('#main_slider a span').slideUp(1000);
    });

    //enimation in #testimonials
    $('#testimonials a span').css('display','none');
    $('#testimonials a span').css('padding','24px');

    $('#testimonials').hover(function () {
        $('#testimonials a span').slideDown(1000);
    },function () {
        $('#testimonials a span').slideUp(1000);
    });

    $('.pricing-table .row div').hover(function () {
        $(this).animate({'top':'-30px'});
    },function () {
        $(this).animate({'top':'0px'});
    });

    /*start go to top*/
    $('.gototop').click(function () {
        $('html').animate({
            scrollTop:0
        },1000);
        new WOW().init();
        $(this).slideUp();
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() > ($('.upper-bar').height() - - $('#main_slider').height())){
            $('.gototop').slideDown();
        }else {
            $('.gototop').slideUp();
        }
    }) ;

});