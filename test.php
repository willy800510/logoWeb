<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb Help</title>
    <?php
        include("template/bootstrapScript.php");
        // include("template/materialDesign.php");
    ?>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/leftbar.css">
    <link rel="stylesheet" href="css/account.css">
    <!-- <link rel="stylesheet" href="css/material-icon.css"> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<?php include("template/header.php"); ?>
<div class="container-fluid">
    <div class="container-sm">
        <div class="row" style="padding-top: 70px;">
            <!-- 左導覽 -->
            <?php include("template/leftbar_help.php"); ?>
            <div class="d-block d-xl-none col-12 col-xl-10 px-0 px-xl-3">
                <div class="card">

                </div>
            </div>
            <!-- 大於xl-右導覽 -->
            <div class="d-none d-xl-block col-xl-10 px-0 px-xl-3">
                <div class="accordion" id="accordionHelp">
                    <div class="card bg-transparent border-0 collapse show" id="about" data-parent="#accordionHelp">
                        <div class="d-flex align-items-center justify-content-around bg-white p-4">
                            <span class="text-center">關於品牌</span>
                        </div>
                        <div class="bg-white my-1 border-0 rounded" style="min-height:400px;">
                            <div class="card-body">
                                <h5 class="card-title bg-brown p-2">品牌故事</h5>
                                <p class="card-text p-2">匯集眾多設計師的作品，提供多元化、快速的商標購買。</p>
                                <h5 class="card-title bg-brown p-2">商品內容</h5>
                                <p class="card-text p-2">含跨眾多領域的商標設計作品，付款購買後就能直接進行修改，獲得屬於您個人的商標作品。</p>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-transparent border-0 collapse" id="howToBuy" data-parent="#accordionHelp">
                        <div class="d-flex align-items-center justify-content-around bg-white p-4">
                            <span class="text-center">如何購物</span>
                        </div>
                        <div class="bg-white my-1 border-0 rounded" style="min-height:400px;">
                            <div class="card-body">
                                <h5 class="card-title bg-brown p-2">品牌故事</h5>
                                <p class="card-text p-2">匯集眾多設計師的作品，提供多元化、快速的商標購買。</p>
                                <h5 class="card-title bg-brown p-2">商品內容2</h5>
                                <p class="card-text p-2">含跨眾多領域的商標設計作品，付款購買後就能直接進行修改，獲得屬於您個人的商標作品。</p>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-transparent border-0 collapse" id="tradeQues" data-parent="#accordionHelp">
                        <div class="d-flex align-items-center justify-content-around bg-white p-4">
                            <span class="text-center">交易問題</span>
                        </div>
                        <div class="bg-white my-1 border-0 rounded" style="min-height:400px;">
                            <div class="card-body">
                                <h5 class="card-title bg-brown p-2">交易須知</h5>
                                <ol class="list-group list-group-flush list-group-numbered pb-2">
                                    <li class="list-group-item px-2">付款前，請確認下單商品內容、付款帳號、付款金額，若有任何疑問，請勿付款，並請立即來信客服確認，以免受騙。</li>
                                    <li class="list-group-item px-2">本網站採用先收款後製作，請在七日內完成付款，若已超過付款期限，訂單將自動取消。若需再次交易，請重新下單。</li>
                                    <li class="list-group-item px-2">本網站提供之定價及報價，均未含營業稅，正確費用需於下單後，依系統發出之商品報及價Email為準。</li>
                                </ol>
                                <h5 class="card-title bg-brown p-2">如何知道付款成功</h5>
                                <p class="card-text p-2">請至網站右上角點選「會員中心」→「我的訂單」，查看訂單是否完成付款。</p>
                                <h5 class="card-title bg-brown p-2">付款方式</h5>
                                <ol class="list-group list-group-flush list-group-numbered pb-2">
                                    <h5 class="px-2">信用卡付款：</h5>
                                    <li class="list-group-item px-2">本網站與XX銀行合作，當確定付款時，將開啟信用卡付款頁面，填入正確卡片資料即可，逾時匯款，系統將無法接受信用卡付款。</li>
                                    <li class="list-group-item px-2">本網站採用先付款後製作，請在收到付款通知後七日內完成付款，過付款期限，訂單將自動取消，若需再次交易，請重新下單付款。</li>
                                    <br>
                                    <h5 class="px-2">ATM付款：</h5>
                                    <li class="list-group-item px-2">本網站與XX銀行合作，點選ATM轉帳後，每筆訂單將產生不同的銀行匯款帳號，請於七日內完成匯款，繳款金額不符或逾期匯款，銀行將不接受匯款。</li>
                                    <li class="list-group-item px-2">本網站採用先付款後製作，請在收到付款通知後七日內完成付款，過付款期限，訂單將自動取消，若需再次交易，請重新下單付款。</li>
                                    <span class="text-pink p-2">若有其他付款問題，請至客服信箱詢問，將有客服專人回覆。</span>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-transparent border-0 collapse" id="odrQues" data-parent="#accordionHelp">
                        <div class="d-flex align-items-center justify-content-around bg-white p-4">
                            <span class="text-center">訂單問題</span>
                        </div>
                        <div class="bg-white my-1 border-0 rounded" style="min-height:400px;">
                            <div class="card-body">
                                <h5 class="card-title bg-brown p-2">如何查看訂單?</h5>
                                <p class="card-text p-2">在網站右上角點選「會員中心」→「我的訂單」→「全部訂單」，即可進入頁面查看到所有訂單資訊。</p>
                                <h5 class="card-title bg-brown p-2">如何取消訂單?</h5>
                                <p class="card-text p-2">在我的訂單中，選擇欲取消的訂單，按下「取消訂單」。<br>*提醒：訂單一旦付款完成，就無法取消訂單。</p>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-transparent border-0 collapse" id="domOvertrade" data-parent="#accordionHelp">
                        <div class="d-flex align-items-center justify-content-around bg-white p-4">
                            <span class="text-center">國內/外交易</span>
                        </div>
                        <div class="bg-white my-1 border-0 rounded" style="min-height:400px;">
                            <div class="card-body">
                                <h5 class="card-title bg-brown p-2">國內/外交易須知</h5>
                                <p class="card-text p-2">國外交易時，匯率轉換可能會產生匯差，您的發卡銀行也可能向您收取海外交易手續費。</p>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-transparent border-0 collapse" id="mbNotice" data-parent="#accordionHelp">
                        <div class="d-flex align-items-center justify-content-around bg-white p-4">
                            <span class="text-center">會員須知</span>
                        </div>
                        <div class="bg-white my-1 border-0 rounded" style="min-height:400px;">
                            <div class="card-body">
                                <h5 class="card-title bg-brown p-2">會員須知</h5>
                                <ol class="list-group list-group-flush list-group-numbered pb-2">
                                    <li class="list-group-item px-2">當您使用本網站服務時，即表示您同意及遵守本站會員條款之規定事項及相關法律規定。</li>
                                    <li class="list-group-item px-2">員自行選擇「帳號」及「密碼」，請妥善保管及保密您的會員帳號及密碼。</li>
                                    <li class="list-group-item px-2">會員帳號及密碼請勿借予他人使用，以免影響您的個人權益，若因此造成損失，本網站恕不負責。</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-transparent border-0 collapse" id="acontQues" data-parent="#accordionHelp">
                        <div class="d-flex align-items-center justify-content-around bg-white p-4">
                            <span class="text-center">帳戶問題</span>
                        </div>
                        <div class="bg-white my-1 border-0 rounded" style="min-height:400px;">
                            <div class="card-body">
                                <h5 class="card-title bg-brown p-2">如何申請帳號?</h5>
                                <p class="card-text px-2">點擊網站右上角會員專區，即可進行「會員登入」或「會員註冊」流程。</p>
                                <h5 class="card-title bg-brown p-2">忘記密碼</h5>
                                <p class="card-text px-2">點擊網站右上角「會員專區」，進入「會員登入」畫面，並點擊「登入」按鈕下方的「忘記密碼」，按照提示步驟操作即可進入取回密碼流程。</p>
                                <h5 class="card-title bg-brown p-2">變更密碼</h5>
                                <p class="card-text px-2">登入會員後，網頁左側會出現下拉式選單，點選選單中「帳戶管理」→「密碼變更」，即可變更您的密碼。</p>
                                <h5 class="card-title bg-brown p-2">修改個人資料</h5>
                                <p class="card-text px-2">登入會員後，網頁左側會出現下拉式選單，點選選單中「帳戶管理」→「個人信息」，再輸入欄位中變更個人資料，再點擊「更新」按鈕，即可變更您的個人資料。</p>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-transparent border-0 collapse" id="aftrBuy" data-parent="#accordionHelp">
                        <div class="d-flex align-items-center justify-content-around bg-white p-4">
                            <span class="text-center">售後須知</span>
                        </div>
                        <div class="bg-white my-1 border-0 rounded" style="min-height:400px;">
                            <div class="card-body">
                                <h5 class="card-title bg-brown p-2">售後服務</h5>
                                <p class="card-text px-2">商品付款後，會進入必要設計修改流程，設計修改次數三次為限，修改次數超過三次，商品便無法再進行修改，直接進入等待收件作業。</p>
                                <h5 class="card-title bg-brown p-2">能不能退貨</h5>
                                <p class="card-text px-2">本網站商品，售出後皆不接受退貨要求，請在結帳時，確認商品規格是否正確，再進行付款。</p>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-transparent border-0 collapse" id="ctmrServe" data-parent="#accordionHelp">
                        <div class="d-flex align-items-center justify-content-around bg-white p-4">
                            <span class="text-center">客服相關</span>
                        </div>
                        <div class="bg-white my-1 border-0 rounded" style="min-height:400px;">
                            <div class="card-body">
                                <h5 class="card-title bg-brown p-2">如何聯絡客服?</h5>
                                <p class="card-text px-2">點擊網站右上方「會員專區」，網頁左側會出現下拉式選單，點選選單中「幫助中心」→「聯絡我們」，按照提示步驟，填寫您的聯絡資料及問題，點擊「送出」，客服人員將會收到您的信件，並盡快為您提供服務。</p>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-transparent border-0 collapse" id="ctmrServe" data-parent="#accordionHelp">
                        <div class="d-flex align-items-center justify-content-around bg-white p-4">
                            <span class="text-center">客服相關</span>
                        </div>
                        <div class="bg-white my-1 border-0 rounded" style="min-height:400px;">
                            <div class="card-body">
                                <h5 class="card-title bg-brown p-2">如何聯絡客服?</h5>
                                <p class="card-text px-2">點擊網站右上方「會員專區」，網頁左側會出現下拉式選單，點選選單中「幫助中心」→「聯絡我們」，按照提示步驟，填寫您的聯絡資料及問題，點擊「送出」，客服人員將會收到您的信件，並盡快為您提供服務。</p>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-transparent border-0 collapse" id="tmOfServe" data-parent="#accordionHelp">
                        <div class="d-flex align-items-center justify-content-around bg-white p-4">
                            <span class="text-center">服務條款</span>
                        </div>
                        <div class="bg-white my-1 border-0 rounded" style="min-height:400px;">
                            <div class="card-body">
                                <h5 class="card-title bg-brown p-2">服務條款聲明</h5>
                                <p class="card-text px-2">......</p>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-transparent border-0 collapse" id="pvcPoli" data-parent="#accordionHelp">
                        <div class="d-flex align-items-center justify-content-around bg-white p-4">
                            <span class="text-center">隱私條款</span>
                        </div>
                        <div class="bg-white my-1 border-0 rounded" style="min-height:400px;"></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<?php include("template/footer.php"); ?>