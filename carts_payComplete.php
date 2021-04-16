<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb carts</title>
    <?php
        include("template/bootstrapScript.php");
    ?>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/account.css">
    <?php include("template/materialDesign.php"); ?>
</head>
<body>
<?php
    include("template/header.php");
?>
    <div class="container-fluid">
        <div class="container-sm clearfix mToTop">
            <div class="d-flex justify-content-between p-1 stepper step-final">
                <a href="carts_lists.php"><img src="images/orderflowIcon/order.svg" alt="" class="bg-white rounded-circle"></a>
                <a href="carts_payPick.php"><img src="images/orderflowIcon/payCheck.svg" alt="" class="bg-white rounded-circle"></a>
                <a href=""><img src="images/orderflowIcon/designing.svg" alt="" class="bg-white rounded-circle"></a>
            </div>
            <div class="row py-2">
                <form action="" class="col-12 flex-column px-0 px-md-1">
                    <div class="bg-white rounded text-center py-3 my-1">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 0 24 24" width="48px" fill="#7DE290" class="m-3"><path d="M0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"/><path d="M16.59 7.58L10 14.17l-3.59-3.58L5 12l5 5 8-8zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/></svg>
                        <h3>付款成功</h3>
                    </div>
                    <div class="row justify-content-between align-items-center p-3 bg-white rounded-top">
                        <h6 class="mt-2 col-3 col-md-2 text-center">商品資訊</h6>
                        <h6 class="mt-2 col-3 col-md-3 text-center">商品規格</h6>
                        <h6 class="mt-2 col-3 col-md-3 text-center">金額</h6>
                        <h6 class="mt-2 col-3 col-md-4 text-center">訂單編號</h6>
                    </div>  
                    <div class="row justify-content-between align-items-center p-3 border-bottom bg-white">
                        <img src="images/logo.svg" alt="" class="logoIcon col-3 col-md-2">
                        <div class="col-3 col-md-3 text-center">商品名稱</div>
                        <div class="col-3 col-md-3 text-center">NT$200</div>
                        <a href="orderNum.php" class="col-3 col-md-4 text-center">a$bcxxx123</a>
                        
                    </div>    
                    <div class="row justify-content-between align-items-center p-3 border-bottom bg-white">
                        <img src="images/logo.svg" alt="" class="logoIcon col-3 col-md-2">
                        <div class="col-3 col-md-3 text-center">商品名稱</div>
                        <div class="col-3 col-md-3 text-center">NT$200</div>
                        <a href="orderNum.php" class="col-3 col-md-4 text-center">a$bcxxx123</a>
                    </div>
                    <div class="bg-white p-3 font-weight-normal my-1 border-top rounded text-alert">
                        <span>◇付款成功後，網站後台人員將為您聯繫該商標商品之設計師，與您溝通討論商標需要進行的必要設計修改。
                        <br>◇務必確認【個人資訊】已經填妥相關聯絡資訊，我們會儘快與您聯繫</span>
                    </div> 
                    <div class="bg-white text-center rounded p-3">
                        <a href="index.php" class="btn btn-outline-logoColor my-1 col-3">返回首頁</a>
                        <a href="modifyAdd.php" class="btn btn-logoColor my-1 col-3">客製修改</a>
                        <a href="order.php" class="btn btn-logoColor my-1 col-3">查看訂單</a>
                    </div>
                    <div class="bg-white p-3 font-weight-lighter mt-1 border-top rounded">
                        <h6>交易注意事項</h6>
                        <p>◇商品售出皆不接受退換貨服務，付款前，請確認商品品項與付款金額，若有任何疑問，請勿付款，並請立即與客服確認。</p>
                        <p>◇本網站採用先收款後製作，請在七日內完成付款，若已超過付款期限，訂單將自動取消。若需再次交易，請重新下單。</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include("template/footer.php"); ?>
<script src="js/allpage.js"></script>
