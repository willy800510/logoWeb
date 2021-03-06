<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb product</title>
    <?php include("template/bootstrapScript.php"); ?>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/search.css">
    <?php include("template/materialDesign.php"); ?>
</head>
<body>
<?php include("template/header.php"); ?>
<div class="container-fluid">
    <div class="container-sm clearfix mToTop">
        <!-- 商品資訊 -->
        <div class="d-flex justify-content-start align-items-center overflow-hidden my-3 pt-3">
            <a href="search.php" class="p-1 mr-2">全部商品</a>
            <i class="fas fa-chevron-right mr-2"></i>
            <a href="#">商品資訊</a>
        </div>
        <div class="card border-0 row flex-md-row justify-content-center align-items-center mb-3 mx-1 p-4 bg-cloud">
            <img class="logoCard col-auto col-md-5 rounded p-4 p-md-5 my-2" src="<?php echo $_POST['productImg'] ?>" alt="Card image cap">
            <div class="card-body col-auto col-md-7 flex-column justify-content-between bg-cloud rounded">
                <div class="d-flex justify-content-between d-xl-block">
                    <h5 class="card-title"><?php echo $_POST['prodName'] ?></h5>
                    <h5 class="card-title text-alert">價格 NT$<?php echo $_POST['prodPrice'] ?></h5>
                </div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="btn btn-outline-logoColor d-block px-4 btn-sm">加入收藏</a>
                    <a href="#" class="btn btn-outline-logoColor d-block px-3 btn-sm">加入購物袋</a>
                    <a href="carts_lists.php" class="btn btn-logoColor d-block px-4 btn-sm">立即購買</a>
                </div>
            </div>
        </div>
        <!-- 相似商品 -->
        <div class="d-flex justify-content-between overflow-hidden">
            <a href="#" class="p-1">相似商品</a>
            <a href="#" class="p-1">MORE→</a>
        </div>
        <div class="row py-3">
            <div class="col-6 col-md-4 col-lg-3 p-1 logo-display">
                <div class="d-block p-4 bg-cloud rounded">
                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                        <img src="<?php echo 'images/logo.svg'?>" alt="" class="d-block m-auto">
                        <input type="hidden" name="productImg" value="<?php echo 'images/logo.svg'?>">
                    </a>
                    <a href="#">
                        <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                    </a>
                </div>
                <div class="bkmk_1 d-block p-4 position-absolute">
                    <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                </div>
                <div class="bkmk_2 d-inline-block p-4 position-absolute">
                    <a href=""><img src="images/icon/designer1.png" alt=""></a>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 p-1 logo-display">
                <div class="d-block p-4 bg-cloud rounded">
                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                        <img src="<?php echo 'images/logo1.svg'?>" alt="" class="d-block m-auto">
                        <input type="hidden" name="productImg" value="<?php echo 'images/logo1.svg'?>">
                    </a>
                    <a href="#">
                        <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                    </a>
                </div>
                <div class="bkmk_1 d-block p-4 position-absolute">
                    <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                </div>
                <div class="bkmk_2 d-inline-block p-4 position-absolute">
                    <a href=""><img src="images/icon/designer1.png" alt=""></a>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 p-1 logo-display">
                <div class="d-block p-4 bg-cloud rounded">
                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                        <img src="<?php echo 'images/logo2.svg'?>" alt="" class="d-block m-auto">
                        <input type="hidden" name="productImg" value="<?php echo 'images/logo2.svg'?>">
                    </a>
                    <a href="#">
                        <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                    </a>
                </div>
                <div class="bkmk_1 d-block p-4 position-absolute">
                    <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                </div>
                <div class="bkmk_2 d-inline-block p-4 position-absolute">
                    <a href=""><img src="images/icon/designer1.png" alt=""></a>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 p-1 logo-display">
                <div class="d-block p-4 bg-cloud rounded">
                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                        <img src="<?php echo 'images/logo3.svg'?>" alt="" class="d-block m-auto">
                        <input type="hidden" name="productImg" value="<?php echo 'images/logo3.svg'?>">
                    </a>
                    <a href="#">
                        <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                    </a>
                </div>
                <div class="bkmk_1 d-block p-4 position-absolute">
                    <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                </div>
                <div class="bkmk_2 d-inline-block p-4 position-absolute">
                    <a href=""><img src="images/icon/designer1.png" alt=""></a>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 p-1 logo-display">
                <div class="d-block p-4 bg-cloud rounded">
                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                        <img src="<?php echo 'images/logo4.svg'?>" alt="" class="d-block m-auto">
                        <input type="hidden" name="productImg" value="<?php echo 'images/logo4.svg'?>">
                    </a>
                    <a href="#">
                        <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                    </a>
                </div>
                <div class="bkmk_1 d-block p-4 position-absolute">
                    <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                </div>
                <div class="bkmk_2 d-inline-block p-4 position-absolute">
                    <a href=""><img src="images/icon/designer1.png" alt=""></a>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 p-1 logo-display">
                <div class="d-block p-4 bg-cloud rounded">
                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                        <img src="<?php echo 'images/logo5.svg'?>" alt="" class="d-block m-auto">
                        <input type="hidden" name="productImg" value="<?php echo 'images/logo5.svg'?>">
                    </a>
                    <a href="#">
                        <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                    </a>
                </div>
                <div class="bkmk_1 d-block p-4 position-absolute">
                    <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                </div>
                <div class="bkmk_2 d-inline-block p-4 position-absolute">
                    <a href=""><img src="images/icon/designer1.png" alt=""></a>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 p-1 logo-display">
                <div class="d-block p-4 bg-cloud rounded">
                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                        <img src="<?php echo 'images/logo6.svg'?>" alt="" class="d-block m-auto">
                        <input type="hidden" name="productImg" value="<?php echo 'images/logo6.svg'?>">
                    </a>
                    <a href="#">
                        <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                    </a>
                </div>
                <div class="bkmk_1 d-block p-4 position-absolute">
                    <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                </div>
                <div class="bkmk_2 d-inline-block p-4 position-absolute">
                    <a href=""><img src="images/icon/designer1.png" alt=""></a>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 p-1 logo-display">
                <div class="d-block p-4 bg-cloud rounded">
                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                        <img src="<?php echo 'images/logo7.svg'?>" alt="" class="d-block m-auto">
                        <input type="hidden" name="productImg" value="<?php echo 'images/logo7.svg'?>">
                    </a>
                    <a href="#">
                        <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                    </a>
                </div>
                <div class="bkmk_1 d-block p-4 position-absolute">
                    <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                </div>
                <div class="bkmk_2 d-inline-block p-4 position-absolute">
                    <a href=""><img src="images/icon/designer1.png" alt=""></a>
                </div>
            </div>
            <div class="d-none d-md-block d-lg-none col-md-4 col-lg-3 p-1 logo-display">
                <div class="d-block p-4 bg-cloud rounded">
                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                        <img src="<?php echo 'images/logo8.svg'?>" alt="" class="d-block m-auto">
                        <input type="hidden" name="productImg" value="<?php echo 'images/logo8.svg'?>">
                    </a>
                    <a href="#">
                        <span class="d-block mt-4 text-center">logo name<br>NT$ 60</span>
                    </a>
                </div>
                <div class="bkmk_1 d-block p-4 position-absolute">
                    <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                </div>
                <div class="bkmk_2 d-inline-block p-4 position-absolute">
                    <a href=""><img src="images/icon/designer1.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("template/logoDisplayT.php"); ?>
<?php include("template/footer.php"); ?>
<script src="js/allpage.js"></script>