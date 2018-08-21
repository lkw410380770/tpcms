$(function(){
    var headEle = $('.header');
    var logoImg = headEle.find('img');
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
    });
    var goBackBtn = $('.go-back');
    goBackBtn.click(function(){
        $('html ,body').animate({scrollTop: 0}, 300);
        return false;
    })
});