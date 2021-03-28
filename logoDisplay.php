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
    <link href="js/lightbox2-2.11.3/dist/css/lightbox.min.css" rel="stylesheet" />
    <script src="js/lightbox2-2.11.3/dist/js/lightbox.min.js"></script>
    <script src="js/lightbox2-2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
</head>
<body>
<?php
    include("template/header.php");
?>
  <div id="logoDisplay" class="container-fluid">
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
<script src="js/allpage.js"></script>
<?php
    include("template/footer.php");
?>
