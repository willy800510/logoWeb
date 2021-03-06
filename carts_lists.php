<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb carts</title>
    <?php include("template/bootstrapScript.php"); ?>
    <link rel="stylesheet" href="css/common.css?<?php echo time();?>">
    <link rel="stylesheet" href="css/header.css?<?php echo time();?>">
    <link rel="stylesheet" href="css/index.css?<?php echo time();?>">
    <link rel="stylesheet" href="css/banner.css?<?php echo time();?>">
    <link rel="stylesheet" href="css/footer.css?<?php echo time();?>">
    <link rel="stylesheet" href="css/account.css?<?php echo time();?>">
    <link rel="stylesheet" href="css/carousel.css">
    <?php include("template/materialDesign.php"); ?>
</head>
<body>
<?php include("template/header.php"); ?>
<?php include("template/logoDisplayT.php"); ?>
    <div class="container-fluid">
        <div class="container-sm clearfix mToTop">
        <!-- 訂單流程狀態 -->
            <div class="d-flex justify-content-between p-1 stepper">
                <a href="carts_lists.php"><img src="images/orderflowIcon/order.svg" alt="" class="bg-white rounded-circle"></a>
                <img src="images/orderflowIcon/payCheck.svg" alt="" class="bg-white rounded-circle filter-gray">
                <img src="images/orderflowIcon/designing.svg" alt="" class="bg-white rounded-circle filter-gray">
            </div>
            <form id="cartLists" action="carts_payPick.php" method="post" class="d-flex flex-column pb-3">
                <ul class="row bg-white align-items-center mt-1 mx-1 p-2 rounded">
                    <div class="col-1 text-center px-0">
                        <input type="checkbox" name="Checkbox[]">
                    </div>
                    <img src="<?php echo 'images/logo.svg'?>" alt="" class="logoIcon col-2 px-1">
                    <input type="hidden" name="productImg" value="<?php echo 'images/logo.svg'?>">
                    <div class="d-flex flex-column col-8 py-3">
                        <div class="d-flex justify-content-around">
                            <div class="text-center p-2">
                                <h6>商品規格</h6>
                                <li>png,ai</li>
                            </div>
                            <div class="text-center p-2">
                                <h6>金額</h6>
                                <li >NT$<?php echo'200'?></li>
                                <input type="hidden" name="price" value="<?php echo'200' ?>" >
                            </div>
                            <div class="p-2 d-none d-md-block">
                                <h6 class="text-center">其他</h6>
                                <span class="font-weight-lighter text-black-50 text-center pt-3">備註說明:備註說明備註說明備註說明</span>
                            </div>
                        </div>
                        <span class="font-weight-lighter text-black-50 text-center pt-3 d-block d-md-none">備註說明:備註說明備註說明備註說明</span>
                    </div>
                    <span class="btn col-1 px-0 clear">
                        <!-- <i class="fas fa-times"></i> -->
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
                    </span>
                </ul>
                <ul class="row bg-white align-items-center mt-1 mx-1 p-2 rounded">
                    <div class="col-1 text-center px-0">
                        <input type="checkbox" name="Checkbox[]">
                    </div>
                    <img src="<?php echo 'images/logo2.svg'?>" alt="" class="logoIcon col-2 px-1">
                    <input type="hidden" name="productImg" value="<?php echo 'images/logo2.svg'?>">
                    <div class="d-flex flex-column col-8 py-3">
                        <div class="d-flex justify-content-around">
                            <div class="text-center p-2">
                                <h6>商品規格</h6>
                                <li>png,ai</li>
                            </div>
                            <div class="text-center p-2">
                                <h6>金額</h6>
                                <li >NT$<?php echo'200'?></li>
                                <input type="hidden" name="price" value="<?php echo'200' ?>" >
                            </div>
                            <div class="p-2 d-none d-md-block">
                                <h6 class="text-center">其他</h6>
                                <span class="font-weight-lighter text-black-50 text-center pt-3">備註說明:備註說明備註說明備註說明</span>
                            </div>
                        </div>
                        <span class="font-weight-lighter text-black-50 text-center pt-3 d-block d-md-none">備註說明:備註說明備註說明備註說明</span>
                    </div>
                    <span class="btn col-1 px-0 clear">
                        <!-- <i class="fas fa-times"></i> -->
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
                    </span>
                </ul>
                <div class="row bg-white align-items-center mt-1 mx-1 p-2 rounded">
                    <div class="col-1 px-0 text-center">
                        <input type="checkbox" name="checkAll" id="CheckAll">
                    </div>
                    <div class="col-3 px-0 col-md-2 text-center text-md-left">
                        <label for="checkAll" class="mt-2">全部選取</label>
                    </div>
                    <button type="submit" class="btn btn-logoColor col-6 col-md-8 ml-auto py-2">前往付款</button>
                </div>
                <div class="bg-white p-3 font-weight-lighter mt-1 mx-1 rounded">
                    <h6>交易注意事項</h6>
                    <p>◇商品售出皆不接受退換貨服務，付款前，請確認商品品項與付款金額，若有任何疑問，請勿付款，並請立即與客服確認。</p>
                    <p>◇本網站採用先收款後製作，請在七日內完成付款，若已超過付款期限，訂單將自動取消。若需再次交易，請重新下單。</p>
                </div>
            </form>
        <!-- 收藏商品 -->
            <div class="d-flex justify-content-between overflow-hidden">
                <a href="#" class="p-1">我的收藏</a>
            </div>
            <div class="row pt-1 pb-3" id="recom-lists">
                <div class="col-6 col-md-4 col-lg-3 p-1 reco-logo">
                    <div class="d-flex flex-column justify-content-between p-3 bg-cloud rounded logoDpSm lgdp">
                        <a href="" class="d-inline-block m-auto pt-3" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/logo.svg" alt="">
                        </a>
                       <button type="submit" class="btn btn-outline-logoColor mt-3 addcarts">加入購物袋</button>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 reco-logo">
                    <div class="d-flex flex-column justify-content-between p-3 bg-cloud rounded logoDpSm lgdp">
                        <a href="" class="d-inline-block m-auto pt-3" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/logo1.svg" alt="">
                        </a>
                       <button type="submit" class="btn btn-outline-logoColor mt-3 addcarts">加入購物袋</button>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 reco-logo">
                    <div class="d-flex flex-column justify-content-between p-3 bg-cloud rounded logoDpSm lgdp">
                        <a href="" class="d-inline-block m-auto pt-3" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/logo2.svg" alt="">
                        </a>
                       <button type="submit" class="btn btn-outline-logoColor mt-3 addcarts">加入購物袋</button>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 reco-logo">
                    <div class="d-flex flex-column justify-content-between p-3 bg-cloud rounded logoDpSm lgdp">
                        <a href="" class="d-inline-block m-auto pt-3" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/logo3.svg" alt="">
                        </a>
                       <button type="submit" class="btn btn-outline-logoColor mt-3 addcarts">加入購物袋</button>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 reco-logo">
                    <div class="d-flex flex-column justify-content-between p-3 bg-cloud rounded logoDpSm lgdp">
                        <a href="" class="d-inline-block m-auto pt-3" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/logo4.svg" alt="">
                        </a>
                       <button type="submit" class="btn btn-outline-logoColor mt-3 addcarts">加入購物袋</button>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 reco-logo">
                    <div class="d-flex flex-column justify-content-between p-3 bg-cloud rounded logoDpSm lgdp">
                        <a href="" class="d-inline-block m-auto pt-3" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/logo5.svg" alt="">
                        </a>
                       <button type="submit" class="btn btn-outline-logoColor mt-3 addcarts">加入購物袋</button>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 reco-logo">
                    <div class="d-flex flex-column justify-content-between p-3 bg-cloud rounded logoDpSm lgdp">
                        <a href="" class="d-inline-block m-auto pt-3" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/logo6.svg" alt="">
                        </a>
                       <button type="submit" class="btn btn-outline-logoColor mt-3 addcarts">加入購物袋</button>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 reco-logo">
                    <div class="d-flex flex-column justify-content-between p-3 bg-cloud rounded logoDpSm lgdp">
                        <a href="" class="d-inline-block m-auto pt-3" data-toggle="modal" data-target="#logoDisplay">
                            <img src="images/logo7.svg" alt="">
                        </a>
                       <button type="submit" class="btn btn-outline-logoColor mt-3 addcarts">加入購物袋</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include("template/footer.php"); ?>
<script src="js/allpage.js"></script>
<script src="js/carts.js"></script>