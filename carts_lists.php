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
    <?php include("template/materialDesign.php"); ?>
</head>
<body>
<?php include("template/header.php"); ?>
    <div class="container-fluid">
        <div class="container-sm clearfix mToTop">
        <!-- 訂單流程狀態 -->
            <div class="d-flex justify-content-between p-1 stepper">
                <img src="images/orderflowIcon/order.svg" alt="" class="bg-white rounded-circle">
                <img src="images/orderflowIcon/payCheck.svg" alt="" class="bg-white rounded-circle">
                <img src="images/orderflowIcon/designing.svg" alt="" class="bg-white rounded-circle">
            </div>
            <form action="carts_payPick.php" method="post" class="d-flex flex-column pb-3">
                <ul class="row bg-white align-items-center mt-1 mx-1 p-2 rounded">
                    <div class="col-1 text-center">
                        <input type="checkbox" name="Checkbox[]">
                    </div>
                    <img src="images/logo.svg" alt="" class="logoIcon col-2">
                    <div class="d-flex flex-column col-8 py-3">
                        <div class="d-flex justify-content-around">
                            <div class="text-center p-2">
                                <h6>商品規格</h6>
                                <li>商品製作中</li>
                            </div>
                            <div class="text-center p-2">
                                <h6>金額</h6>
                                <li>NT$200</li>
                            </div>
                            <div class="p-2 d-none d-md-block">
                                <h6 class="text-center">其他</h6>
                                <span class="font-weight-lighter text-black-50 text-center pt-3">備註說明:備註說明備註說明備註說明</span>
                            </div>
                        </div>
                        <span class="font-weight-lighter text-black-50 text-center pt-3 d-block d-md-none">備註說明:備註說明備註說明備註說明</span>
                    </div>
                    <button type="submit" class="btn col-1">
                        <!-- <i class="fas fa-times"></i> -->
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
                    </button>
                </ul>
                <ul class="row bg-white align-items-center mt-1 mx-1 p-2 rounded ">
                    <div class="col-1 text-center">
                        <input type="checkbox" name="Checkbox[]">
                    </div>
                    <img src="images/logo.svg" alt="" class="logoIcon col-2">
                    <div class="d-flex flex-column col-8 py-3">
                        <div class="d-flex justify-content-around">
                            <div class="text-center p-2">
                                <h6>商品規格</h6>
                                <li>商品製作中</li>
                            </div>
                            <div class="text-center p-2">
                                <h6>金額</h6>
                                <li>NT$200</li>
                            </div>
                            <div class="p-2 d-none d-md-block">
                                <h6 class="text-center">其他</h6>
                                <span class="font-weight-lighter text-black-50 text-center pt-3">備註說明:備註說明備註說明備註說明</span>
                            </div>
                        </div>
                        <span class="font-weight-lighter text-black-50 text-center pt-3 d-block d-md-none">備註說明:備註說明備註說明備註說明</span>
                    </div>
                    <button type="submit" class="btn col-1">
                        <!-- <i class="fas fa-times"></i> -->
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
                    </button>
                </ul>
                <div class="row bg-white align-items-center mt-1 mx-1 p-2 rounded">
                    <div class="col-1 text-center">
                        <input type="checkbox" name="checkAll" id="CheckAll">
                    </div>
                    <div class="col-2 px-0 text-center">
                        <label for="checkAll" class="mt-2">全部選取</label>
                    </div>
                    <button type="submit" class="btn btn-orange col-6 ml-auto py-2">前往付款</button>
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
            <div class="row pt-1 pb-3">
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 bg-cloud rounded text-center">
                        <a href="">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                       <button type="submit" class="btn btn-outline-orange mt-3">加入購物袋</button>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 bg-cloud rounded text-center">
                        <a href="">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                       <button type="submit" class="btn btn-outline-orange mt-3">加入購物袋</button>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 bg-cloud rounded text-center">
                        <a href="">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                       <button type="submit" class="btn btn-outline-orange mt-3">加入購物袋</button>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 bg-cloud rounded text-center">
                        <a href="">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                       <button type="submit" class="btn btn-outline-orange mt-3">加入購物袋</button>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 bg-cloud rounded text-center">
                        <a href="">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                       <button type="submit" class="btn btn-outline-orange mt-3">加入購物袋</button>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 bg-cloud rounded text-center">
                        <a href="">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                       <button type="submit" class="btn btn-outline-orange mt-3">加入購物袋</button>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 bg-cloud rounded text-center">
                        <a href="">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                       <button type="submit" class="btn btn-outline-orange mt-3">加入購物袋</button>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 p-1 lgdp">
                    <div class="d-block p-4 bg-cloud rounded text-center">
                        <a href="">
                            <img src="images/AdobeStock_250566348 [轉換].svg" alt="" width="137px" class="d-block m-auto">
                        </a>
                       <button type="submit" class="btn btn-outline-orange mt-3">加入購物袋</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include("template/footer.php"); ?>
<script>
$(document).ready(function(){
    if($("input[name='Checkbox[]']").prop("checked",true)){
        $("#CheckAll").click()
    }
    $("#CheckAll").click(function(){
        if($("#CheckAll").prop("checked")){
            $("input[name='Checkbox[]']").prop("checked",true);
        }else{
            $("input[name='Checkbox[]']").prop("checked",false);
        }
    })
})
</script> 