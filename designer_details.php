<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>logoWeb designer</title>
  <?php include("template/bootstrapScript.php"); ?>
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/banner.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/account.css">
  <link rel="stylesheet" href="css/designer.css">
</head>

<body>
  <?php include("template/header.php"); ?>

  <div class="container-fluid designer-content mToTop">
    <div class="container-sm pb-3 pb-xl-1">
      <h5 class="position-fixed fixed-top page-title">訂單管理</h5>
      <div class="bg-white px-3 px-sm-4 px-lg-5 pb-4 pb-lg-5">
        <div class="row align-items-end border-bottom border-dark py-3 mb-2 mb-md-5">
          <p class="col-4 m-0">訂單編號：xxxxxxxxxx</p>
          <p class="col-4 h4 text-center align-self-start align-self-lg-auto m-0 p-0">第二次 待修改</p>
          <div class="col-4 text-right">
            <img src="images/icon/designer3.png" alt="" style="width:80px">
          </div>
        </div>

        <div id="modify_carousel" class="carousel slide" data-touch="false" data-interval="false">
          <div class="carousel-inner">
            <!-- 單一筆資料 -->
            <div class="row mb-4 carousel-item">
              <div class="col-12 col-lg-2 d-flex justify-content-center justify-content-md-start justify-content-lg-center align-items-center">第一次</div>
              <div class="col-12 col-md-4 col-lg-3 col-xl-2 d-flex align-items-center p-2 py-3">
                <div class="mx-auto mx-md-0 logo-img">
                  <img src="images/logo5.svg" class="img-thumbnail shadow border-0" alt="">
                </div>
              </div>
              <div class="col-12 col-md-8 col-lg-5 col-xl-6 pl-xl-5 row">
                <div class="col-12 col-sm-6 p-2">
                  <p class="mb-1">公司名稱</p>
                  <div class="bg-light text-muted rounded p-2">company name</div>
                </div>
                <div class="col-12 col-sm-6 p-2">
                  <p class="mb-1">公司口號/標語</p>
                  <div class="bg-light text-muted rounded p-2">company slogan</div>
                </div>
                <!-- 如果只有一個顏色，col-12 改成 col-6 -->
                <div class="col-12 p-2">
                  <p class="mb-1">希望使用的顏色</p>
                  <div class="d-flex">
                    <!-- 如果是漸層色的話，才出現那下面一行 -->
                    <!-- <div class="col-2 bg-light text-muted rounded p-2 mr-3" style="background:linear-gradient(to left,#AEC20F,#5C5CFF);"></div> -->

                    <!-- 如果只有一個顏色，不要加 mr-3；多個顏色的話，除了最後一個以外 都要加 mr-3 -->
                    <div class="col bg-light text-muted rounded p-2 mr-3">#AEC20F<span class="color-sample" style="background-color: #AEC20F;"></span></div>
                    <div class="col bg-light text-muted rounded p-2">#5C5CFF<span class="color-sample" style="background-color: #5C5CFF;"></span></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 單一筆資料 end -->
            <!-- 最新的那一筆修改資料 加.active -->
            <div class="row mb-4 carousel-item active">
              <div class="col-12 col-lg-2 d-flex justify-content-center justify-content-md-start justify-content-lg-center align-items-center">第二次</div>
              <div class="col-12 col-md-4 col-lg-3 col-xl-2 d-flex align-items-center p-2 py-3">

                <!-- 尚未上傳檔案的情況 -->
                <!-- <a href="designer_upload.php" class="mx-auto mx-md-0 logo-img border border-warning rounded p-2 h-100 d-flex justify-content-center align-items-center">
                  <span class="btn btn-logoColor">上傳檔案</span>
                </a> -->
                <!-- 尚未上傳檔案的情況 end -->

                <!-- 已上傳檔案尚未確認送出的情況 -->
                <div class="mx-auto mx-md-0 logo-img position-relative">
                  <img src="images/logo5_changeColor.svg" class="img-thumbnail shadow border-0" alt="">
                  <a href="designer_preview.php" class="overlay border rounded d-flex justify-content-center align-items-center">
                    <span class="btn btn-logoColor">送出檔案</span>
                  </a>
                </div>
                <!-- 已上傳檔案尚未確認送出的情況 end -->

              </div>
              <div class="col-12 col-md-8 col-lg-5 col-xl-6 pl-xl-5 row">
                <div class="col-12 col-sm-6 p-2">
                  <p class="mb-1">公司名稱</p>
                  <div class="bg-light text-muted rounded p-2">company name</div>
                </div>
                <div class="col-12 col-sm-6 p-2">
                  <p class="mb-1">公司口號/標語</p>
                  <div class="bg-light text-muted rounded p-2">company slogan</div>
                </div>
                <div class="col-12 p-2">
                  <p class="mb-1">希望使用的顏色</p>
                  <div class="d-flex">
                    <div class="col bg-light text-muted rounded p-2 mr-3">#5C5CFF<span class="color-sample" style="background-color: #5C5CFF;"></span></div>
                    <div class="col bg-light text-muted rounded p-2">#5C5CFF<span class="color-sample" style="background-color: #5C5CFF;"></span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev d-md-none" href="#modify_carousel" role="button" data-slide="prev">
            <i class="fas fa-chevron-left text-secondary h4"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next d-md-none" href="#modify_carousel" role="button" data-slide="next">
            <i class="fas fa-chevron-right text-secondary h4"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="text-center">
          <a href="designer_manage.php" class="btn btn-outline-logoColor">返回</a>
        </div>
      </div>
    </div>
  </div>
  <script>
    $(function() {
      $(".carousel").carousel({
        wrap: false
      });

      toggleCarouselControl()

      $('.carousel').on('slid.bs.carousel', function() {
        toggleCarouselControl()
      })

      function toggleCarouselControl() {
        if ($('.carousel-inner').children('.carousel-item').length == 1) {
          $('a.carousel-control-prev,a.carousel-control-next').addClass('d-none');
        } else {
          if ($('.carousel-item:first-child').hasClass('active')) {
            $('a.carousel-control-prev').addClass('d-none');
            $('a.carousel-control-next').removeClass('d-none');
          } else if ($('.carousel-item:last-child').hasClass('active')) {
            $('a.carousel-control-prev').removeClass('d-none');
            $('a.carousel-control-next').addClass('d-none');
          } else {
            $('a.carousel-control-prev,a.carousel-control-next').removeClass('d-none');
          }
        }
      }
    })
  </script>
  <?php include("template/footer.php"); ?>