<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb product</title>
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
        @media(min-width:0){
            .logoCard{
                width: 100%;
                height: 200px;
            }
        }
        @media(min-width: 768px){
            .logoCard{
                width: 100%;
                height: 100%;
            }
        }
        @media(min-width: 992px){
            .logoCard{
                width: 100%;
                height: 270px;
            }
        }
    </style>
</head>
<body>
<?php
    include("template/header.php");
?>
<!-- 商品資訊 -->
  <div class="container-fluid">
    <div class="container-sm clearfix" style="padding-top: 75px;">
      <div class="d-flex justify-content-start align-items-center overflow-hidden my-3">
        <a href="search.php" class="p-1 mr-2">全部商品</a>
        <i class="fas fa-chevron-right mr-2"></i>
        <a href="#">商品資訊</a>
      </div>
      <div class="card p-4 flex-md-row row mb-3 justify-content-center align-items-center" style="background-color: #F3ECE5;">
        <img class="logoCard col-auto col-md-5 bg-white rounded p-4 p-md-5 my-2" src="images/AdobeStock_250566348 [轉換].svg" alt="Card image cap">
        <div class="card-body col-auto col-md-7 flex-column justify-content-between">
          <div class="d-flex justify-content-between d-xl-block">
            <h5 class="card-title">商品名稱</h5>
            <h5 class="card-title text-danger">價格</h5>
          </div>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <div class="d-flex justify-content-between align-items-center">
            <a href="#" class="btn btn-light d-block d-lg-none px-4 btn-sm">加入收藏</a>
            <a href="#" class="btn btn-light d-block d-lg-none btn-sm">加入購物袋</a>
            <a href="carts_lists.php" class="btn btn-light d-block d-lg-none px-4 btn-sm">立即購買</a>
            <a href="#" class="btn btn-light d-none d-lg-block px-4 btn-lg">加入收藏</a>
            <a href="#" class="btn btn-light d-none d-lg-block btn-lg">加入購物袋</a>
            <a href="carts_lists.php" class="btn btn-light d-none d-lg-block px-4 btn-lg">立即購買</a>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-between overflow-hidden">
        <a href="#" class="p-1">相似商品</a>
        <a href="#" class="p-1">MORE→</a>
      </div>
<!-- 相似商品 -->
      <div class="row py-3">
        <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
            <div class="d-block p-4 bg-white rounded">
                <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                    <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                </a>
                <a href="#">
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
                <a href="#">
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
                <a href="#">
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
                <a href="#">
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
                <a href="#">
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
                <a href="#">
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
                <a href="#">
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
                <a href="#">
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