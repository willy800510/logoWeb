<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb order</title>
    <?php include("template/bootstrapScript.php"); ?>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/leftbar.css">
    <link rel="stylesheet" href="css/account.css">
    <?php include("template/materialDesign.php"); ?>
</head>
<body data-no="6">
<?php include("template/header-logoCenter.php"); ?>
<div class="container-fluid">
    <div class="container">
        <div class="row mToTop">
        <!-- 左導覽 -->
            <?php include("template/leftbar.php"); ?>
        <!-- 右主欄 -->
            <div class="col-12 col-xl-10 px-0 px-xl-3">
                <div class="list-group flex-row align-items-center justify-content-around" role="tablist">
                    <a class="list-group-item text-center col-4 bg-cloud p-4 active" data-toggle="list" role="tab">全部</a>
                    <a class="list-group-item text-center col-4 bg-cloud p-4" data-toggle="list" role="tab">修改中</a>
                    <a class="list-group-item text-center col-4 bg-cloud p-4" data-toggle="list" role="tab">完成</a>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center mt-1">
                    <div class="w-100 bg-cloud p-3 mb-1">
                        <ul class="d-flex justify-content-around align-items-center">
                            <li class="font-weight-bolder col-3 text-center">商品圖式</li> 
                            <li class="font-weight-bolder col-3 text-center">訂單編號</li> 
                            <li class="font-weight-bolder col-3 text-center">訂單狀態</li> 
                            <li class="font-weight-bolder col-3 text-center">訂單總額</li> 
                        </ul>
                        <ul class="d-flex justify-content-around align-items-center">
                            <img src="images/logo.svg" alt="" class="logoIcon col-3 text-center">
                            <a href="orderNum.php" class="col-3 text-center">xxxxxxxxxx</a> 
                            <li class="col-3 text-center">商品製作中</li>
                            <li class="col-3 text-center text-alert">NT$200</li>
                        </ul>
                        <div class="d-flex justify-content-around align-items-center">
                            <a href="logoDisplay.php" class="btn btn-outline-primary mx-1 py-2 col-6 text-center disabled">檔案預覽</a>
                            <!-- 當訂單狀態在 1.尚未付款 2.商品製作中 沒有檔案可預覽 要加上disabled -->
                            <a href="orderCheck.php" class="btn btn-outline-logoColor mx-1 py-2 col-6 text-center">查看詳細訂單</a>
                        </div>
                    </div>
                    <div class="w-100 bg-cloud p-3 mb-1">
                        <ul class="d-flex justify-content-around align-items-center">
                            <li class="font-weight-bolder col-3 text-center">商品圖式</li> 
                            <li class="font-weight-bolder col-3 text-center">訂單編號</li> 
                            <li class="font-weight-bolder col-3 text-center">訂單狀態</li> 
                            <li class="font-weight-bolder col-3 text-center">訂單總額</li> 
                        </ul>
                        <ul class="d-flex justify-content-around align-items-center">
                            <img src="images/logo.svg" alt="" class="logoIcon col-3 text-center">
                            <a href="orderNum.php" class="col-3 text-center">xxxxxxxxxx</a> 
                            <li class="col-3 text-center">訂單完成</li>
                            <li class="col-3 text-center text-alert">NT$200</li>
                        </ul>
                        <div class="d-flex justify-content-around align-items-center">
                            <a href="logoDisplay.php" class="btn btn-outline-primary mx-1 py-2 col-6 text-center">檔案預覽</a>
                            <a href="orderCheck.php" class="btn btn-outline-logoColor mx-1 py-2 col-6 text-center">查看詳細訂單</a>
                        </div>
                    </div>
                    <div class="w-100 bg-cloud p-3 mb-1">
                        <ul class="d-flex justify-content-around align-items-center">
                            <li class="font-weight-bolder col-3 text-center">商品圖式</li> 
                            <li class="font-weight-bolder col-3 text-center">訂單編號</li> 
                            <li class="font-weight-bolder col-3 text-center">訂單狀態</li> 
                            <li class="font-weight-bolder col-3 text-center">訂單總額</li> 
                        </ul>
                        <ul class="d-flex justify-content-around align-items-center">
                            <img src="images/logo.svg" alt="" class="logoIcon col-3 text-center">
                            <a href="orderNum.php" class="col-3 text-center">xxxxxxxxxx</a> 
                            <li class="col-3 text-center">商品製作中</li>
                            <li class="col-3 text-center text-alert">NT$200</li>
                        </ul>
                        <div class="d-flex justify-content-around align-items-center">
                            <a href="logoDisplay.php" class="btn btn-outline-primary mx-1 py-2 col-6 text-center">檔案預覽</a>
                            <a href="orderCheck.php" class="btn btn-outline-logoColor mx-1 py-2 col-6 text-center">查看詳細訂單</a>
                        </div>
                    </div>
                    <div class="w-100 bg-cloud p-3 mb-1">
                        <ul class="d-flex justify-content-around align-items-center">
                            <li class="font-weight-bolder col-3 text-center">商品圖式</li> 
                            <li class="font-weight-bolder col-3 text-center">訂單編號</li> 
                            <li class="font-weight-bolder col-3 text-center">訂單狀態</li> 
                            <li class="font-weight-bolder col-3 text-center">訂單總額</li> 
                        </ul>
                        <ul class="d-flex justify-content-around align-items-center">
                            <img src="images/logo.svg" alt="" class="logoIcon col-3 text-center">
                            <a href="orderNum.php" class="col-3 text-center">xxxxxxxxxx</a> 
                            <li class="col-3 text-center">商品製作中</li>
                            <li class="col-3 text-center text-alert">NT$200</li>
                        </ul>
                        <div class="d-flex justify-content-around align-items-center">
                            <a href="logoDisplay.php" class="btn btn-outline-primary mx-1 py-2 col-6 text-center">檔案預覽</a>
                            <a href="orderCheck.php" class="btn btn-outline-logoColor mx-1 py-2 col-6 text-center">查看詳細訂單</a>
                        </div>
                    </div>
                    <div class="w-100 bg-cloud p-3 mb-1">
                        <ul class="d-flex justify-content-around align-items-center">
                            <li class="font-weight-bolder col-3 text-center">商品圖式</li> 
                            <li class="font-weight-bolder col-3 text-center">訂單編號</li> 
                            <li class="font-weight-bolder col-3 text-center">訂單狀態</li> 
                            <li class="font-weight-bolder col-3 text-center">訂單總額</li> 
                        </ul>
                        <ul class="d-flex justify-content-around align-items-center">
                            <img src="images/logo.svg" alt="" class="logoIcon col-3 text-center">
                            <a href="orderNum.php" class="col-3 text-center">xxxxxxxxxx</a> 
                            <li class="col-3 text-center">商品製作中</li>
                            <li class="col-3 text-center text-alert">NT$200</li>
                        </ul>
                        <div class="d-flex justify-content-around align-items-center">
                            <a href="logoDisplay.php" class="btn btn-outline-primary mx-1 py-2 col-6 text-center">檔案預覽</a>
                            <a href="orderCheck.php" class="btn btn-outline-logoColor mx-1 py-2 col-6 text-center">查看詳細訂單</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("template/footer.php"); ?>
<script src="js/allpage.js"></script>