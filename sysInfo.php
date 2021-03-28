<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb system info</title>
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
</head>
<body>
<?php
    include("template/header.php");
?>
<div class="container-fluid">
    <div class="container">
        <div class="row" style="margin-top: 70px;">
        <!-- 左導覽 -->
            <?php include("template/leftbar.php"); ?>
        <!-- 右主欄 -->
            <div class="col-12 col-xl-10 px-0 px-xl-3">
                <div class="d-flex align-items-center justify-content-around bg-white p-4">
                    <span style="text-align:center;">全部</span>
                    <span style="text-align:center;">未讀</span>
                </div>
                <div class="d-flex flex-column mt-1">
                    <div class="d-flex bg-white mb-1 justify-content-around align-items-center p-5 rounded">
                        <img src="images/AdobeStock_250566348 [轉換].svg" width="60px" height="60px" alt="">
                        <span class="ml-4 ml-md-0">
                            <div>商品初稿完成</div>
                            <span class="text-black-50">
                                訂單<a href="orderNum.php" class="text-primary">xxxxxxxxxx</a>商品初稿已完成，請您查看
                            </span>
                            <div class="text-danger d-block d-lg-none"><?php echo date("Y-m-d"); ?></div>
                        </span>
                        <button class="btn btn-outline-info d-none d-md-flex">查看檔案</button>
                        <div class="text-danger d-none d-lg-block"><?php echo date("Y-m-d"); ?></div>
                    </div>
                    <button class="btn btn-info d-flex d-md-none p-3 mb-1 justify-content-end">查看檔案</button>
                    <div class="d-flex bg-white mb-1 justify-content-around align-items-center p-5 rounded">
                        <img src="images/AdobeStock_250566348 [轉換].svg" width="60px" height="60px" alt="">
                        <span class="ml-4 ml-md-0">
                            <div>商品初稿完成</div>
                            <span class="text-black-50">
                                訂單<a href="orderNum.php" class="text-primary">xxxxxxxxxx</a>商品初稿已完成，請您查看
                            </span>
                            <div class="text-danger d-block d-lg-none"><?php echo date("Y-m-d"); ?></div>
                        </span>
                        <button class="btn btn-outline-info d-none d-md-flex">查看檔案</button>
                        <div class="text-danger d-none d-lg-block"><?php echo date("Y-m-d"); ?></div>
                    </div>
                    <button class="btn btn-info d-flex d-md-none p-3 mb-1 justify-content-end">查看檔案</button>
                    <div class="d-flex bg-white mb-1 justify-content-around align-items-center p-5 rounded">
                        <img src="images/AdobeStock_250566348 [轉換].svg" width="60px" height="60px" alt="">
                        <span class="ml-4 ml-md-0">
                            <div>商品初稿完成</div>
                            <span class="text-black-50">
                                訂單<a href="orderNum.php" class="text-primary">xxxxxxxxxx</a>商品初稿已完成，請您查看
                            </span>
                            <div class="text-danger d-block d-lg-none"><?php echo date("Y-m-d"); ?></div>
                        </span>
                        <button class="btn btn-outline-info d-none d-md-flex">查看檔案</button>
                        <div class="text-danger d-none d-lg-block"><?php echo date("Y-m-d"); ?></div>
                    </div>
                    <button class="btn btn-info d-flex d-md-none p-3 mb-1 justify-content-end">查看檔案</button>
                    <div class="d-flex bg-white mb-1 justify-content-around align-items-center p-5 rounded">
                        <img src="images/AdobeStock_250566348 [轉換].svg" width="60px" height="60px" alt="">
                        <span class="ml-4 ml-md-0">
                            <div>商品初稿完成</div>
                            <span class="text-black-50">
                                訂單<a href="orderNum.php" class="text-primary">xxxxxxxxxx</a>商品初稿已完成，請您查看
                            </span>
                            <div class="text-danger d-block d-lg-none"><?php echo date("Y-m-d"); ?></div>
                        </span>
                        <button class="btn btn-outline-info d-none d-md-flex">查看檔案</button>
                        <div class="text-danger d-none d-lg-block"><?php echo date("Y-m-d"); ?></div>
                    </div>
                    <button class="btn btn-info d-flex d-md-none p-3 mb-1 justify-content-end">查看檔案</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include("template/footer.php");
?>