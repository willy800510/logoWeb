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
<?php include("template/header.php"); ?>
    <div class="container-fluid">
        <div class="container-sm clearfix mToTop">
            <div class="d-flex justify-content-between p-1">
                <img src="images/orderflowIcon/order.svg" alt="" class="bg-white rounded-circle">
                <img src="images/orderflowIcon/payCheck.svg" alt="" class="bg-white rounded-circle">
                <img src="images/orderflowIcon/designing.svg" alt="" class="bg-white rounded-circle">
            </div>
            <div class="row py-2">
                <form action="" class="col-12 flex-column col-md-9 px-0 px-md-1">
                    <div class="d-flex justify-content-between align-items-center p-3 border-bottom rounded-top bg-white">
                        <h5 class="mt-2">付款選項</h5>
                        <div>
                            <button type="submit" class="btn btn-outline-secondary">銀行轉帳</button>
                            <button type="submit" class="btn btn-danger">銀行卡/金融卡</button>
                        </div>
                    </div>  
                    <div class="p-3 bg-white">
                        <h5 class="mt-2">購買列表</h5>
                    </div>  
                    <div class="row justify-content-between align-items-center px-3 py-lg-3 border-bottom bg-white">
                        <img src="images/logo.svg" alt="" class="logoIcon col-2">
                        <div class="col-5">商品名稱</div>
                        <div class="col-5 text-right text-alert">金額 NT$200</div>
                    </div>    
                    <div class="row justify-content-between align-items-center px-3 py-lg-3 border-bottom bg-white rounded-bottom">
                        <img src="images/logo.svg" alt="" class="logoIcon col-2">
                        <div class="col-5">商品名稱</div>
                        <div class="col-5 text-right text-alert">金額 NT$200</div>
                    </div>
                    <div class="d-md-none bg-white p-3 border-bottom rounded-top">
                        <h5 class="mt-2">訂單總額</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="font-size:.5rem;" class="text-black-50">小記</span>
                            <span class="col-5 text-right text-alert">金額 NT$400</span>
                        </div>
                    </div> 
                    <div class="d-md-none bg-white text-center rounded-bottom">
                        <!-- <button type="submit" class="col-10 btn btn-pink my-1">確認訂單</button> -->
                        <a href="carts_confirm.php" class="col-10 btn btn-pink my-1">確認訂單</a>
                    </div>
                    <div class="d-md-none bg-white p-3 font-weight-lighter mt-1 border-top rounded">
                        <h5>交易注意事項</h5>
                        <p>◇商品售出皆不接受退換貨服務，付款前，請確認商品品項與付款金額，若有任何疑問，請勿付款，並請立即與客服確認。</p>
                        <p>◇本網站採用先收款後製作，請在七日內完成付款，若已超過付款期限，訂單將自動取消。若需再次交易，請重新下單。</p>
                    </div>
                </form>
                <div class="d-none d-md-flex flex-md-column col-md-3 px-0 px-md-1">
                    <div class="flex-grow-1 d-flex flex-md-column justify-content-between align-items-stretch p-3 bg-white border-bottom rounded-top">
                        <h5 class="">付款方式</h5>
                        <button type="submit" class="btn btn-outline-danger">銀行卡/金融卡</button>
                    </div>
                    <div class="flex-grow-1 d-flex flex-md-column justify-content-between align-items-stretch p-3 bg-white border-bottom">
                        <h5 class="">訂單總額</h5>
                        <span class="text-right text-alert">金額 NT$400</span>
                    </div>
                    <div class="d-flex flex-md-column justify-content-between align-items-stretch p-3 bg-white rounded-bottom">
                        <!-- <button type="submit" class="btn btn-pink">確認訂單</button> -->
                        <a href="carts_confirm.php" class="btn btn-pink">確認訂單</a>
                    </div>
                </div>
                <div class="d-none d-md-block col-12 px-0 px-md-1 font-weight-lighter">
                    <div class="p-3 bg-white rounded my-1">
                        <h5>交易注意事項</h5>
                        <p>◇商品售出皆不接受退換貨服務，付款前，請確認商品品項與付款金額，若有任何疑問，請勿付款，並請立即與客服確認。</p>
                        <p>◇本網站採用先收款後製作，請在七日內完成付款，若已超過付款期限，訂單將自動取消。若需再次交易，請重新下單。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    include("template/footer.php");
?>
