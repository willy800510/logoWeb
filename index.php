<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb Home</title>
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
</head>
<body>
<?php
    include("template/header.php");
?>
<!-- 商品預覽 -->
    <div id="logoDisplay" class="container-fluid modal fade">
        <div class="modal-dialog">
            <div class="container-sm position-relative" style="pointer-events: auto;">
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
    </div>
<!-- BANNER -->
    <div class="container-fluid banner mb-3">
        <div class="container-sm clearfix baninform">
            <div class="d-flex justify-content-center overflow-hidden ">
                <span>
                    <h2>超過1000多種Logo挑選<br>為您的公司打造專屬Logo</h2>
                </span>
            </div>
            <div class="d-flex justify-content-center overflow-hidden m-2">
                <input type="search" id="site-search" name="q" aria-label="Search through site content" size="30" class="m-1 srchtext">
                <!-- <button type="submit" value="搜尋" class="m-1 rounded-right srch"></button> -->
                <a href="search.php" type="submit" value="搜尋" class="m-1 rounded-right srch btn"><i class="fas fa-search fa-1x text-white mx-2"></i></a>
            </div>
            <div class="d-flex justify-content-center">
                <a href="search.php" class="btn btn-light mx-2">星座</a>
                <a href="search.php" class="btn btn-light mx-2">搖飲</a>
                <a href="search.php" class="btn btn-light mx-2">文青風</a>
                <a href="search.php" class="btn btn-light mx-2">運動</a>
                <a href="search.php" class="btn btn-light mx-2">海</a>
                <a href="search.php" class="btn btn-light mx-2">寵物</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container-sm clearfix">
    <!-- 商品類別 -->
            <div class="d-flex justify-content-between overflow-hidden">
                <a href="#" class="p-1">商品類別</a>
                <a href="search.php" class="p-1">MORE→</a>
            </div>
            <div class="row rounded py-3">
                <div class="col-6 col-md-4 d-flex justify-content-center position-relative overflow-hidden pdClass">
                    <span class="text-center p-2 m-1" style="background-image: url(images/class1.jpg);"><a href="search.php" class="text-white categLink" style="padding: 25px 80px;">食</a></span>
                    <div class="mask d-none position-absolute d-md-flex justify-content-center align-items-center">
                        <a href="search.php">探索更多</a>
                    </div>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center position-relative overflow-hidden pdClass">
                    <span class="text-center p-2 m-1" style="background-image: url(images/class2.jpeg);"><a href="search.php" class="text-white categLink" style="padding: 25px 80px;">衣</a></span> 
                    <div class="mask d-none position-absolute d-md-flex justify-content-center align-items-center">
                        <a href="search.php">探索更多</a>
                    </div>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center position-relative overflow-hidden pdClass">
                    <span class="text-center p-2 m-1" style="background-image: url(images/class3.jpg);"><a href="search.php" class="text-white categLink" style="padding: 25px 80px;">住</a></span> 
                    <div class="mask d-none position-absolute d-md-flex justify-content-center align-items-center">
                        <a href="search.php">探索更多</a>
                    </div>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center position-relative overflow-hidden pdClass">
                    <span class="text-center p-2 m-1" style="background-image: url(images/class4.jpeg);"><a href="search.php" class="text-white categLink" style="padding: 25px 80px;">行</a></span> 
                    <div class="mask d-none position-absolute d-md-flex justify-content-center align-items-center">
                        <a href="search.php">探索更多</a>
                    </div>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center position-relative overflow-hidden pdClass">
                    <span class="text-center p-2 m-1" style="background-image: url(images/class5.jpeg);"><a href="search.php" class="text-white categLink" style="padding: 25px 80px;">育</a></span> 
                    <div class="mask d-none position-absolute d-md-flex justify-content-center align-items-center">
                        <a href="search.php">探索更多</a>
                    </div>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center position-relative overflow-hidden pdClass">
                    <span class="text-center p-2 m-1" style="background-image: url(images/class6.jpeg);"><a href="search.php" class="text-white categLink" style="padding: 25px 80px;">樂</a></span> 
                    <div class="mask d-none position-absolute d-md-flex justify-content-center align-items-center">
                        <a href="search.php">探索更多</a>
                    </div>
                </div>
            </div>
    <!-- 最新商品 -->
            <div class="d-flex justify-content-between overflow-hidden">
                <a href="#" class="p-1">最新商品</a>
                <a href="#" class="p-1">MORE→</a>
            </div>
            <div class="row py-3">
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
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp d-none d-md-block">
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
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp d-none d-md-block">
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
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp d-none d-md-block">
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
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp d-none d-lg-block">
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
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp d-none d-lg-block">
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
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp d-none d-lg-block">
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
            </div>
    <!-- 全部商品 -->
            <div class="d-flex justify-content-between overflow-hidden">
                <a href="#" class="p-1">全部商品</a>
                <a href="#" class="p-1">MORE→</a>
            </div>
            <div class="row py-3">
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
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp d-none d-md-block">
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
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp d-none d-md-block">
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
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp d-none d-md-block">
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
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp d-none d-lg-block">
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
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp d-none d-lg-block">
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
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp d-none d-lg-block">
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
            </div>
        </div>
    </div>

<!-- toTop -->
<button class="toTop-arrow showw toTop" id="gotop"></button>
<?php
    include("template/footer.php");
?>
<script src="js/allpage.js"></script>