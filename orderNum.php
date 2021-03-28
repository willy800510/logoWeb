<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb order</title>
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
            <div class="col-auto col-xl-10 px-0 px-xl-3">
                <div class="d-flex align-items-center justify-content-around bg-white p-4">
                    <span style="width: 305px; text-align:center;">全部</span>
                    <span style="width: 305px; text-align:center;">修改中</span>
                    <span style="width: 305px; text-align:center;">完成</span>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-stretch mt-1">
                    <div class="order bg-white p-3 mb-1">
                        <ul class="d-flex justify-content-around align-items-center">
                            <li class="font-weight-bolder">商品圖式</li> 
                            <li class="font-weight-bolder">訂單編號</li> 
                            <li class="font-weight-bolder">訂單狀態</li> 
                            <li class="font-weight-bolder">訂單總額</li> 
                        </ul>
                        <ul class="d-flex justify-content-around align-items-center">
                            <img src="images/logo.svg" alt="" class="logoIcon">
                            <a href="#">xxxxxxxxxx</a> 
                            <li>商品製作中</li>
                            <li>NT$200</li>
                        </ul>
                        <div class="d-flex justify-content-center align-items-center mt-3 pt-3 border-top border-secondary">
                            <div class="d-flex flex-column align-items-center mx-3">
                                <img src="images/orderflowIcon/order.svg" alt="">
                                <div class="mt-3">訂單建立</div>
                                <div class="odflot text-danger"><?php echo date("Y-m-d"); ?></div>
                            </div>
                            <div class="d-flex flex-column align-items-center mx-3">
                                <img src="images/orderflowIcon/orderPay.svg" alt="">
                                <div class="mt-3">付款確認</div>
                                <div class="odflot text-danger"><?php echo date("Y-m-d"); ?></div>
                            </div>
                            <div class="d-flex flex-column align-items-center mx-3">
                                <img src="images/orderflowIcon/designing.svg" alt="">
                                <div class="mt-3">製作中</div>
                                <div class="odflot text-danger"><?php echo date("Y-m-d"); ?></div>
                            </div>
                            <div class="d-flex flex-column align-items-center mx-3">
                                <img src="images/orderflowIcon/download.svg" alt="">
                                <div class="mt-3">訂單完成</div>
                                <div class="odflot text-danger"><?php echo date("Y-m-d"); ?></div>
                            </div>
                        </div>
                        <div class="mt-3 pt-3 border-top border-secondary text-center">
                            <a href="#" class="btn btn-outline-primary">下載報價單</a>
                            <a href="order.php" class="btn btn-outline-danger px-4">返回</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include("template/footer.php");
?>