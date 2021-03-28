$(document).ready(function(){
    // toTop
    $('#gotop').click(function(){
        $('html,body').animate({ scrollTop: 0 }, 'slow');
        return false;
    });
    $(window).scroll(function() {
        if ( $(this).scrollTop() > 400){
            $('#gotop').fadeIn();
        }else{
            $('#gotop').fadeOut();
        }
    });

    $(".bomk").click(function(){
        $(this).attr("src", "images/icon/bookMark/bm-click.svg");
    });
    // logo輪播
    $(".carousel-control-next").click(function(){
        var $logo = $("#scoll_overlay");

    //see where we are currently at
        if($logo.hasClass("caroItem_2")){
            $logo.removeClass("caroItem_2");
            $logo.addClass("caroItem_3");
            // $logo.switchClass("caroItem_2","caroItem_3")
        }else if($logo.hasClass("caroItem_1")){
            //we are on second click so add class
            $logo.removeClass("caroItem_1");
            $logo.addClass("caroItem_2");
            // $logo.switchClass("caroItem_1","caroItem_2")
        }else{
            //we are on initital click
            $logo.addClass("caroItem_1");
            // $logo.switchClass("caroItem_3","caroItem_1")
        }
    })
    $(".carousel-control-prev").click(function(){
        var $logo = $("#scoll_overlay");
    //see where we are currently at
        if($logo.hasClass("caroItem_2")){
            $logo.removeClass("caroItem_2");
            $logo.addClass("caroItem_1");
        }else if($logo.hasClass("caroItem_1")){
    //we are on second click so add class
            $logo.removeClass("caroItem_1");
            $logo.addClass("caroItem_3");
        }else{ 
    //we are on initital click
            $logo.addClass("caroItem_2");
        }
    })

    $("#underBar1").click(function(){
        var $logo = $("#scoll_overlay");
        if($logo.hasClass("caroItem_2")){
            $logo.removeClass("caroItem_2");
        }else{
            $logo.removeClass("caroItem_1");
            $logo.removeClass("caroItem_3");
        }
    })
    $("#underBar2").click(function(){
        var $logo = $("#scoll_overlay");
        if($logo.hasClass("caroItem_2")){
            $logo.removeClass("caroItem_2");
            $logo.addClass("caroItem_1");
        }else{
            $logo.removeClass("caroItem_3");
            $logo.addClass("caroItem_1");
        }
    })
    $("#underBar3").click(function(){
        var $logo = $("#scoll_overlay");
        if($logo.hasClass("caroItem_1")){
            $logo.removeClass("caroItem_1");
            $logo.addClass("caroItem_2");
        }else{
            $logo.removeClass("caroItem_3");
            $logo.addClass("caroItem_2");
        }
    })

    // hover輪播停止
    $('.carousel.slide').carousel({
        interval: false,
        pause: "hover"
    });

    // 滑鼠滑入停止輪播
    $('input').focus(function(){
        $(".carousel").carousel('pause');
    }).blur(function() {
        $(".carousel").carousel('cycle');
    });
});