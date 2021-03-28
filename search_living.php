<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb Search</title>
    <?php
        include("template/bootstrapScript.php");
    ?>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="css/carousel.css">
    <style>
        .list-group-item {
            background-color: transparent;
            border: 0px;
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }
        .list-group-item-action:active {
            background-color: white;
        }
        @media(min-width:0px){
            .toTop{
                bottom: 360px;
                right: 5%;
                color: #D5A178;
            }
        }
        @media(min-width:768px){
            .toTop{
                bottom: 360px;
            }
        }
        @media(min-width:1200px){
            .toTop{
                bottom: 180px;
            }
        }

    </style>
</head>
<body>
<?php
    include("template/header.php");
?>
<!-- BANNER -->
<div class="container-fluid srcBanner">
    <div class="contianer-sm">
        <form action="" style="padding-top: 150px;" class="">
            <div class="d-flex justify-content-center align-items-center overflow-hidden m-2">
                <a href="#">
                    <i class="fas fa-search fa-2x text-white mr-2"></i>
                </a>
                <input type="search" id="site-search" name="q" aria-label="Search through site content" size="30" class="m-1 srchtext-2">
            </div>
            <div class="d-flex justify-content-center">
                <a href="#" class="btn btn-light mx-2">星座</a>
                <a href="#" class="btn btn-light mx-2">搖飲</a>
                <a href="#" class="btn btn-light mx-2">文青風</a>
                <a href="#" class="btn btn-light mx-2">運動</a>
                <a href="#" class="btn btn-light mx-2">海</a>
                <a href="#" class="btn btn-light mx-2">寵物</a>
            </div>
        </form>
    </div>
</div>
<!-- logo商品 -->
<div class="container-fluid">
        <div class="container-sm clearfix">
    <!-- 類別搜尋 -->
            <div class="d-block mt-1">
                <div class="list-group flex-row justify-content-around align-items-center overflow-hidden mx-1" id="myList" role="tablist">
                    <a href="search_food.php" class="text-center list-group-item list-group-item-action" data-toggle="list" role="tab">美食<br class="d-block d-md-none">餐廳</a>
                    <a href="search_clothes.php" class="text-center list-group-item list-group-item-action" data-toggle="list" role="tab">衣物<br class="d-block d-md-none">配件</a>
                    <a href="search_living.php" class="text-center list-group-item list-group-item-action active" data-toggle="list" role="tab">居家<br class="d-block d-md-none">生活</a>
                    <a href="search_transport.php" class="text-center list-group-item list-group-item-action" data-toggle="list" role="tab">行車<br class="d-block d-md-none">交通</a>
                    <a href="search_edu.php" class="text-center list-group-item list-group-item-action" data-toggle="list" role="tab">教育<br class="d-block d-md-none">相關</a>
                    <a href="search_entertain.php" class="text-center list-group-item list-group-item-action" data-toggle="list" role="tab">娛樂<br class="d-block d-md-none">收藏</a>
                    <!-- <i class="fas fa-sort-down fa-lg"></i> -->
                    <i class="fas fa-chevron-down fa-lg ml-2"></i>
                </div>
                <form action="" class="bg-white mx-1 pl-3 pl-sm-4 pl-lg-5 py-3 rounded formAct">
                    <div class="d-flex justify-content-start align-items-center">
                        <input type="checkbox" name="" class="form-check-label mr-1">
                        <label for="" class="m-1">椅子</label>
                        <input type="checkbox" name="" class="form-check-label mr-1 ml-3">
                        <label for="" class="m-1">椅子</label>
                        <input type="checkbox" name="" class="form-check-label mr-1 ml-3">
                        <label for="" class="m-1">椅子</label>
                        <input type="checkbox" name="" class="form-check-label mr-1 ml-3">
                        <label for="" class="m-1">椅子</label>
                    </div>
                    <div class="d-flex justify-content-start align-items-center">
                        <input type="checkbox" name="" class="form-check-label mr-1">
                        <label for="" class="m-1">NT$60-100</label>
                        <input type="checkbox" name="" class="form-check-label mr-1 ml-3">
                        <label for="" class="m-1">NT$101-150</label>
                        <input type="checkbox" name="" class="form-check-label mr-1 ml-3">
                        <label for="" class="m-1">NT$151-200</label>
                    </div>
                </form>
            </div>
    <!-- 商品搜尋結果 -->
            <div class="row pt-1 pb-3 justify-content-center">
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 bg-white rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-4 position-absolute">
                        <img src="images/icon/bookMark/bm-default.svg" width="25px" alt="" class="d-block ml-auto bomk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 bg-white rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-4 position-absolute">
                        <img src="images/icon/bookMark/bm-default.svg" width="25px" alt="" class="d-block ml-auto bomk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 bg-white rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-4 position-absolute">
                        <img src="images/icon/bookMark/bm-default.svg" width="25px" alt="" class="d-block ml-auto bomk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 bg-white rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-4 position-absolute">
                        <img src="images/icon/bookMark/bm-default.svg" width="25px" alt="" class="d-block ml-auto bomk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 bg-white rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-4 position-absolute">
                        <img src="images/icon/bookMark/bm-default.svg" width="25px" alt="" class="d-block ml-auto bomk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 bg-white rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-4 position-absolute">
                        <img src="images/icon/bookMark/bm-default.svg" width="25px" alt="" class="d-block ml-auto bomk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 bg-white rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-4 position-absolute">
                        <img src="images/icon/bookMark/bm-default.svg" width="25px" alt="" class="d-block ml-auto bomk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 bg-white rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-4 position-absolute">
                        <img src="images/icon/bookMark/bm-default.svg" width="25px" alt="" class="d-block ml-auto bomk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 bg-white rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-4 position-absolute">
                        <img src="images/icon/bookMark/bm-default.svg" width="25px" alt="" class="d-block ml-auto bomk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 bg-white rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-4 position-absolute">
                        <img src="images/icon/bookMark/bm-default.svg" width="25px" alt="" class="d-block ml-auto bomk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 bg-white rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-4 position-absolute">
                        <img src="images/icon/bookMark/bm-default.svg" width="25px" alt="" class="d-block ml-auto bomk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 bg-white rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-4 position-absolute">
                        <img src="images/icon/bookMark/bm-default.svg" width="25px" alt="" class="d-block ml-auto bomk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-primary mt-2 px-5">更多</button>
            </div>
        </div>
    </div>
    <i class="fas fa-angle-double-up fa-2x position-fixed toTop"></i>

