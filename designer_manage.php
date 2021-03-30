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
</head>
<body>
<?php include("template/header.php");?>
<div class="container-fluid">
    <div class="container-sm">
        <div class="d-flex flex-column bg-white justify-content-around" style="margin-top: 68px;">
            <div class="text-center my-3">
                <img src="images/icon/designer3.png" alt="" style="width:80px">
            </div>
            <div class="row my-3">
                <h6 class="col-3 text-center">商品</h6>
                <h6 class="col-3 text-center">訂單編號</h6>
                <h6 class="col-3 text-center">目前狀態</h6>
                <h6 class="col-3 text-center">動作</h6>
            </div>
            <div class="row border-top border-secondary">
                <div class="col-3 d-flex justify-content-center align-items-center "><img src="images/logo.svg" alt="" class="logoIcon p-2"></div>
                <div class="col-3 d-flex justify-content-center align-items-center ">
                    <a href="#" class="text-primary">xxxxxxxxxx</a>
                </div>
                <div class="col-3 d-flex justify-content-center align-items-center text-info">目前狀態</div>
                <div class="col-3 d-flex justify-content-center align-items-center ">
                    <a href="designer_upload.php" class="btn btn-outline-secondary disabled">上傳檔案</a>
                </div>
            </div>
            <div class="row border-top border-secondary">
                <div class="col-3 d-flex justify-content-center align-items-center "><img src="images/logo.svg" alt="" class="logoIcon p-2"></div>
                <div class="col-3 d-flex justify-content-center align-items-center ">
                    <a href="#" class="text-primary">xxxxxxxxxx</a>
                </div>
                <div class="col-3 d-flex justify-content-center align-items-center text-info">目前狀態</div>
                <div class="col-3 d-flex justify-content-center align-items-center ">
                    <a href="designer_upload.php" class="btn btn-outline-primary">查看修改</a>
                </div>
            </div>
            <div class="row border-top border-secondary">
                <div class="col-3 d-flex justify-content-center align-items-center "><img src="images/logo.svg" alt="" class="logoIcon p-2"></div>
                <div class="col-3 d-flex justify-content-center align-items-center ">
                    <a href="#" class="text-primary">xxxxxxxxxx</a>
                </div>
                <div class="col-3 d-flex justify-content-center align-items-center text-info">目前狀態</div>
                <div class="col-3 d-flex justify-content-center align-items-center ">
                    <a href="designer_upload.php" class="btn btn-outline-secondary disabled">上傳檔案</a>
                </div>
            </div>
            <div class="row border-top border-secondary">
                <div class="col-3 d-flex justify-content-center align-items-center "><img src="images/logo.svg" alt="" class="logoIcon p-2"></div>
                <div class="col-3 d-flex justify-content-center align-items-center ">
                    <a href="#" class="text-primary">xxxxxxxxxx</a>
                </div>
                <div class="col-3 d-flex justify-content-center align-items-center text-info">目前狀態</div>
                <div class="col-3 d-flex justify-content-center align-items-center ">
                    <a href="designer_upload.php" class="btn btn-outline-primary">上傳檔案</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("template/footer.php"); ?>