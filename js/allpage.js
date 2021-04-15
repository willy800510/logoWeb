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

    $(".hrtCk").click(function(){
        var _this = $(this);
        var current = _this.attr("src");
        var swap = _this.attr("data-swap");     
       _this.attr('src', swap).attr("data-swap",current);
       $('.sideMenuBtnCall').toggleClass('show');
       $('.calling').toggleClass('call');
    });
    $('.sideMenuBtn').click(function () {
        $('.menuBurger').toggleClass('MenuBtnOpen');
        $('.sideMenuBtnCall').toggleClass('ckx');
        $('.call').toggleClass('show');
    })

    // 嘗試只要有
    // if($('.bkmk_1 img').is("[src^='images/icon/MDIcon/favorite_orange_36dp.svg']")){
    //     $('.sideMenuBtnCall').addClass('show');
    // }



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

    $("body").keydown(function(e) {
        if(e.keyCode == 37) { 
            var $logo = $("#scoll_overlay");
                if($logo.hasClass("caroItem_2")){
                    $logo.removeClass("caroItem_2");
                    $logo.addClass("caroItem_1");
                }else if($logo.hasClass("caroItem_1")){
                    $logo.removeClass("caroItem_1");
                    $logo.addClass("caroItem_3");
                }else{ 
                    $logo.addClass("caroItem_2");
                }
        }
        else if(e.keyCode == 39) {
            var $logo = $("#scoll_overlay");
            if($logo.hasClass("caroItem_2")){
                $logo.removeClass("caroItem_2");
                $logo.addClass("caroItem_3");
            }else if($logo.hasClass("caroItem_1")){
                $logo.removeClass("caroItem_1");
                $logo.addClass("caroItem_2");
            }else{
                $logo.addClass("caroItem_1");
            }
        }
    });

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