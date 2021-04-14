<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb logoDisplay</title>
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
    <?php include("template/materialDesign.php"); ?>
</head>
<body>
<?php
    include("template/header.php");
?>
<div id="logoDisplay" class="container-fluid">
    <div class="container-sm position-relative">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <img src="images/AdobeStock_250566348 [轉換].svg" class="w-100 height-200 position-absolute mg-70 z-index-1" id="scoll_overlay" alt="...">
            <div class="position-absolute z-index-100 addCart">
                <button class="btn btn-outline-orange">檔案下載</button>
            </div>
            <div class="position-absolute z-index-100 prodDetail">
                <a onclick="history.back()" class="btn btn-outline-orange text-center">返回</a>
            </div>
            <ol class="carousel-indicators align-items-center">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active" id="underBar1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1" id="underBar2"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2" id="underBar3"></li>
            </ol>
            <div class="carousel-inner mb-2 mb-xl-0 mToTop">
                <div class="carousel-item bg-cloud rounded active">
                    <div class="d-flex justify-content-center p-5 w-100 height-500">
                        <img src="images/AdobeStock_250566348 [轉換].svg" class="w-100 height-200 opacity-3 mg-70" alt="...">
                    </div>
                    <div class="carousel-caption d-none d-md-block text-dark">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item bg-cloud rounded">
                    <div class="d-flex justify-content-center p-5 w-100 height-500">
                        <img src="images/carousel/65911.png" class="d-block w-auto height-400" alt="...">
                    </div>
                    <div class="carousel-caption d-none d-md-block text-dark">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item bg-cloud rounded">
                    <div class="d-flex justify-content-center p-5 w-100 height-500">
                        <img src="images/carousel/business-cards.png" class="d-block w-auto height-400" alt="...">
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
<script src="js/allpage.js"></script>
<?php
    include("template/footer.php");
?>
