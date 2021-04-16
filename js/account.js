$(document).ready(function(){
    // USERINFO
    // $('.addBtn').click(function(){
    //     $(this).toggleClass('minus')
    //     $(this).toggleClass('mt-auto')
    //     if($(this).siblings('.col-6').children('.form-control').hasClass('mail')){
    //         $('.mail').toggleClass('d-none','d-block')
    //     }else{
    //         $('.phone').toggleClass('d-none','d-block')
    //     }
    // });
    $(".addBtn").click(function(){
        var _this = $(this);
        var current = _this.attr("src");
        var swap = _this.attr("data-swap");     
        _this.attr('src', swap).attr("data-swap",current);
        _this.toggleClass('mt-auto')
        if(_this.siblings('.col-6').children('.form-control').hasClass('mail')){
            $('.mail').toggleClass('d-none','d-block')
        }else{
            $('.phone').toggleClass('d-none','d-block')
        }
    });

    // PASSWORD, LOGIN
    $(".eye").mousedown(function(){
        $(this).attr("src", "images/icon/eye/open.svg");
        $(this).parent().prev().attr("type", "text");
    });    
    $(".eye").mouseup(function(){
        $(this).attr("src", "images/icon/eye/closed.svg");
        $(this).parent().prev().attr("type", "password");
    });
    // LOGIN, RESGIST
    $(".fa-facebook-f").hover(
        function(){
            $(".fbIcon").addClass("fbColor");
        },
        function(){
            $(".fbIcon").removeClass('fbColor');
        }
    );
    var refreshButton = document.querySelector(".refresh-captcha");
        refreshButton.onclick = function() {
        document.querySelector(".captcha-image").src = 'captcha.php?' + Date.now();
    }
})