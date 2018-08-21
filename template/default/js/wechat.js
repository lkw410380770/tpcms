$(function(){
    var slideNavBox = $('.right-list>ul');
    var slideNavBtn = slideNavBox.find('li');
    var slideItemWrap = $('.server-slide>ul');
    var slideBtnHeight = slideNavBtn.first().outerHeight(true);
    var slideItemWidth = slideItemWrap.outerWidth(true);
    var btnPrev = $('.nav-btn-prev');
    var btnNext = $('.nav-btn-next');
    var num = 0;
    slideItemWrap.css({width:slideNavBtn.length*slideItemWidth})
    slideNavBtn.click(function(){
        var index = $(this).index();
        num = index;
        slideNavBox.animate({
            top:-slideBtnHeight*index+'px'
        });
        slideItemWrap.animate({
            left:-slideItemWidth*index
        })
    });

    btnPrev.click(function(){
        if(num == 0){
            return false;
        }
        num--;
        slideNavBox.animate({
            top:-slideBtnHeight*num+'px'
        })
    });
    btnNext.click(function(){
        if(num >= 3){
            return false;
        }
        num++;
        slideNavBox.animate({
            top:-slideBtnHeight*num+'px'
        })
    })
});