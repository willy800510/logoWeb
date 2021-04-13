<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb modify</title>
    <?php
        include("template/bootstrapScript.php");
    ?>
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
<?php
    include("template/header.php");
?>
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
                        <span class="d-none d-md-flex align-items-end odflot pt-3">訂單遍號：<a href="#" class="text-primary">xxxxxxxxxx</a></span>
                        <div class="">
                            <!-- <a href="#" class="badge badge-secondary">第一次</a> -->
                            <!-- <a href="#" class="badge badge-light">第二次</a> -->
                            <a href="#" class="badge badge-orange">第<?php echo "三" ?>次</a>
                        </div>
                        <div class="d-none d-md-flex align-items-end">
                            <span class="odflot">Name<span class="mx-1">設計師</span></span>
                            <img src="images/icon/designer2.png" alt="">
                        </div>
                    </div>
                    <div class="d-flex d-md-none justify-content-between align-items-center px-3 py-1">
                        <span class="odflot pt-3">訂單遍號：<a href="#" class="text-primary">xxxxxxxxxx</a></span>
                        <div class="d-flex align-items-end">
                            <span class="odflot">Name<span class="mx-1">設計師</span></span>
                            <img src="images/icon/designer2.png" alt="">
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center px-3 py-1 border-top border-white">
                        <span class="odflot text-info">修改(2)完成</span>
                        <div class="odflot text-alert"><?php echo date("Y-m-d"); ?></div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-7 order-1 order-md-0 row form-group flex-column my-2 p-3 p-md-1">
                            <label for="company" class="mt-2"><span class="text-alert p-1">*</span>公司名稱</label>
                            <div type="text" class="form-control p-2" name="company" id="" placeholder="輸入您的公司名稱"><?php ?></div>
                            <label for="companySign" class="mt-2"><span class="text-alert p-1">*</span>公司口號/標語</label>
                            <div type="text" class="form-control p-2" name="companySign" id="" placeholder="輸入您的公司口號/標語"><?php ?></div>
                            <label for="companySign" class="mt-2"><span class="text-alert p-1">*</span>選擇顏色</label>
                            <div class="d-flex justify-content-start px-0">
                                <div class="badge badge-danger d-inline-block mr-2 chooColor"></div>
                                <div class="badge d-inline-block mr-2 chooColor" style="background-color: #<?php echo "38D3CA"?>;"></div>
                                <!-- <div class="badge d-inline-block mr-2 chooColor" style="background-color: #<?php?>;"></div> -->
                                <!-- <div class="badge d-inline-block mr-2 chooColor" style="background-color: #<?php?>;"></div> -->
                            </div>
                        </div>
                        <div class="col-6 col-md-3 order-0 order-md-1 p-5 p-md-4 p-lg-5 shadow m-0 m-md-5 mt-4 rounded bg-0_8">
                            <img src="images/AdobeStock_250566348 [轉換].svg" class="" alt="">
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <a href="index.php" class="btn btn-outline-orange px-4">首頁</a>
                        <a href="customizeCenter.php" class="btn btn-outline-orange">客製中心</a>
                        <a href="order.php" class="btn btn-outline-orange">我的訂單</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    include("template/footer.php");
?>