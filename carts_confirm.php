<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb carts</title>
    <?php include("template/bootstrapScript.php"); ?>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/account.css">
    <?php include("template/materialDesign.php"); ?>
</head>
<body>
<?php include("template/header.php");?>
    <div class="container-fluid">
        <div class="container-sm clearfix mToTop">
            <div class="d-flex justify-content-between p-1 stepper step-half">
                <img src="images/orderflowIcon/order.svg" alt="" class="bg-white rounded-circle">
                <img src="images/orderflowIcon/payCheck.svg" alt="" class="bg-white rounded-circle">
                <img src="images/orderflowIcon/designing.svg" alt="" class="bg-white rounded-circle">
            </div>
            <div class="row py-2">
                <form action="" class="col-12 flex-column px-0 px-md-1"> 
                    <div class="row justify-content-between align-items-center p-3 bg-white rounded-top">
                        <h6 class="mt-2 col-3 col-md-2 text-center">商品資訊</h6>
                        <h6 class="mt-2 col-3 col-md-3 text-center">商品規格</h6>
                        <h6 class="mt-2 col-3 col-md-3 text-center">金額</h6>
                        <h6 class="mt-2 col-3 col-md-4 text-center">其他</h6>
                    </div>  
                    <div class="row justify-content-between align-items-center p-3 border-bottom bg-white">
                        <img src="images/logo.svg" alt="" class="logoIcon col-3 col-md-2">
                        <div class="col-3 col-md-3 text-center">商品名稱</div>
                        <div class="col-3 col-md-3 text-center">NT$200</div>
                        <div class="col-3 col-md-4 text-center">備註說明</div>
                        
                    </div>    
                    <div class="row justify-content-between align-items-center p-3 border-bottom bg-white">
                        <img src="images/logo.svg" alt="" class="logoIcon col-3 col-md-2">
                        <div class="col-3 col-md-3 text-center">商品名稱</div>
                        <div class="col-3 col-md-3 text-center">NT$200</div>
                        <div class="col-3 col-md-4 text-center">其他備註</div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center p-3 border-bottom bg-white">
                        <h6 class="mt-2 col-4 text-center">付款資訊</h6>
                        <button class="btn-outline-logoColor py-2 rounded col-4 text-center"><?php echo $_POST['payType']; ?></button>
                        <div class="px-3 col-4 text-center text-alert">總額 NT$400</div>
                    </div>  
                    <div class="bg-white text-center rounded-bottom p-3">
                        <a href="carts_payPick.php" class="btn btn-outline-logoColor my-1 col-5">返回修改</a>
                        <a href="carts_payComplete.php" class="btn btn-logoColor my-1 col-5">確認訂單</a>
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
<?php
    include("template/footer.php");
?>
