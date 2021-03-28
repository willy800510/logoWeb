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
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="js/uicons-regular-rounded/css/uicons-regular-rounded.css">

    <style>
        .list-group-item {
            background-color: transparent;
            border: 0px;
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }
        /* .list-group-item-action.active { */
        .list-group-item-action:active {
            background-color: white;
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
                <a href="#hitTag-1" class="btn btn-light mx-2" data-toggle="tab" data-target="#hitTag-1" aria-controls="hitTag-1">星座</a>
                <a href="#hitTag-2" class="btn btn-light mx-2" data-toggle="tab" data-target="#hitTag-2" aria-controls="hitTag-2">搖飲</a>
                <a href="#hitTag-3" class="btn btn-light mx-2" data-toggle="tab" data-target="#hitTag-3" aria-controls="hitTag-3">文青風</a>
                <a href="#hitTag-4" class="btn btn-light mx-2" data-toggle="tab" data-target="#hitTag-4" aria-controls="hitTag-4">運動</a>
                <a href="#hitTag-5" class="btn btn-light mx-2" data-toggle="tab" data-target="#hitTag-5" aria-controls="hitTag-5">海</a>
                <a href="#hitTag-6" class="btn btn-light mx-2" data-toggle="tab" data-target="#hitTag-6" aria-controls="hitTag-6">寵物</a>
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
                    <a href="#list-food" id="tabFood" class="text-center list-group-item list-group-item-action" data-toggle="tab" data-target="#list-food" aria-expanded="true" aria-controls="list-food">美食<br class="d-block d-md-none">餐廳</a>
                    <a href="#list-clothes" id="tabClothes" class="text-center list-group-item list-group-item-action" data-toggle="tab" data-target="#list-clothes" aria-expanded="false" aria-controls="list-clothes">衣物<br class="d-block d-md-none">配件</a>
                    <a href="#list-living" id="tabLiving" class="text-center list-group-item list-group-item-action" data-toggle="tab" data-target="#list-living" aria-expanded="false" aria-controls="list-living">居家<br class="d-block d-md-none">生活</a>
                    <a href="#list-transport" id="tabTransport" class="text-center list-group-item list-group-item-action" data-toggle="tab" data-target="#list-transport" aria-expanded="false" aria-controls="list-transport">行車<br class="d-block d-md-none">交通</a>
                    <a href="#list-edu" id="tabEdu" class="text-center list-group-item list-group-item-action" data-toggle="tab" data-target="#list-edu"aria-expanded="false" aria-controls="clist-edu">教育<br class="d-block d-md-none">相關</a>
                    <a href="#list-entertain" id="tabEntertain" class="text-center list-group-item list-group-item-action" data-toggle="tab" data-target="#list-entertain" aria-expanded="false" aria-controls="list-entertain">娛樂<br class="d-block d-md-none">收藏</a>
                    <!-- <i class="fas fa-sort-down fa-lg"></i> -->
                    <button data-toggle="collapse" aria-expanded="false" data-target="#formSearch" aria-controls="formSearch">
                        <i class="fas fa-chevron-down fa-lg ml-2 icon-open"></i>
                        <!-- <i class="fas fa-chevron-up fa-lg ml-2 icon-close"></i> -->
                    </button>
                </div>
                <form action="" class="bg-white mx-1 pl-3 pl-sm-4 pl-lg-5 py-3 rounded collapse" id="formSearch">
                    <div class="tab-content">
                        <div class="tab-pane" id="list-food">
                            <div class="d-flex justify-content-start align-items-center">
                                <input type="checkbox" name="" class="form-check-label mr-1">
                                <label for="" class="m-1">食物</label>
                                <input type="checkbox" name="" class="form-check-label mr-1 ml-3">
                                <label for="" class="m-1">食物</label>
                                <input type="checkbox" name="" class="form-check-label mr-1 ml-3">
                                <label for="" class="m-1">食物</label>
                                <input type="checkbox" name="" class="form-check-label mr-1 ml-3">
                                <label for="" class="m-1">食物</label>
                            </div>
                        </div>
                        <div class="tab-pane"  id="list-clothes">
                            <div class="d-flex justify-content-start align-items-center">
                                <input type="checkbox" name="" class="form-check-label mr-1">
                                <label for="" class="m-1">T-shirt</label>
                                <input type="checkbox" name="" class="form-check-label mr-1 ml-3">
                                <label for="" class="m-1">T-shirt</label>
                                <input type="checkbox" name="" class="form-check-label mr-1 ml-3">
                                <label for="" class="m-1">T-shirt</label>
                                <input type="checkbox" name="" class="form-check-label mr-1 ml-3">
                                <label for="" class="m-1">T-shirt</label>
                            </div>
                        </div>
                        <div class="tab-pane"  id="list-living">
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
                        </div>
                        <div class="tab-pane"  id="list-transport">
                            <div class="d-flex justify-content-start align-items-center">
                                <input type="checkbox" name="" class="form-check-label mr-1">
                                <label for="" class="m-1">車</label>
                                <input type="checkbox" name="" class="form-check-label mr-1 ml-3">
                                <label for="" class="m-1">車</label>
                                <input type="checkbox" name="" class="form-check-label mr-1 ml-3">
                                <label for="" class="m-1">車</label>
                                <input type="checkbox" name="" class="form-check-label mr-1 ml-3">
                                <label for="" class="m-1">車</label>
                            </div>
                        </div>
                        <div class="tab-pane"  id="list-edu">
                            <div class="d-flex justify-content-start align-items-center">
                                <input type="checkbox" name="" class="form-check-label mr-1">
                                <label for="" class="m-1">書</label>
                                <input type="checkbox" name="" class="form-check-label mr-1 ml-3">
                                <label for="" class="m-1">書</label>
                                <input type="checkbox" name="" class="form-check-label mr-1 ml-3">
                                <label for="" class="m-1">書</label>
                                <input type="checkbox" name="" class="form-check-label mr-1 ml-3">
                                <label for="" class="m-1">書</label>
                            </div>
                        </div>
                        <div class="tab-pane"  id="list-entertain">
                            <div class="d-flex justify-content-start align-items-center">
                                <input type="checkbox" name="" class="form-check-label mr-1">
                                <label for="" class="m-1">遊樂園</label>
                                <input type="checkbox" name="" class="form-check-label mr-1 ml-3">
                                <label for="" class="m-1">遊樂園</label>
                                <input type="checkbox" name="" class="form-check-label mr-1 ml-3">
                                <label for="" class="m-1">遊樂園</label>
                                <input type="checkbox" name="" class="form-check-label mr-1 ml-3">
                                <label for="" class="m-1">遊樂園</label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start align-items-center">
                        <input type="checkbox" name="" class="form-check-label mr-1">
                        <label for="" class="m-1">NT$60-100</label>
                        <input type="checkbox" name="" class="form-check-label mr-1 ml-3">
                        <label for="" class="m-1">NT$101-150</label>
                        <input type="checkbox" name="" class="form-check-label mr-1 ml-3">
                        <label for="" class="m-1">NT$151-200</label>
                    </div>
                    <div class="d-flex justify-content-start align-items-center text-pink tab-content">
                        <div class="tab-pane" id="hitTag-1">
                            <span>></span><span>星座</span>
                        </div>
                        <div class="tab-pane" id="hitTag-2">
                            <span>></span><span>搖飲</span>
                        </div>
                        <div class="tab-pane" id="hitTag-3">
                            <span>></span><span>文青風</span>
                        </div>
                        <div class="tab-pane" id="hitTag-4">
                            <span>></span><span>運動</span>
                        </div>
                        <div class="tab-pane" id="hitTag-5">
                            <span>></span><span>海</span>
                        </div>
                        <div class="tab-pane" id="hitTag-6">
                            <span>></span><span>寵物</span>
                        </div>
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
                <!-- <button type="submit" class="btn btn-outline-primary mt-2 px-5">更多</button> -->
                <nav aria-label="Page navigation">
                    <ul class="pagination mt-3">
                        <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
<!-- toTop -->
    <button class="toTop-arrow showw toTop" id="gotop"></button>

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



<?php
    include("template/footer.php");
?>
<script src="js/allpage.js"></script>
<script>
    $("#tabFood").click(function(){
        $(".srcBanner").css("background-image","url('images/banner/logoWeb\ food.png'),url('images/class1.jpg')")
    })
    $("#tabClothes").click(function(){
        $(".srcBanner").css("background-image","url('images/banner/logoWeb\ clothes.png'),url('images/class2.jpeg')")
    })
    $("#tabLiving").click(function(){
        $(".srcBanner").css("background-image","url('images/banner/logoWeb\ housing.png'),url('images/class3.jpg')")
    })
    $("#tabTransport").click(function(){
        $(".srcBanner").css("background-image","url('images/banner/logoWeb\ traffic.png'),url('images/class4.jpeg')")
    })
    $("#tabEdu").click(function(){
        $(".srcBanner").css("background-image","url('images/banner/logoWeb\ tedu.png'),url('images/class5.jpeg')")
    })
    $("#tabEntertain").click(function(){
        $(".srcBanner").css("background-image","url('images/banner/logoWeb\ fun.png'),url('images/class6.jpeg')")
    })
</script>