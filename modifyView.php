<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb modify</title>
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
<body data-no="5">
<?php include("template/header.php"); ?>
<div class="container-fluid">
    <div class="container">
        <div class="row mToTop">
        <!-- 左導覽 -->
            <?php include("template/leftbar.php"); ?>
        <!-- 右主欄 -->
            <div class="col-12 col-xl-10 px-0 px-xl-3">
                <div class="d-flex align-items-center justify-content-around bg-cloud p-4">
                    <span class="text-center">修改細項</span>
                </div>
                <form action="" class="bg-cloud my-1 rounded" id="modifyForm" method="">
                    <div class="d-flex justify-content-center justify-content-md-between align-items-center px-3 py-1">
                        <span class="d-none d-md-flex align-items-end odflot pt-3">訂單遍號：<a href="orderNum.php" class="text-primary" target="_blank">xxxxxxxxxx</a></span>
                        <div class="">
                            <!-- <a href="#" class="badge badge-secondary">第一次</a> -->
                            <!-- <a href="#" class="badge badge-light">第二次</a> -->
                            <a href="#" class="badge badge-logoColor">第<?php echo "三" ?>次</a>
                        </div>
                        <div class="d-none d-md-flex align-items-end">
                            <span class="odflot">Name<span class="mx-1">設計師</span></span>
                            <img src="images/icon/designer2.png" alt="">
                        </div>
                    </div>
                    <div class="d-flex d-md-none justify-content-between align-items-center px-3 py-1">
                        <span class="odflot pt-3">訂單遍號：<a href="orderNum.php" class="text-primary" target="_blank">xxxxxxxxxx</a></span>
                        <div class="d-flex align-items-end">
                            <span class="odflot">Name<span class="mx-1">設計師</span></span>
                            <img src="images/icon/designer2.png" alt="">
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center px-3 py-1 border-top border-white">
                        <span class="odflot text-logoColor-2">修改(2)完成</span>
                        <div class="odflot text-alert"><?php echo date("Y-m-d"); ?></div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-7 order-1 order-lg-0 row form-group flex-column my-2 p-3 p-lg-1">
                            <label for="company" class="mt-2">公司名稱</label>
                            <div type="text" class="form-control p-2" name="company" id="" placeholder="輸入您的公司名稱"><?php echo$_POST['company'] ?></div>
                            <label for="companySign" class="mt-2">公司口號/標語</label>
                            <div type="text" class="form-control p-2" name="companySign" id="" placeholder="輸入您的公司口號/標語"><?php echo$_POST['companySign'] ?></div>
                            <label for="companySign" class="mt-2">選擇顏色</label>
                            <div class="d-flex justify-content-start px-0">
                                <!-- <div class="badge badge-danger d-inline-block mr-2 chooColor"></div> -->
                                <div class="badge d-inline-block mr-2 chooColor" style="background-color: #<?php 
                                    $color = trim($_POST['companyColor'],"#");
                                    // if($color == ""){
                                    //     echo "FC9545"; //這裡是想取得原本圖檔的color，圖目前受到第97-98影響 會改變顏色
                                    // } else{
                                        echo $color;
                                    // } 
                                    ?>;">
                                </div>
                            </div>
                        </div>
                        <div id="pdlogo" class="col-6 col-md-4 col-lg-3 order-0 order-lg-1 p-5 p-lg-4 p-lg-5 shadow m-0 m-lg-5 mt-4 rounded bg-0_8">
                            <!-- <img src="images/logo5.svg" class="" alt=""> -->
                            <small class="text-alert"></small>
                            <?php require_once( 'images//logo5.svg.php' ); ?>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <a href="index.php" class="btn btn-outline-logoColor px-4">首頁</a>
                        <a href="customizeCenter.php" class="btn btn-outline-logoColor">客製中心</a>
                        <a href="order.php" class="btn btn-outline-logoColor">我的訂單</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("template/footer.php"); ?>
<script>
    // var logoColor = $('#pdlogo svg .cls-1').css('fill')
    // var color = $(".chooColor").css("background-color")
    // if(color == "rgba(0,0,0,0)"){
    //     $('#pdlogo svg .cls-1').css('fill');
    // }else{
    //     $('#pdlogo svg .cls-1').css('fill',color);
    // }
    // var color = $(".chooColor").css("background-color")
    // $('#pdlogo svg .cls-1').css('fill',color);
</script>
<script src="js/allpage.js"></script>