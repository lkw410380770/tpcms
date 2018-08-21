$(function(){
    var headEle = $('.header');
    var logoImg = headEle.find('img');
    var achievementTop = $('.achievement').offset().top;
    // var caseTop = $('.case').offset().top;
    var numcount = true;
    $(window).scroll(function () {
        var topNum = $(window).scrollTop();
        if(topNum > 0){
            // logoImg.attr('src','images/logo.png');
            headEle.addClass('header-active');
        }else if(topNum<=0){
            // logoImg.attr('src','images/footer-logo.png');
            headEle.removeClass('header-active');
        }

        // if(topNum>(caseTop-400)){
        //         $('#photostack-2').click();
        // }
        if(topNum > (achievementTop-400)){
            if(numcount){
                $('.timer').each(function(){
                    $(this).prop('Counter',0).animate({
                        Counter: $(this).attr('data-to')
                    },{
                        duration: 3500,
                        easing: 'swing',
                        step: function (now){
                            $(this).text(Math.ceil(now));
                        }
                    });
                });
                numcount = false;
            }
        }
    });
});