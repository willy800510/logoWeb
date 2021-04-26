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

    // 點選 愛心收藏
    $(".hrtCk").click(function(){
        var _this = $(this);
        var current = _this.attr("src");
        var swap = _this.attr("data-swap");     
       _this.attr('src', swap).attr("data-swap",current);
       $('.sideMenuBtnCall').toggleClass('show');
    });
    
    // header sidebar function
    $('.userInfo').hover(
        function(){
            $('.userList').addClass('show');
        },
        function(){
            $('.userList').removeClass('show');
        }
    );
    $('.bagInfo').hover(
        function(){
            $('.bagList').addClass('show');
        },
        function(){
            $('.bagList').removeClass('show');
        }
    );

    $('.addcarts').click(function(){  // .addcarts from logoDisplayT line8
        $('.calling-2').addClass('call-2');
        $('.calling-3').addClass('call show');
    })
    $('.sideMenuBtn').click(function () { //header, header-logoCenter
        $('.menuBurger').toggleClass('MenuBtnOpen');
        $('.sideMenuBtnCall').toggleClass('ckx');
    })

    $('.sideMenuBtn-L').click(function () { //header-logoCenter
        $('.menuBurger-L').toggleClass('MenuBtnOpen');
    })

    $(document).click(function (event) {
        var clickover = $(event.target);
        // var _opened_M = $('#collapseMenu-sm').hasClass("show");
        // if (_opened_M === true && !clickover.hasClass("MenuBtnOpen")) {
        //     $(".menuBurger").click();
        // }
        var _opened = $('#helper_guide').hasClass("show");
        if (_opened === true && !clickover.hasClass("MenuBtnOpen")) {
            $(".menuBurger-L").click();
        }
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

    // 點選logo，預覽同一個logo
    $('.logoDpSm img').click(function(){
        var logoPick = $(this).attr('src');
        $('#carouselExampleCaptions > img').attr('src',logoPick);
        $('#carouselExampleCaptions > input').attr('value',logoPick);
        $('#logoDpSm img').attr('src',logoPick);
    })

    // bookmark 刪除
    $('.favoCancel').click(function(){
        $(this).parent().parent().parent('.favoLogo').remove();
    })
});