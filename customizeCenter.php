<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb customize center</title>
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
<body>
<?php include("template/header.php"); ?>
<div class="container-fluid">
    <div class="container-sm">
        <div class="row mToTop">
        <!-- 左導覽 -->
            <?php include("template/leftbar.php"); ?>
        <!-- 右主欄 -->
            <div class="col-12 col-xl-10 px-0 px-xl-3 mb-1">
                <div class="d-flex align-items-center justify-content-around bg-white p-4">
                    <span class="text-center">客製中心</span>
                </div>
                <div class="mt-1">
                    <div class="d-flex align-items-center justify-content-between bg-white border-bottom border-secondary" style="border-bottom-style: dotted !important;">
                        <img src="images/logo.svg" alt="" class="logoIcon col-2 p-2 ">
                        <span class="d-none d-md-block col-3">訂單狀態：<span class="text-info">修改中</span></span>
                        <span class="col-5 col-md-3 text-center">訂單總額：<span class="text-alert">NT$400</span></span>
                        <span class="col-5 col-md-4 text-center">訂單遍號：<a href="#" class="text-primary">xxxxxxxxxx</a></span>
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-white">
                        <img src="images/logo.svg" alt="" class="logoIcon col-2 p-2">
                        <span class="d-none d-md-block col-3">companyName</span>
                        <span class="col-5 col-md-3 text-center">金額：<span class="text-alert">NT$200</span></span>
                        <div class="col-5 col-md-4 text-center ">
                            <a href="modifyCheck.php" class="col-8 btn btn-outline-pink">修改細項</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-white">
                        <img src="images/logo.svg" alt="" class="logoIcon col-2 p-2">
                        <span class="d-none d-md-block col-3">companyName</span>
                        <span class="col-5 col-md-3 text-center">金額：<span class="text-alert">NT$200</span></span>
                        <div class="col-5 col-md-4 text-center ">
                            <a href="modifyCheck.php" class="col-8 btn btn-outline-pink">修改細項</a>
                        </div>
                    </div>
                </div>
                <div class="mt-1">
                    <div class="d-flex align-items-center justify-content-between bg-white border-bottom border-secondary" style="border-bottom-style: dotted !important;">
                        <img src="images/logo.svg" alt="" class="logoIcon col-2 p-2 ">
                        <span class="d-none d-md-block col-3">訂單狀態：<span class="text-info">修改中</span></span>
                        <span class="col-5 col-md-3 text-center">訂單總額：<span class="text-alert">NT$400</span></span>
                        <span class="col-5 col-md-4 text-center">訂單遍號：<a href="#" class="text-primary">xxxxxxxxxx</a></span>
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-white">
                        <img src="images/logo.svg" alt="" class="logoIcon col-2 p-2">
                        <span class="d-none d-md-block col-3">companyName</span>
                        <span class="col-5 col-md-3 text-center">金額：<span class="text-alert">NT$200</span></span>
                        <div class="col-5 col-md-4 text-center ">
                            <a href="modifyCheck.php" class="col-8 btn btn-outline-pink">修改細項</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-white">
                        <img src="images/logo.svg" alt="" class="logoIcon col-2 p-2">
                        <span class="d-none d-md-block col-3">companyName</span>
                        <span class="col-5 col-md-3 text-center">金額：<span class="text-alert">NT$200</span></span>
                        <div class="col-5 col-md-4 text-center ">
                            <a href="modifyCheck.php" class="col-8 btn btn-outline-pink">修改細項</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("template/footer.php"); ?>