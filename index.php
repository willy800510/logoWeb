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
    <!-- Material Design -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/material-icon.css">
    <!-- <?php #include("template/materialDesign.php"); ?> -->
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
            <form action="search.php" method="post" class="d-flex justify-content-center overflow-hidden m-2">
                <input type="search" id="site-search" name="keyword" aria-label="Search through site content" size="30" class="m-1 px-2 srchtext">
                <!-- <a href="search.php" value="搜尋" class="m-1 rounded-right srch btn"><img src="images/icon/MDIcon/search_white_24dp.svg" alt="" class="mx-2"></a> -->
                <button type="submit" value="搜尋" class="btn m-1 rounded-right srch "><img src="images/icon/MDIcon/search_white_24dp.svg" alt="" class="mx-2"></button>
            </form>
            <div class="d-flex justify-content-center">
                <a href="search.php" class="btn btn-light mx-1 mx-sm-2 my-auto">星座</a>
                <a href="search.php" class="btn btn-light mx-1 mx-sm-2 my-auto">搖飲</a>
                <a href="search.php" class="btn btn-light mx-1 mx-sm-2 my-auto">文青風</a>
                <a href="search.php" class="btn btn-light mx-1 mx-sm-2 my-auto">運動</a>
                <a href="search.php" class="btn btn-light mx-1 mx-sm-2 my-auto">海</a>
                <a href="search.php" class="btn btn-light mx-1 mx-sm-2 my-auto">寵物</a>
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
                <!-- 嘗試將一個card寫成logo展示的模板 logoCard.php 請參照issue# -->
                <div class="col-6 col-md-4 col-lg-3 p-1 logo-display">
                    <form action="product.php" class="d-block p-4 bg-cloud rounded" method="post">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="<?php echo 'images/logo5.svg'?>" alt="" class="d-block m-auto">
                            <input type="hidden" name="productImg" value="<?php echo 'images/logo5.svg'?>">
                        </a>
                        <button type="submit" class="d-block mx-auto">
                            <a class="d-block mt-4 text-center"><?php echo'Cube'?></a>
                            <input type="hidden" name="prodName" value="<?php echo 'Cube'?>">
                            <a class="d-block text-center">NT$<?php echo'80'?></a>
                            <input type="hidden" name="prodPrice" value="<?php echo '80'?>">
                        </button>
                    </form>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 logo-display">
                    <form action="product.php" method="post" class="d-block p-4 bg-cloud rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="<?php echo 'images/logo.svg'?>" alt="" class="d-block m-auto">
                            <input type="hidden" name="productImg" value="<?php echo 'images/logo.svg'?>">
                        </a>
                        <button type="submit" class="d-block mx-auto">
                            <a class="d-block mt-4 text-center"><?php echo'EcoGreen'?></a>
                            <input type="hidden" name="prodName" value="<?php echo 'EcoGreen'?>">
                            <a class="d-block text-center">NT$<?php echo'120'?></a>
                            <input type="hidden" name="prodPrice" value="<?php echo '120'?>">
                        </button>
                    </form>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 logo-display">
                    <form action="product.php" method="post" class="d-block p-4 bg-cloud rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="<?php echo 'images/logo1.svg'?>" alt="" class="d-block m-auto">
                            <input type="hidden" name="productImg" value="<?php echo 'images/logo1.svg'?>">
                        </a>
                        <button type="submit" class="d-block mx-auto">
                            <a class="d-block mt-4 text-center"><?php echo'Rooster'?></a>
                            <input type="hidden" name="prodName" value="<?php echo 'Rooster'?>">
                            <a class="d-block text-center">NT$<?php echo'100'?></a>
                            <input type="hidden" name="prodPrice" value="<?php echo '100'?>">
                        </button>
                    </form>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 logo-display">
                    <form action="product.php" method="post" class="d-block p-4 bg-cloud rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="<?php echo 'images/logo2.svg'?>" alt="" class="d-block m-auto">
                            <input type="hidden" name="productImg" value="<?php echo 'images/logo2.svg'?>">
                        </a>
                        <button type="submit" class="d-block mx-auto">
                            <a class="d-block mt-4 text-center"><?php echo'Bear'?></a>
                            <input type="hidden" name="prodName" value="<?php echo 'Bear'?>">
                            <a class="d-block text-center">NT$<?php echo'90'?></a>
                            <input type="hidden" name="prodPrice" value="<?php echo '90'?>">
                        </button>
                    </form>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 logo-display">
                    <form action="product.php" method="post" class="d-block p-4 bg-cloud rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="<?php echo 'images/logo3.svg'?>" alt="" class="d-block m-auto">
                            <input type="hidden" name="productImg" value="<?php echo 'images/logo3.svg'?>">
                        </a>
                        <button type="submit" class="d-block mx-auto">
                            <a class="d-block mt-4 text-center"><?php echo'Horse'?></a>
                            <input type="hidden" name="prodName" value="<?php echo 'Horse'?>">
                            <a class="d-block text-center">NT$<?php echo'100'?></a>
                            <input type="hidden" name="prodPrice" value="<?php echo '100'?>">
                        </button>
                    </form>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 logo-display">
                    <form action="product.php" method="post" class="d-block p-4 bg-cloud rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="<?php echo 'images/logo4.svg'?>" alt="" class="d-block m-auto">
                            <input type="hidden" name="productImg" value="<?php echo 'images/logo4.svg'?>">
                        </a>
                        <button type="submit" class="d-block mx-auto">
                            <a class="d-block mt-4 text-center"><?php echo'EcoFood'?></a>
                            <input type="hidden" name="prodName" value="<?php echo 'EcoFood'?>">
                            <a class="d-block text-center">NT$<?php echo'110'?></a>
                            <input type="hidden" name="prodPrice" value="<?php echo '110'?>">
                        </button>
                    </form>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 logo-display d-none d-md-block">
                    <form action="product.php" method="post" class="d-block p-4 bg-cloud rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="<?php echo 'images/logo6.svg'?>" alt="" class="d-block m-auto">
                            <input type="hidden" name="productImg" value="<?php echo 'images/logo6.svg'?>">
                        </a>
                        <button type="submit" class="d-block mx-auto">
                            <a class="d-block mt-4 text-center"><?php echo'ElectroCar'?></a>
                            <input type="hidden" name="prodName" value="<?php echo 'ElectroCar'?>">
                            <a class="d-block text-center">NT$<?php echo'150'?></a>
                            <input type="hidden" name="prodPrice" value="<?php echo '150'?>">
                        </button>
                    </form>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 logo-display d-none d-md-block">
                    <form action="product.php" method="post" class="d-block p-4 bg-cloud rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="<?php echo 'images/logo7.svg'?>" alt="" class="d-block m-auto">
                            <input type="hidden" name="productImg" value="<?php echo 'images/logo7.svg'?>">
                        </a>
                        <button type="submit" class="d-block mx-auto">
                            <a class="d-block mt-4 text-center"><?php echo'CarService'?></a>
                            <input type="hidden" name="prodName" value="<?php echo 'CarService'?>">
                            <a class="d-block text-center">NT$<?php echo'140'?></a>
                            <input type="hidden" name="prodPrice" value="<?php echo '140'?>">
                        </button>
                    </form>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 logo-display d-none d-md-block">
                    <form action="product.php" method="post" class="d-block p-4 bg-cloud rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="<?php echo 'images/logo8.svg'?>" alt="" class="d-block m-auto">
                            <input type="hidden" name="productImg" value="<?php echo 'images/logo8.svg'?>">
                        </a>
                        <button type="submit" class="d-block mx-auto">
                            <a class="d-block mt-4 text-center"><?php echo'AutoCar'?></a>
                            <input type="hidden" name="prodName" value="<?php echo 'AutoCar'?>">
                            <a class="d-block text-center">NT$<?php echo'130'?></a>
                            <input type="hidden" name="prodPrice" value="<?php echo '130'?>">
                        </button>
                    </form>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 logo-display d-none d-lg-block">
                    <form action="product.php" method="post" class="d-block p-4 bg-cloud rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="<?php echo 'images/logo9.svg'?>" alt="" class="d-block m-auto">
                            <input type="hidden" name="productImg" value="<?php echo 'images/logo9.svg'?>">
                        </a>
                        <button type="submit" class="d-block mx-auto">
                            <a class="d-block mt-4 text-center"><?php echo'Fashion Shop'?></a>
                            <input type="hidden" name="prodName" value="<?php echo 'Fashion Shop'?>">
                            <a class="d-block text-center">NT$<?php echo'105'?></a>
                            <input type="hidden" name="prodPrice" value="<?php echo '105'?>">
                        </button>
                    </form>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 logo-display d-none d-lg-block">
                    <form action="product.php" method="post" class="d-block p-4 bg-cloud rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="<?php echo 'images/logo10.svg'?>" alt="" class="d-block m-auto">
                            <input type="hidden" name="productImg" value="<?php echo 'images/logo10.svg'?>">
                        </a>
                        <button type="submit" class="d-block mx-auto">
                            <a class="d-block mt-4 text-center"><?php echo'Tower'?></a>
                            <input type="hidden" name="prodName" value="<?php echo 'Tower'?>">
                            <a class="d-block text-center">NT$<?php echo'90'?></a>
                            <input type="hidden" name="prodPrice" value="<?php echo '90'?>">
                        </button>
                    </form>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 logo-display d-none d-lg-block">
                    <form action="product.php" method="post" class="d-block p-4 bg-cloud rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <img src="<?php echo 'images/logo11.svg'?>" alt="" class="d-block m-auto">
                            <input type="hidden" name="productImg" value="<?php echo 'images/logo11.svg'?>">
                        </a>
                        <button type="submit" class="d-block mx-auto">
                            <a class="d-block mt-4 text-center"><?php echo'Pizza'?></a>
                            <input type="hidden" name="prodName" value="<?php echo 'Pizza'?>">
                            <a class="d-block text-center">NT$<?php echo'120'?></a>
                            <input type="hidden" name="prodPrice" value="<?php echo '120'?>">
                        </button>
                    </form>
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
                <div class="col-6 col-md-4 col-lg-3 p-1 logo-display">
                    <div class="d-block p-4 bg-cloud rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <!-- <img src="images/logo5.svg" alt="" class="d-block m-auto"> -->
                            <img src="<?php echo 'images/logo.svg'?>" alt="" class="d-block m-auto">
                            <input type="hidden" name="productImg" value="<?php echo 'images/logo.svg'?>">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center"><?php echo'logo name'?></span>
                            <span class="d-block text-center">NT$<?php echo'60'?></span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 logo-display">
                    <div class="d-block p-4 bg-cloud rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <!-- <img src="images/logo5.svg" alt="" class="d-block m-auto"> -->
                            <img src="<?php echo 'images/logo1.svg'?>" alt="" class="d-block m-auto">
                            <input type="hidden" name="productImg" value="<?php echo 'images/logo1.svg'?>">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center"><?php echo'logo name'?></span>
                            <span class="d-block text-center">NT$<?php echo'60'?></span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 logo-display">
                    <div class="d-block p-4 bg-cloud rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <!-- <img src="images/logo5.svg" alt="" class="d-block m-auto"> -->
                            <img src="<?php echo 'images/logo2.svg'?>" alt="" class="d-block m-auto">
                            <input type="hidden" name="productImg" value="<?php echo 'images/logo2.svg'?>">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center"><?php echo'logo name'?></span>
                            <span class="d-block text-center">NT$<?php echo'60'?></span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 logo-display">
                    <div class="d-block p-4 bg-cloud rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <!-- <img src="images/logo5.svg" alt="" class="d-block m-auto"> -->
                            <img src="<?php echo 'images/logo3.svg'?>" alt="" class="d-block m-auto">
                            <input type="hidden" name="productImg" value="<?php echo 'images/logo3.svg'?>">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center"><?php echo'logo name'?></span>
                            <span class="d-block text-center">NT$<?php echo'60'?></span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 logo-display">
                    <div class="d-block p-4 bg-cloud rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <!-- <img src="images/logo5.svg" alt="" class="d-block m-auto"> -->
                            <img src="<?php echo 'images/logo4.svg'?>" alt="" class="d-block m-auto">
                            <input type="hidden" name="productImg" value="<?php echo 'images/logo4.svg'?>">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center"><?php echo'logo name'?></span>
                            <span class="d-block text-center">NT$<?php echo'60'?></span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 logo-display">
                    <div class="d-block p-4 bg-cloud rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <!-- <img src="images/logo5.svg" alt="" class="d-block m-auto"> -->
                            <img src="<?php echo 'images/logo5.svg'?>" alt="" class="d-block m-auto">
                            <input type="hidden" name="productImg" value="<?php echo 'images/logo5.svg'?>">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center"><?php echo'logo name'?></span>
                            <span class="d-block text-center">NT$<?php echo'60'?></span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 logo-display d-none d-md-block">
                    <div class="d-block p-4 bg-cloud rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <!-- <img src="images/logo5.svg" alt="" class="d-block m-auto"> -->
                            <img src="<?php echo 'images/logo6.svg'?>" alt="" class="d-block m-auto">
                            <input type="hidden" name="productImg" value="<?php echo 'images/logo6.svg'?>">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center"><?php echo'logo name'?></span>
                            <span class="d-block text-center">NT$<?php echo'60'?></span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 logo-display d-none d-md-block">
                    <div class="d-block p-4 bg-cloud rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <!-- <img src="images/logo5.svg" alt="" class="d-block m-auto"> -->
                            <img src="<?php echo 'images/logo7.svg'?>" alt="" class="d-block m-auto">
                            <input type="hidden" name="productImg" value="<?php echo 'images/logo7.svg'?>">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center"><?php echo'logo name'?></span>
                            <span class="d-block text-center">NT$<?php echo'60'?></span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 logo-display d-none d-md-block">
                    <div class="d-block p-4 bg-cloud rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <!-- <img src="images/logo5.svg" alt="" class="d-block m-auto"> -->
                            <img src="<?php echo 'images/logo8.svg'?>" alt="" class="d-block m-auto">
                            <input type="hidden" name="productImg" value="<?php echo 'images/logo8.svg'?>">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center"><?php echo'logo name'?></span>
                            <span class="d-block text-center">NT$<?php echo'60'?></span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 logo-display d-none d-lg-block">
                    <div class="d-block p-4 bg-cloud rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <!-- <img src="images/logo5.svg" alt="" class="d-block m-auto"> -->
                            <img src="<?php echo 'images/logo9.svg'?>" alt="" class="d-block m-auto">
                            <input type="hidden" name="productImg" value="<?php echo 'images/logo9.svg'?>">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center"><?php echo'logo name'?></span>
                            <span class="d-block text-center">NT$<?php echo'60'?></span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 logo-display d-none d-lg-block">
                    <div class="d-block p-4 bg-cloud rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <!-- <img src="images/logo5.svg" alt="" class="d-block m-auto"> -->
                            <img src="<?php echo 'images/logo10.svg'?>" alt="" class="d-block m-auto">
                            <input type="hidden" name="productImg" value="<?php echo 'images/logo10.svg'?>">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center"><?php echo'logo name'?></span>
                            <span class="d-block text-center">NT$<?php echo'60'?></span>
                        </a>
                    </div>
                    <div class="bkmk_1 d-block p-3 position-absolute">
                        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
                    </div>
                    <div class="bkmk_2 d-inline-block p-4 position-absolute">
                        <a href=""><img src="images/icon/designer1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 logo-display d-none d-lg-block">
                    <div class="d-block p-4 bg-cloud rounded">
                        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                            <!-- <img src="images/logo5.svg" alt="" class="d-block m-auto"> -->
                            <img src="<?php echo 'images/logo11.svg'?>" alt="" class="d-block m-auto">
                            <input type="hidden" name="productImg" value="<?php echo 'images/logo11.svg'?>">
                        </a>
                        <a href="product.php">
                            <span class="d-block mt-4 text-center"><?php echo'logo name'?></span>
                            <span class="d-block text-center">NT$<?php echo'60'?></span>
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