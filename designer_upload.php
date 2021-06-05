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
  <script src="js/logoUpload.js"></script>
</head>

<body>
  <?php include("template/header.php"); ?>

  <div class="container-fluid designer-content mToTop">
    <div class="container-sm pb-3 pb-xl-1">
      <h5 class="position-fixed fixed-top page-title">訂單管理</h5>
      <div class="bg-white px-3 px-sm-4 px-lg-5 pb-4 pb-lg-5">
        <div class="row align-items-end border-bottom border-dark py-3 mb-2 mb-md-5">
          <!-- 連結到這個訂單的details頁 -->
          <p class="col-4 m-0">訂單編號：<a href="designer_details.php" class="text-primary">xxxxxxxxxx</a></p>
          <p class="col-4 h4 text-center align-self-start align-self-lg-auto m-0 p-0">第二次</p>
          <div class="col-4 text-right">
            <img src="images/icon/designer3.png" alt="" style="width:80px">
          </div>
        </div>
        <div class="row p-2">
          <div class="row col-lg-8 offset-lg-2 uploaded">
            <h6 class="col-12 text-bold mb-2">已上傳的檔案</h6>
            <!-- 如果有已上傳過的檔案，顯示以下部分(有圖片和ai檔兩種) -->
            <div class="col-6 col-sm-4 p-2 upload-info">
              <div class="position-relative text-center border border-secondary rounded p-2 uploadDbItems">
                <img src="images/logo5_changeColor.svg" class="img-thumbnail shadow-sm border-0 upload-img" alt="">
                <button type="button" class="btn btn-danger delDbBtn" data-db-id="5">刪除</button>
              </div>
              <div class="shadow-sm p-1 p-md-3 mt-2 fileName" id="a">truckLogo.png</div>
            </div>
            <div class="col-6 col-sm-4 p-2 upload-info d-flex flex-column">
              <div class="position-relative text-center border border-secondary rounded p-2 flex-grow-1 d-flex flex-wrap justify-content-center align-content-center uploadDbItems">
                <i class="far fa-file-alt fa-3x text-secondary my-3 my-sm-4 my-md-5"></i>
                <button type="button" class="btn btn-danger delDbBtn" data-db-id="6">刪除</button>
              </div>
              <div class="shadow-sm p-1 p-md-3 mt-2 fileName">truckLogo.ai</div>
            </div>
            <!-- 如果有已上傳過的檔案 end -->
          </div>

          <form action="#" method="POST" enctype="multipart/form-data" class="col-12 col-lg-8 offset-lg-2 d-flex flex-wrap justify-content-center align-content-center text-center p-2 p-sm-4 my-4 upload-wrapper">
            <input type="file" multiple="multiple" id="upload" name="upload[]" accept="image/png,.ai" />

            <div id="fileInfo" class="col-12 px-0 mb-3" style="pointer-events: none;">
              <img src="images/upload cloud.png" alt="">
            </div>
            <div>
              <p>拖曳檔案　or　<span class="btn align-baseline tag">瀏覽檔案</span></p>
              <p>上傳格式 .png /. ai</p>
            </div>

            <div class="col-12 text-center">
              <input type="submit" value="確認上傳" class="btn btn-logoColor d-none">
            </div>
          </form>
          <div class="col-12 text-center">
            <button type="button" class="btn btn-outline-logoColor mr-3 backBtn" onclick="history.back()">返回</button>
          </div>
        </div>

      </div>
    </div>
  </div>

  <?php include("template/footer.php"); ?>
  <script>
    $(function() {
      noUploadMsg();

      $('.delDbBtn').click(
        function(e) {
          var item = $(this).parents('.upload-info');
          var imgId = $(this).data('db-id'),
            imgName = item.find('.fileName').text();

          if (confirm('是否刪除 ' + imgName + ' ？')) {
            $.ajax({
              url: 'test_api/delLogo.php',
              type: 'post',
              data: {
                'imgId': imgId
              },
              success: function(result) {
                console.log(result);
                if (result == 1) {
                  item.remove();
                  noUploadMsg();
                } else {
                  alert('刪除失敗!');
                }
              },
              error: function() {
                alert('發生錯誤!');
              }
            })
          }
        })
    })

    function noUploadMsg() {
      if ($('.upload-info').length == 0) {
        $('.uploaded').append('<p class="col-12 small text-secondary text-center">尚無已上傳的檔案</p>');
        console.log($('.uploaded'));
      }
    }
  </script>