<!-- 商品預覽 -->
<div id="logoDisplay" class="container-fluid modal fade">
        <div class="container-sm position-relative">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <img src="images/AdobeStock_250566348 [轉換].svg" style="height: 200px; z-index:1;" class="w-100 position-fixed" id="scoll_overlay" alt="...">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active" id="underBar1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1" id="underBar2"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2" id="underBar3"></li>
                </ol>
                <div class="carousel-inner mb-2 mb-xl-0" style="margin-top: 65px;">
                <div class="carousel-item bg-brown rounded active">
                    <div class="d-flex justify-content-center p-5" style="height: 500px;">
                    <img src="images/AdobeStock_250566348 [轉換].svg" class="w-100" alt="..." style="height: 200px; opacity:0.3;">
                    </div>
                    <div class="carousel-caption d-none d-md-block text-dark">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item bg-brown rounded">
                    <div class="d-flex justify-content-center p-5 w-100">
                    <img src="images/carousel/65911.png" class="d-block w-auto" alt="..." style="height: 400px;">
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item bg-brown rounded">
                    <div class="d-flex justify-content-center p-5 w-100">
                    <img src="images/carousel/business-cards.png" class="d-block w-auto" alt="..." style="height: 400px;">
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
<?php
    include("template/footer.php");
?>
<script>
    $(document).ready(function(){
        $(".bomk").click(function(){
            $(this).attr("src", "images/icon/bookMark/bm-click.svg");
        });
        // logo輪播
        $(".carousel-control-next").click(function(){
            var $this = $(this);
            var $logo = $("#scoll_overlay");
        //see where we are currently at
            if($logo.hasClass("caroItem_2")){
                $logo.removeClass("caroItem_2");
                $logo.addClass("caroItem_3");
            }else if($logo.hasClass("caroItem_1")){
        //we are on second click so add class
            $logo.removeClass("caroItem_1");
            $logo.addClass("caroItem_2");
            }else{
        //we are on initital click
            $logo.addClass("caroItem_1");
            }
        })
        $(".carousel-control-prev").click(function(){
            var $this = $(this);
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
</script>