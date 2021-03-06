<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb order</title>
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
<body data-no="6">
<?php include("template/header.php"); ?>
<div class="container-fluid">
    <div class="container">
        <div class="row mToTop">
        <!-- 左導覽 -->
            <?php include("template/leftbar.php"); ?>
        <!-- 右主欄 -->
            <div class="col-12 col-xl-10 px-0 px-xl-3">
                <div class="list-group flex-row align-items-center justify-content-around" role="tablist">
                    <a class="text-center col-4 bg-cloud p-4 orderTab" data-toggle="list" role="tab">全部</a>
                    <a class="text-center col-4 bg-cloud p-4 orderTab" data-toggle="list" role="tab">修改中</a>
                    <a class="text-center col-4 bg-cloud p-4 orderTab" data-toggle="list" role="tab">完成</a>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-stretch mt-1">
                    <div class="w-100 bg-cloud p-3 mb-1 rounded">
                        <ul class="d-flex justify-content-around align-items-center">
                            <li class="font-weight-bolder col-3 text-center">商品圖式</li> 
                            <li class="font-weight-bolder col-3 text-center">訂單編號</li> 
                            <li class="font-weight-bolder col-3 text-center">訂單狀態</li> 
                            <li class="font-weight-bolder col-3 text-center">訂單總額</li> 
                        </ul>
                        <ul class="d-flex justify-content-around align-items-center">
                            <img src="images/logo.svg" alt="" class="logoIcon col-3 text-center">
                            <a href="orderNum.php" class="col-3 text-center">xxxxxxxxxx</a> 
                            <li class="col-3 text-center">商品製作中</li>
                            <li class="col-3 text-center text-alert">NT$200</li>
                        </ul>
                        <div class="d-flex justify-content-around align-items-center px-2">
                            <a  href="logoDisplay.php" class="btn btn-outline-primary mx-1 py-2 col-4 text-center">查看檔案 or 檔案下載</a>
                            <!-- 查看檔案 or 檔案下載 的判斷依照 訂單狀態 ‘訂單完成’的才會出現檔案下載 -->
                            <a  href="quotation.php" class="btn btn-outline-logoColor-2 mx-1 py-2 col-4 text-center">報價單</a>
                            <input type="button" onclick="history.back()" value="返回" class="btn btn-outline-logoColor mx-1 py-2 col-4 text-center">
                        </div>
                        <div class="d-flex justify-content-center align-items-center mt-3 pt-3 border-top border-secondary">
                            <div class="d-flex flex-column align-items-center mx-3">
                                <img src="images/orderflowIcon/order.svg" alt="">
                                <div class="mt-3">訂單建立</div>
                                <div class="odflot text-alert"><?php echo date("Y-m-d"); ?></div>
                            </div>
                            <div class="d-flex flex-column align-items-center mx-3">
                                <img src="images/orderflowIcon/orderPay.svg" alt="">
                                <div class="mt-3">付款確認</div>
                                <div class="odflot text-alert"><?php echo date("Y-m-d"); ?></div>
                            </div>
                            <div class="d-flex flex-column align-items-center mx-3">
                                <img src="images/orderflowIcon/designing.svg" class="filter-gray" alt=""> <!-- 尚未進行到底流程 加上 .filter-gray -->
                                <div class="mt-3">製作中</div>
                                <div class="odflot text-alert"><?php echo date("Y-m-d"); ?></div>
                            </div>
                            <div class="d-flex flex-column align-items-center mx-3">
                                <img src="images/orderflowIcon/download.svg" class="filter-gray" alt=""> <!-- 尚未進行到底流程 加上 .filter-gray -->
                                <div class="mt-3">訂單完成</div>
                                <div class="odflot text-alert"><?php echo date("Y-m-d"); ?></div>
                            </div>
                        </div>
                        <form action="" method="post" class="mt-3 border-top border-secondary">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex my-3 align-items-center">修改項目</div>
                                <div class="list-group flex-row justify-content-end my-3" role="tablist">
                                    <a href="#modifyContent1" class="list-group-item rounded btn btn-outline-logoColor active ml-1" data-toggle="list">第一次</a>
                                    <a href="#modifyContent2" class="list-group-item rounded btn btn-outline-logoColor ml-1" data-toggle="list">第二次</a>
                                    <a href="#modifyContent3" class="list-group-item rounded btn btn-outline-logoColor disabled ml-1" data-toggle="list">第三次</a>
                                </div>
                            </div>
                            <div class="tab-content">
                                <textarea name="" class="tab-pane form-control active" id="modifyContent1" cols="30" rows="5">
1. 商品售出後進行必要性設計修改，修改內容包含：文字修改、顏色修改，修改次數三次為限。
2. 商品售出皆不接受退換貨服，付款前，請確認商品品項與付款金額 若有任何疑問，請勿付款，並請立即與客服確認。
                                </textarea>
                                <textarea name="" class="tab-pane form-control" id="modifyContent2" cols="30" rows="5">修改第二次</textarea>
                                <textarea name="" class="tab-pane form-control" id="modifyContent3" cols="30" rows="5">修改第三次</textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("template/footer.php"); ?>
<script src="js/allpage.js"></script>