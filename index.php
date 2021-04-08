<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb Home</title>
    <?php include("template/bootstrapScript.php"); ?>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="css/carousel.css">
    <?php include("template/materialDesign.php"); ?>
</head>
<body>
<?php include("template/header.php"); ?>
<!-- 商品預覽 -->
<?php include("template/logoDisplayT.php"); ?>
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
                <a href="search.php" value="搜尋" class="m-1 rounded-right srch btn"><img src="images/icon/MDIcon/search_white_24dp.svg" alt="" class="mx-2"></a>
                <!-- <a href="search.php" type="submit" value="搜尋" class="m-1 rounded-right srch btn"><img src="images/icon/MDIcon/search_white_24dp.svg" alt="" class="mx-2"></a> -->
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
                    <span class="text-center p-2 m-1" style="background-image: url(images/class1.jpg);"><a href="search.php" class="text-white categLink">食</a></span>
                    <div class="mask d-none position-absolute d-md-flex justify-content-center align-items-center">
                        <a href="search.php">探索更多</a>
                    </div>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center position-relative overflow-hidden pdClass">
                    <span class="text-center p-2 m-1" style="background-image: url(images/class2.jpeg);"><a href="search.php" class="text-white categLink">衣</a></span> 
                    <div class="mask d-none position-absolute d-md-flex justify-content-center align-items-center">
                        <a href="search.php">探索更多</a>
                    </div>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center position-relative overflow-hidden pdClass">
                    <span class="text-center p-2 m-1" style="background-image: url(images/class3.jpg);"><a href="search.php" class="text-white categLink">住</a></span> 
                    <div class="mask d-none position-absolute d-md-flex justify-content-center align-items-center">
                        <a href="search.php">探索更多</a>
                    </div>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center position-relative overflow-hidden pdClass">
                    <span class="text-center p-2 m-1" style="background-image: url(images/class4.jpeg);"><a href="search.php" class="text-white categLink">行</a></span> 
                    <div class="mask d-none position-absolute d-md-flex justify-content-center align-items-center">
                        <a href="search.php">探索更多</a>
                    </div>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center position-relative overflow-hidden pdClass">
                    <span class="text-center p-2 m-1" style="background-image: url(images/class5.jpeg);"><a href="search.php" class="text-white categLink">育</a></span> 
                    <div class="mask d-none position-absolute d-md-flex justify-content-center align-items-center">
                        <a href="search.php">探索更多</a>
                    </div>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center position-relative overflow-hidden pdClass">
                    <span class="text-center p-2 m-1" style="background-image: url(images/class6.jpeg);"><a href="search.php" class="text-white categLink">樂</a></span> 
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
                    <div class="d-block p-4 lgdp-bg rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 lgdp-bg rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 lgdp-bg rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 lgdp-bg rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 lgdp-bg rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 lgdp-bg rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp d-none d-md-block">
                    <div class="d-block p-4 lgdp-bg rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp d-none d-md-block">
                    <div class="d-block p-4 lgdp-bg rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp d-none d-md-block">
                    <div class="d-block p-4 lgdp-bg rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp d-none d-lg-block">
                    <div class="d-block p-4 lgdp-bg rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp d-none d-lg-block">
                    <div class="d-block p-4 lgdp-bg rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp d-none d-lg-block">
                    <div class="d-block p-4 lgdp-bg rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
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
                    <div class="d-block p-4 lgdp-bg rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 lgdp-bg rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 lgdp-bg rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 lgdp-bg rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 lgdp-bg rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 lgdp-bg rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp d-none d-md-block">
                    <div class="d-block p-4 lgdp-bg rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp d-none d-md-block">
                    <div class="d-block p-4 lgdp-bg rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp d-none d-md-block">
                    <div class="d-block p-4 lgdp-bg rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp d-none d-lg-block">
                    <div class="d-block p-4 lgdp-bg rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp d-none d-lg-block">
                    <div class="d-block p-4 lgdp-bg rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp d-none d-lg-block">
                    <div class="d-block p-4 lgdp-bg rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
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

<?php include("template/footer.php"); ?>
<script src="js/allpage.js"></script>