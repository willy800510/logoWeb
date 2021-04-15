<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb system info</title>
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
<?php include("template/header-logoCenter.php"); ?>
<div class="container-fluid">
    <div class="container">
        <div class="row mToTop">
        <!-- 左導覽 -->
            <?php include("template/leftbar.php"); ?>
        <!-- 右主欄 -->
            <div class="col-12 col-xl-10 px-0 px-xl-3">
                <div class="list-group flex-row align-items-center justify-content-around" role="tablist">
                    <a class="list-group-item text-center col-6 bg-cloud p-4 active" data-toggle="list" role="tab">全部</a>
                    <a class="list-group-item text-center col-6 bg-cloud p-4" data-toggle="list" role="tab">未讀</a>
                </div>
                <div class="d-flex flex-column mt-1">
                    <div class="d-flex bg-cloud mb-1 justify-content-around align-items-center p-5 rounded">
                        <img src="images/AdobeStock_250566348 [轉換].svg" width="60px" height="60px" alt="">
                        <span class="ml-4 ml-md-0">
                            <div>商品初稿完成</div>
                            <span class="text-black-50">
                                訂單<a href="orderNum.php" class="text-primary">xxxxxxxxxx</a>商品初稿已完成，請您查看
                            </span>
                            <div class="text-alert d-block d-lg-none"><?php echo date("Y-m-d"); ?></div>
                        </span>
                        <a href="logoDisplay.php" class="btn btn-outline-logoColor d-none d-md-flex">查看檔案</a>
                        <div class="text-alert d-none d-lg-block"><?php echo date("Y-m-d"); ?></div>
                    </div>
                    <a href="logoDisplay.php" class="btn btn-logoColor d-flex d-md-none p-2 mb-1 justify-content-end">查看檔案</a>
                    <div class="d-flex bg-cloud mb-1 justify-content-around align-items-center p-5 rounded">
                        <img src="images/AdobeStock_250566348 [轉換].svg" width="60px" height="60px" alt="">
                        <span class="ml-4 ml-md-0">
                            <div>商品初稿完成</div>
                            <span class="text-black-50">
                                訂單<a href="orderNum.php" class="text-primary">xxxxxxxxxx</a>商品初稿已完成，請您查看
                            </span>
                            <div class="text-alert d-block d-lg-none"><?php echo date("Y-m-d"); ?></div>
                        </span>
                        <a href="logoDisplay.php" class="btn btn-outline-logoColor d-none d-md-flex">查看檔案</a>
                        <div class="text-alert d-none d-lg-block"><?php echo date("Y-m-d"); ?></div>
                    </div>
                    <a href="logoDisplay.php" class="btn btn-logoColor d-flex d-md-none p-2 mb-1 justify-content-end">查看檔案</a>
                    <div class="d-flex bg-cloud mb-1 justify-content-around align-items-center p-5 rounded">
                        <img src="images/AdobeStock_250566348 [轉換].svg" width="60px" height="60px" alt="">
                        <span class="ml-4 ml-md-0">
                            <div>商品初稿完成</div>
                            <span class="text-black-50">
                                訂單<a href="orderNum.php" class="text-primary">xxxxxxxxxx</a>商品初稿已完成，請您查看
                            </span>
                            <div class="text-alert d-block d-lg-none"><?php echo date("Y-m-d"); ?></div>
                        </span>
                        <a href="logoDisplay.php" class="btn btn-outline-logoColor d-none d-md-flex">查看檔案</a>
                        <div class="text-alert d-none d-lg-block"><?php echo date("Y-m-d"); ?></div>
                    </div>
                    <a href="logoDisplay.php" class="btn btn-logoColor d-flex d-md-none p-2 mb-1 justify-content-end">查看檔案</a>
                    <div class="d-flex bg-cloud mb-1 justify-content-around align-items-center p-5 rounded">
                        <img src="images/AdobeStock_250566348 [轉換].svg" width="60px" height="60px" alt="">
                        <span class="ml-4 ml-md-0">
                            <div>商品初稿完成</div>
                            <span class="text-black-50">
                                訂單<a href="orderNum.php" class="text-primary">xxxxxxxxxx</a>商品初稿已完成，請您查看
                            </span>
                            <div class="text-alert d-block d-lg-none"><?php echo date("Y-m-d"); ?></div>
                        </span>
                        <a href="logoDisplay.php" class="btn btn-outline-logoColor d-none d-md-flex">查看檔案</a>
                        <div class="text-alert d-none d-lg-block"><?php echo date("Y-m-d"); ?></div>
                    </div>
                    <a href="logoDisplay.php" class="btn btn-logoColor d-flex d-md-none p-2 mb-1 justify-content-end">查看檔案</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("template/footer.php"); ?>