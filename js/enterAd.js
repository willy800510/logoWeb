$(document).ready(function(){
    AOS.init();
    let scrollRef = 0;
    window.addEventListener('scroll', function() {
    // increase value up to 10, then refresh AOS
    scrollRef <= 10 ? scrollRef++ : AOS.refresh();
    });

    $("#logoPlay").owlCarousel({
        autoplay: true,
        autoplaySpeed: 1000,
        autoplayTimeout: 2500,
        loop: true,
        // dots: false,
        nav: false,
        items: 1,
    });
    $(".logoPlay-sm").owlCarousel({
        autoplay: true,
        autoplaySpeed: 1000,
        autoplayTimeout: 2500,
        loop: true,
        dots: false,
        nav: false,
        items: 1,
    });
    $(".carousel").carousel({
        keyboard: true
    });

    // scrollSpy
    $('body').scrollspy({ 
        target: '#enterAd-md',
        offset: 105
    });
    
    //  <md nav a click scroll to
    $('#nav_welcome').click(function(){
        event.preventDefault(); //有沒有寫這個的意義？
        $('html,body').animate({scrollTop: $('#welcome-md').offset().top-105},800);
    });
    $('#nav_shopFlow').click(function(){
        event.preventDefault(); //有沒有寫這個的意義？
        $('html,body').animate({scrollTop: $('#shopFlow-md').offset().top-105},800);
    });
    $('#nav_moreProduct').click(function(){
        event.preventDefault(); //有沒有寫這個的意義？
        $('html,body').animate({scrollTop: $('#moreProduct-md').offset().top-65},800);
    });
    $('#nav_enterIndex').click(function(){
        event.preventDefault(); //有沒有寫這個的意義？
        $('html,body').animate({scrollTop: $('#enterIndex-md').offset().top-65},500);
    });

    // get started show
    $(document).scroll(function () {
        var y = $(this).scrollTop();
        if (y > 900) {
            $('#nav_enterIndex').fadeIn();
        } else {
            $('#nav_enterIndex').fadeOut();
        }
    });
    // >md 導覽列的粉紅圓點
    var noX;
    var easeName = 'easeOutExpo';
    var easeNameInit = 'easeOutElastic';
    var dot = $('#trackDot');

    // 設定粉紅圓點位置的function
    function moveDot (no, easeNameInit) {
        var curr = $('.carousel-indicators li').eq(no);  //設定curr(當前項目)是.carousel-indicators li的第幾個
        
        noX = curr.offset().left + curr.width() / 2 - dot.width();  //元素最左邊坐標+整個元素的一半寬-圓點寬度
        dot.stop().animate({left:noX},300,easeNameInit);
    }
    // 一進頁面先執行一次 設定粉紅圓點位置
    moveDot(0, easeNameInit);

    // 當輪播內容切換時
    $('.carousel').on('slide.bs.carousel', function  (ev) {
        // ev.to 是要切換到的那個區塊的編號，也就是即將被加上.active的那個編號
        // 這個編號剛好和第幾個(eq())所需要的值相同，所以直接拿來使用
        moveDot(ev.to, easeNameInit);
    })

    $('.carousel-indicators li').hover(
        function(){
            noXhover = $(this).offset().left + $(this).width() / 2 - dot.width();
            dot.stop().animate({left:noXhover},500,easeName);
        },
        function(){
            dot.stop().animate({left:noX},500,easeNameInit);
        }
    );
    $('#moreProduct-md .col-4 a').hover(
        function(){
            $('#moreProduct-md .col-4 a').not(this).addClass('zoomOut');
            $(this).addClass('zoomIn');
        },
        function(){
            $('#moreProduct-md .col-4 a').removeClass('zoomIn').removeClass('zoomOut');
        }
    );

    // $(window).scroll(function() {
    //     if($(window).scrollTop() + $(window).height() == $(document).height()) {
    //         window.setTimeout(function() {
    //             window.location.href = 'index.php';
    //         }, 4000);
    //     }
    // });
});