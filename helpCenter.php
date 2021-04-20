<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb Help</title>
    <?php include("template/bootstrapScript.php"); ?>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/leftbar.css">
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="css/icon_animate.css">
    <?php include("template/materialDesign.php"); ?>
    <style>
        .list-group-item {
            background-color: transparent;
            border: 0px;
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }
        .list-group-item-action:active {
            background-color: white;
        }

        .list-group-item.active {
            z-index: 2;
            color: #fff;
            background-color: var( --logoColor);
            /* border-color: var( --logoColor); */
        }
        .list-group-item:first-child {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }
    </style>
</head>
<body data-no="9">
<?php include("template/header-logoCenter.php"); ?>
<div class="container-fluid">
    <div class="container-sm">
        <div class="row mToTop">
            <!-- 左導覽 -->
            <div id="leftRow" class="col-2 px-0">
                <?php include("template/leftbar_help.php"); ?>
            </div>
            <!-- 小於xl-右導覽 -->
            <div class="d-block d-xl-none col-12 col-xl-10 px-0 px-xl-3">
                <div class="card border-0 mb-1 bg-cloud">
                    <div class="d-flex align-items-center justify-content-around bg-cloud p-4">
                        <span class="text-center">常見問題</span>
                    </div>
                    <div class="card-body" id="about_s">
                        <h5 class="card-title bg-logoColor-3 p-4 text-center font-weight-normal">關於品牌</h5>
                        <div class="my-1 border-0">
                            <h5 class="card-title bg-logoColor rounded text-white p-2">品牌故事</h5>
                            <p class="card-text p-2">匯集眾多設計師的作品，提供多元化、快速的商標購買。</p>
                            <h5 class="card-title bg-logoColor rounded text-white p-2">商品內容</h5>
                            <p class="card-text p-2">含跨眾多領域的商標設計作品，付款購買後就能直接進行修改，獲得屬於您個人的商標作品。</p>
                        </div>
                    </div>
                    <div class="card-body" id="howToBuy_s">
                        <h5 class="card-title bg-logoColor-3 p-4 text-center font-weight-normal">如何購物</h5>
                        <div class="p-2">
                            <div class="d-flex flex-column align-items-center mx-3">
                                <svg class="my-3" width="80" height="80" viewBox="0 0 80 80" fill="white" xmlns="http://www.w3.org/2000/svg">
                                    <g id="shopFlowIconUser">
                                    <circle id="Ellipse 53" cx="40" cy="40" r="39" stroke="#7DE290" stroke-width="2"/>
                                    <g id="headerIcon/userHover">
                                    <path id="man" d="M47.7426 38.1502C49.5652 36.4969 50.8424 34.3341 51.4067 31.9459C51.971 29.5576 51.7959 27.0555 50.9044 24.7679C50.0129 22.4804 48.4467 20.5145 46.4114 19.1282C44.3761 17.7419 41.9669 17 39.5 17C37.0331 17 34.6239 17.7419 32.5886 19.1282C30.5533 20.5145 28.9871 22.4804 28.0956 24.7679C27.2041 27.0555 27.029 29.5576 27.5933 31.9459C28.1576 34.3341 29.4348 36.4969 31.2574 38.1502C26.3236 40.3611 23 44.4891 23 49.2194C23 56.2781 30.3859 62 39.5 62C48.6141 62 56 56.2781 56 49.2194C56 44.4891 52.6764 40.3611 47.7426 38.1502ZM45.0542 31.9362C43.5809 33.3895 41.5899 34.2049 39.5148 34.2049C37.4397 34.2049 35.4486 33.3895 33.9754 31.9362C33.8231 31.7681 33.7416 31.5482 33.7479 31.322C33.7542 31.0958 33.8477 30.8807 34.009 30.7211C34.1704 30.5616 34.3872 30.4699 34.6147 30.465C34.8422 30.4601 35.0628 30.5424 35.231 30.6949C36.3719 31.827 37.9178 32.4628 39.5295 32.4628C41.1413 32.4628 42.6872 31.827 43.8281 30.6949C43.9963 30.5424 44.2169 30.4601 44.4444 30.465C44.6718 30.4699 44.8887 30.5616 45.0501 30.7211C45.2114 30.8807 45.3049 31.0958 45.3112 31.322C45.3174 31.5482 45.236 31.7681 45.0837 31.9362H45.0542Z" fill="#FAD06A"/>
                                    </g>
                                    </g>
                                </svg>
                                <h5>Step 1 會員註冊</h5>
                                <p class="text-center">
                                    您可以選擇常用社群帳號快速登入註冊，或以 Email 帳號註冊並驗證信箱<br>
                                    註冊登入後，請至右上方會員資訊中，詳細填寫個人資料，以便節省下單付款時間。
                                </p>
                                <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#FF9292"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 12l-1.41-1.41L13 16.17V4h-2v12.17l-5.58-5.59L4 12l8 8 8-8z"/></svg>
                                <svg class="my-3" width="80" height="80" viewBox="0 0 80 80" fill="white" xmlns="http://www.w3.org/2000/svg">
                                    <g id="shopFlowIconSpBag">
                                    <circle id="Ellipse 1" cx="40" cy="40" r="39" stroke="#7DE290" stroke-width="2"/>
                                    <circle id="goods" cx="39.5" cy="44.5" r="5.5" fill="#FF7870"/>
                                    <g id="shopBag">
                                    <path id="Vector" d="M50.1889 30.5576V28.106C50.1889 22.6021 44.8444 19 39.5 19C34.1556 19 28.8111 22.5463 28.8111 28.0502V30.5576H21V50.7615C21 54.207 23.0534 57 27.1079 57H51.8921C55.9466 57 58 54.207 58 50.7615V30.5576H54.0944H50.1889ZM32.1 28.0502C32.1 24.5479 35.8 21.4516 39.5 21.4516C43.2 21.4516 46.9 24.6037 46.9 28.106V30.5576H32.1V28.0502ZM48.5444 36.8618C47.7222 36.8618 46.9 36.1613 46.9 35.4608C46.9 34.7604 47.7222 34.0599 48.5444 34.0599C49.3667 34.0599 50.1889 34.7604 50.1889 35.4608C50.1889 36.1613 49.3667 36.8618 48.5444 36.8618ZM30.4556 36.8618C29.6333 36.8618 28.8111 36.2051 28.8111 35.4608C28.8111 34.7604 29.6333 34.0599 30.4556 34.0599C31.2778 34.0599 32.1 34.7604 32.1 35.4608C32.1 36.1613 31.2778 36.8618 30.4556 36.8618Z" fill="#D5A178"/>
                                    </g>
                                    </g>
                                </svg>
                                <h5>Step 2 商品選購</h5>
                                <p class="text-center">選擇自己需要的商標商品，並選擇是否加購套餐，將商品加入購物車。</p>
                                <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#FF9292"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 12l-1.41-1.41L13 16.17V4h-2v12.17l-5.58-5.59L4 12l8 8 8-8z"/></svg>
                                <svg class="my-3" width="80" height="80" viewBox="0 0 80 80" fill="white" xmlns="http://www.w3.org/2000/svg">
                                    <g id="shopFlowIconOdrPay">
                                    <circle id="Ellipse 3" cx="40" cy="40" r="39" stroke="#7DE290" stroke-width="2"/>
                                    <g id="orderCont">
                                    <path id="Vector" d="M30 47.5C30 47.1022 30.1229 46.7206 30.3417 46.4393C30.5605 46.158 30.8572 46 31.1667 46H35.8333C36.1428 46 36.4395 46.158 36.6583 46.4393C36.8771 46.7206 37 47.1022 37 47.5C37 47.8978 36.8771 48.2794 36.6583 48.5607C36.4395 48.842 36.1428 49 35.8333 49H31.1667C30.8572 49 30.5605 48.842 30.3417 48.5607C30.1229 48.2794 30 47.8978 30 47.5Z" fill="#FAD06A"/>
                                    <path id="Vector_2" d="M30 42.5C30 42.1022 30.1229 41.7206 30.3417 41.4393C30.5605 41.158 30.8572 41 31.1667 41H35.8333C36.1428 41 36.4395 41.158 36.6583 41.4393C36.8771 41.7206 37 42.1022 37 42.5C37 42.8978 36.8771 43.2794 36.6583 43.5607C36.4395 43.842 36.1428 44 35.8333 44H31.1667C30.8572 44 30.5605 43.842 30.3417 43.5607C30.1229 43.2794 30 42.8978 30 42.5Z" fill="#FAD06A"/>
                                    <path id="Vector_3" d="M30 37.5C30 37.1022 30.1229 36.7206 30.3417 36.4393C30.5605 36.158 30.8572 36 31.1667 36H35.8333C36.1428 36 36.4395 36.158 36.6583 36.4393C36.8771 36.7206 37 37.1022 37 37.5C37 37.8978 36.8771 38.2794 36.6583 38.5607C36.4395 38.842 36.1428 39 35.8333 39H31.1667C30.8572 39 30.5605 38.842 30.3417 38.5607C30.1229 38.2794 30 37.8978 30 37.5Z" fill="#FAD06A"/>
                                    <path id="Vector_4" d="M30 32.5C30 32.1022 30.1229 31.7206 30.3417 31.4393C30.5605 31.158 30.8572 31 31.1667 31H35.8333C36.1428 31 36.4395 31.158 36.6583 31.4393C36.8771 31.7206 37 32.1022 37 32.5C37 32.8978 36.8771 33.2794 36.6583 33.5607C36.4395 33.842 36.1428 34 35.8333 34H31.1667C30.8572 34 30.5605 33.842 30.3417 33.5607C30.1229 33.2794 30 32.8978 30 32.5Z" fill="#FAD06A"/>
                                    </g>
                                    <path id="paper" fill-rule="evenodd" clip-rule="evenodd" d="M25 29.0909C25 28.0059 25.4741 26.9654 26.318 26.1982C27.1619 25.431 28.3065 25 29.5 25H50.5C51.6935 25 52.8381 25.431 53.682 26.1982C54.5259 26.9654 55 28.0059 55 29.0909V50.9091C55 51.9941 54.5259 53.0346 53.682 53.8018C52.8381 54.569 51.6935 55 50.5 55H29.5C28.3065 55 27.1619 54.569 26.318 53.8018C25.4741 53.0346 25 51.9941 25 50.9091V29.0909ZM29.5 27.7273H50.5C50.8978 27.7273 51.2794 27.8709 51.5607 28.1267C51.842 28.3824 52 28.7293 52 29.0909V50.9091C52 51.2708 51.842 51.6176 51.5607 51.8733C51.2794 52.1291 50.8978 52.2727 50.5 52.2727H29.5C29.1022 52.2727 28.7206 52.1291 28.4393 51.8733C28.158 51.6176 28 51.2708 28 50.9091V29.0909C28 28.7293 28.158 28.3824 28.4393 28.1267C28.7206 27.8709 29.1022 27.7273 29.5 27.7273Z" fill="#D5A178"/>
                                    <g id="money">
                                    <path id="Vector_5" fill-rule="evenodd" clip-rule="evenodd" d="M44 47V50H46V47H47C48.0609 47 49.0783 46.5786 49.8284 45.8284C50.5786 45.0783 51 44.0609 51 43C51 41.9391 50.5786 40.9217 49.8284 40.1716C49.0783 39.4214 48.0609 39 47 39H46V35H48V37H50V33H46V30H44V33H43C41.9391 33 40.9217 33.4214 40.1716 34.1716C39.4214 34.9217 39 35.9391 39 37C39 38.0609 39.4214 39.0783 40.1716 39.8284C40.9217 40.5786 41.9391 41 43 41H44V45H42V43H40V47H44ZM46 45H47C47.5304 45 48.0391 44.7893 48.4142 44.4142C48.7893 44.0391 49 43.5304 49 43C49 42.4696 48.7893 41.9609 48.4142 41.5858C48.0391 41.2107 47.5304 41 47 41H46V45ZM44 39V35H43C42.4696 35 41.9609 35.2107 41.5858 35.5858C41.2107 35.9609 41 36.4696 41 37C41 37.5304 41.2107 38.0391 41.5858 38.4142C41.9609 38.7893 42.4696 39 43 39H44Z" fill="#FAD06A"/>
                                    </g>
                                    </g>
                                </svg>
                                <h5>Step 3 下單付款</h5>
                                <p class="text-center">
                                    確認購物車商品內容是否正確<br>
                                    選擇支付方式：1. 信用卡付款  2. 銀行ATM付款
                                </p>
                                <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#FF9292"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 12l-1.41-1.41L13 16.17V4h-2v12.17l-5.58-5.59L4 12l8 8 8-8z"/></svg>
                                <svg class="my-3" class="my-3" width="80" height="80" viewBox="0 0 80 80" fill="white" xmlns="http://www.w3.org/2000/svg">
                                    <g id="shopFlowIconModify">
                                    <circle id="Ellipse 53" cx="40" cy="40" r="39" stroke="#7DE290" stroke-width="2"/>
                                    <path id="pen" d="M54.176 29.346L50.6541 25.824C49.5555 24.7253 47.7737 24.7253 46.6751 25.824L43.3617 29.1374L50.8627 36.6386L54.176 33.3251C55.2747 32.2265 55.2747 30.4452 54.176 29.346V29.346ZM39.7155 28.1431C38.8003 27.2279 37.3167 27.2279 36.4015 28.1431L29.4419 35.1034C29.0757 35.4696 29.0757 36.0632 29.4419 36.4288L30.7679 37.7548C31.1341 38.121 31.7276 38.121 32.0938 37.7548L38.0597 31.7888L39.3856 33.1142L30.5054 41.994C27.4295 45.07 25.4917 49.1011 25.0106 53.4245L25.0088 53.4379C24.9092 54.3333 25.6657 55.0903 26.5609 54.9913C30.8898 54.5133 34.9267 52.5747 38.0064 49.4952L49.5367 37.9646L44.687 33.1148L39.7155 28.1431V28.1431Z" fill="#D5A178"/>
                                    <g id="NumNotify">
                                    <circle id="Ellipse 68" cx="58" cy="25" r="10" fill="#FF7870" fill-opacity="0.8"/>
                                    <path id="1" d="M59.2578 31H57V22.2969L54.3047 23.1328V21.2969L59.0156 19.6094H59.2578V31Z" fill="white"/>
                                    </g>
                                    </g>
                                </svg>
                                <h5>Step 4 必要設計修改</h5>
                                <p class="text-center">付款成功後，網站後台人員將為您聯繫該商標商品之設計師，與您溝通討論商標需要進行的必要設計修改。</p>
                                <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#FF9292"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 12l-1.41-1.41L13 16.17V4h-2v12.17l-5.58-5.59L4 12l8 8 8-8z"/></svg>
                                <svg class="my-3" width="80" height="80" viewBox="0 0 80 80" fill="white" xmlns="http://www.w3.org/2000/svg">
                                    <g id="shopFlowIconSpBag">
                                    <circle id="Ellipse 2" cx="40" cy="40" r="39" stroke="#7DE290" stroke-width="2"/>
                                    <path id="box" fill-rule="evenodd" clip-rule="evenodd" d="M40.6508 32.207L54.2417 35.8297L55.7808 36.9425V52.9012L54.9047 54.0377L40.3904 58.0392L25.8524 54.0377L25 52.9012V36.9425L26.4443 35.8297L40.0116 32.207H40.6508ZM40.4377 34.5748L30.9667 36.9425L32.269 37.4161L40.3904 39.5471L47.4936 37.6292L49.743 36.9425L40.4377 34.5748V34.5748ZM27.3678 52.0014L39.2065 55.2453V41.678L27.3678 38.5053V52.0014ZM41.5743 41.678V55.2453L53.413 52.0014V38.4342L48.6302 39.7436V45.8216L46.2624 46.4372V40.3924L41.5743 41.678Z" fill="#D5A178"/>
                                    <path id="download" d="M46.2375 23.6486L41.75 26.7171V18H39.25V26.7171L34.7625 23.6486L33 24.8571L40.5 30L48 24.8571L46.2375 23.6486Z" fill="#D5A178"/>
                                    </g>
                                </svg>
                                <h5>Step 5 等待收件</h5>
                                <p class="text-center">
                                    修改完成後，本網站將會發送一則完成的 Email 通知，完成電子檔會上傳至網站，供您下載使用。<br>
                                    完成電子檔您可以於商品詳情頁面，取得下載地址。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" id="tradeQues_s">
                        <h5 class="card-title bg-logoColor-3 p-4 text-center font-weight-normal">交易問題</h5>
                        <div class="my-1 border-0">
                            <h5 class="card-title bg-logoColor rounded text-white p-2">交易須知</h5>
                            <ol class="list-group list-group-flush list-group-numbered pb-2">
                                <li class="list-group-item pl-5">付款前，請確認下單商品內容、付款帳號、付款金額，若有任何疑問，請勿付款，並請立即來信客服確認，以免受騙。</li>
                                <li class="list-group-item pl-5">本網站採用先收款後製作，請在七日內完成付款，若已超過付款期限，訂單將自動取消。若需再次交易，請重新下單。</li>
                                <li class="list-group-item pl-5">本網站提供之定價及報價，均未含營業稅，正確費用需於下單後，依系統發出之商品報及價Email為準。</li>
                            </ol>
                            <h5 class="card-title bg-logoColor rounded text-white p-2">如何知道付款成功</h5>
                            <p class="card-text p-2">請至網站右上角點選「會員中心」→「我的訂單」，查看訂單是否完成付款。</p>
                            <h5 class="card-title bg-logoColor rounded text-white p-2">付款方式</h5>
                            <ol class="list-group list-group-flush list-group-numbered pb-2">
                                <h5 class="px-2">信用卡付款：</h5>
                                <li class="list-group-item pl-5">本網站與XX銀行合作，當確定付款時，將開啟信用卡付款頁面，填入正確卡片資料即可，逾時匯款，系統將無法接受信用卡付款。</li>
                                <li class="list-group-item pl-5">本網站採用先付款後製作，請在收到付款通知後七日內完成付款，過付款期限，訂單將自動取消，若需再次交易，請重新下單付款。</li>
                                <br>
                                <h5 class="px-2">ATM付款：</h5>
                                <li class="list-group-item pl-5">本網站與XX銀行合作，點選ATM轉帳後，每筆訂單將產生不同的銀行匯款帳號，請於七日內完成匯款，繳款金額不符或逾期匯款，銀行將不接受匯款。</li>
                                <li class="list-group-item pl-5">本網站採用先付款後製作，請在收到付款通知後七日內完成付款，過付款期限，訂單將自動取消，若需再次交易，請重新下單付款。</li>
                                <span class="text-alert p-2">若有其他付款問題，請至客服信箱詢問，將有客服專人回覆。</span>
                            </ol>
                        </div>
                    </div>
                    <div class="card-body" id="odrQues_s">
                        <h5 class="card-title bg-logoColor-3 p-4 text-center font-weight-normal">訂單問題</h5>
                        <div class="my-1 border-0">
                            <h5 class="card-title bg-logoColor rounded text-white p-2">如何查看訂單?</h5>
                            <p class="card-text p-2">在網站右上角點選「會員中心」→「我的訂單」→「全部訂單」，即可進入頁面查看到所有訂單資訊。</p>
                            <h5 class="card-title bg-logoColor rounded text-white p-2">如何取消訂單?</h5>
                            <p class="card-text p-2">在我的訂單中，選擇欲取消的訂單，按下「取消訂單」。<br>*提醒：訂單一旦付款完成，就無法取消訂單。</p>
                        </div>
                    </div>
                    <div class="card-body" id="domOvertrade_s">
                        <h5 class="card-title bg-logoColor-3 p-4 text-center font-weight-normal">國內/外交易</h5>
                        <div class="my-1 border-0">
                            <h5 class="card-title bg-logoColor rounded text-white p-2">國內/外交易須知</h5>
                            <p class="card-text p-2">國外交易時，匯率轉換可能會產生匯差，您的發卡銀行也可能向您收取海外交易手續費。</p>
                        </div>
                    </div>
                    <div class="card-body" id="mbNotice_s">
                        <h5 class="card-title bg-logoColor-3 p-4 text-center font-weight-normal">會員須知</h5>
                        <div class="my-1 border-0">
                            <h5 class="card-title bg-logoColor rounded text-white p-2">會員須知</h5>
                            <ol class="list-group list-group-flush list-group-numbered pb-2">
                                <li class="list-group-item px-2">當您使用本網站服務時，即表示您同意及遵守本站會員條款之規定事項及相關法律規定。</li>
                                <li class="list-group-item px-2">員自行選擇「帳號」及「密碼」，請妥善保管及保密您的會員帳號及密碼。</li>
                                <li class="list-group-item px-2">會員帳號及密碼請勿借予他人使用，以免影響您的個人權益，若因此造成損失，本網站恕不負責。</li>
                            </ol>
                        </div>
                    </div>
                    <div class="card-body" id="acontQues_s">
                        <h5 class="card-title bg-logoColor-3 p-4 text-center font-weight-normal">帳戶問題</h5>
                        <div class="my-1 border-0">
                            <h5 class="card-title bg-logoColor rounded text-white p-2">如何申請帳號?</h5>
                            <p class="card-text px-2">點擊網站右上角會員專區，即可進行「會員登入」或「會員註冊」流程。</p>
                            <h5 class="card-title bg-logoColor rounded text-white p-2">忘記密碼</h5>
                            <p class="card-text px-2">點擊網站右上角「會員專區」，進入「會員登入」畫面，並點擊「登入」按鈕下方的「忘記密碼」，按照提示步驟操作即可進入取回密碼流程。</p>
                            <h5 class="card-title bg-logoColor rounded text-white p-2">變更密碼</h5>
                            <p class="card-text px-2">登入會員後，網頁左側會出現下拉式選單，點選選單中「帳戶管理」→「密碼變更」，即可變更您的密碼。</p>
                            <h5 class="card-title bg-logoColor rounded text-white p-2">修改個人資料</h5>
                            <p class="card-text px-2">登入會員後，網頁左側會出現下拉式選單，點選選單中「帳戶管理」→「個人信息」，再輸入欄位中變更個人資料，再點擊「更新」按鈕，即可變更您的個人資料。</p>
                        </div>
                    </div>
                    <div class="card-body" id="aftrBuy_s">
                        <h5 class="card-title bg-logoColor-3 p-4 text-center font-weight-normal">售後須知</h5>
                        <div class="my-1 border-0">
                            <h5 class="card-title bg-logoColor rounded text-white p-2">售後服務</h5>
                            <p class="card-text px-2">商品付款後，會進入必要設計修改流程，設計修改次數三次為限，修改次數超過三次，商品便無法再進行修改，直接進入等待收件作業。</p>
                            <h5 class="card-title bg-logoColor rounded text-white p-2">能不能退貨</h5>
                            <p class="card-text px-2">本網站商品，售出後皆不接受退貨要求，請在結帳時，確認商品規格是否正確，再進行付款。</p>
                        </div>
                    </div>
                    <div class="card-body" id="ctmrServe_s">
                        <h5 class="card-title bg-logoColor-3 p-4 text-center font-weight-normal">客服相關</h5>
                        <div class="my-1 border-0">
                            <h5 class="card-title bg-logoColor rounded text-white p-2">如何聯絡客服?</h5>
                            <p class="card-text px-2">點擊網站右上方「會員專區」，網頁左側會出現下拉式選單，點選選單中「幫助中心」→「聯絡我們」，按照提示步驟，填寫您的聯絡資料及問題，點擊「送出」，客服人員將會收到您的信件，並盡快為您提供服務。</p>
                        </div>
                    </div>
                    <div class="card-body" id="tmOfServe_s">
                        <h5 class="card-title bg-logoColor-3 p-4 text-center font-weight-normal">服務條款</h5>
                        <div class="my-1 border-0">
                            <h5 class="card-title bg-logoColor rounded text-white p-2">服務條款聲明</h5>
                            <p class="card-text px-2">......</p>
                        </div>
                    </div>
                    <div class="card-body" id="pvcPoli_s">
                        <h5 class="card-title bg-logoColor-3 p-4 text-center font-weight-normal">隱私條款</h5>
                        <div class="my-1 border-0">
                            <h5 class="card-title bg-logoColor rounded text-white p-2">隱私條款聲明</h5>
                            <p class="card-text px-2">......</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 大於xl-右導覽 -->
            <div class="d-none d-xl-block col-xl-10 px-0 px-xl-3">
                <div class="accordion" id="accordionHelp">
                    <div class="card bg-transparent border-0 collapse show" id="about" data-parent="#accordionHelp">
                        <div class="d-flex align-items-center justify-content-around bg-cloud p-4">
                            <span class="text-center">關於品牌</span>
                        </div>
                        <div class="bg-cloud my-1 border-0 rounded mh-400">
                            <div class="card-body">
                                <h5 class="card-title bg-logoColor rounded text-white p-2">品牌故事</h5>
                                <p class="card-text p-2">匯集眾多設計師的作品，提供多元化、快速的商標購買。</p>
                                <h5 class="card-title bg-logoColor rounded text-white p-2">商品內容</h5>
                                <p class="card-text p-2">含跨眾多領域的商標設計作品，付款購買後就能直接進行修改，獲得屬於您個人的商標作品。</p>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-transparent border-0 collapse" id="howToBuy" data-parent="#accordionHelp">
                        <div class="d-flex align-items-center justify-content-around bg-cloud p-4">
                            <span class="text-center">如何購物</span>
                        </div>
                        <div class="bg-cloud my-1 border-0 rounded mh-400">
                            <div class="card-body">
                                <div class="list-group flex-row " id="" role="tablist">
                                    <a href="#orderSteps" id="tabOrderSteps" class="list-group-item list-group-item-action text-center active" data-toggle="list" data-target="#orderSteps" aria-expanded="true">訂購流程</a>
                                    <a href="#afterBuy" id="tabAfterBuy" class="list-group-item list-group-item-action text-center" data-toggle="list" data-target="#afterBuy" aria-expanded="false">售後須知</a>
                                    <a href="#abc" id="tabAbc" class="list-group-item list-group-item-action text-center" data-toggle="list" data-target="#abc" aria-expanded="false">訂購流程</a>
                                    <a href="#edf" id="tabEdf" class="list-group-item list-group-item-action text-center" data-toggle="list" data-target="#edf" aria-expanded="false">訂購流程</a>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="orderSteps" role="tabpanel">
                                        <div class="d-flex justify-content-center align-items-center mt-3 pt-3" id="shopFlow">
                                            <div class="d-flex flex-column align-items-center mx-3">
                                                <svg width="80" height="80" viewBox="0 0 80 80" fill="white" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="shopFlowIconUser">
                                                    <circle id="Ellipse 53" cx="40" cy="40" r="39" stroke="#7DE290" stroke-width="2"/>
                                                    <g id="headerIcon/userHover">
                                                    <path id="man" d="M47.7426 38.1502C49.5652 36.4969 50.8424 34.3341 51.4067 31.9459C51.971 29.5576 51.7959 27.0555 50.9044 24.7679C50.0129 22.4804 48.4467 20.5145 46.4114 19.1282C44.3761 17.7419 41.9669 17 39.5 17C37.0331 17 34.6239 17.7419 32.5886 19.1282C30.5533 20.5145 28.9871 22.4804 28.0956 24.7679C27.2041 27.0555 27.029 29.5576 27.5933 31.9459C28.1576 34.3341 29.4348 36.4969 31.2574 38.1502C26.3236 40.3611 23 44.4891 23 49.2194C23 56.2781 30.3859 62 39.5 62C48.6141 62 56 56.2781 56 49.2194C56 44.4891 52.6764 40.3611 47.7426 38.1502ZM45.0542 31.9362C43.5809 33.3895 41.5899 34.2049 39.5148 34.2049C37.4397 34.2049 35.4486 33.3895 33.9754 31.9362C33.8231 31.7681 33.7416 31.5482 33.7479 31.322C33.7542 31.0958 33.8477 30.8807 34.009 30.7211C34.1704 30.5616 34.3872 30.4699 34.6147 30.465C34.8422 30.4601 35.0628 30.5424 35.231 30.6949C36.3719 31.827 37.9178 32.4628 39.5295 32.4628C41.1413 32.4628 42.6872 31.827 43.8281 30.6949C43.9963 30.5424 44.2169 30.4601 44.4444 30.465C44.6718 30.4699 44.8887 30.5616 45.0501 30.7211C45.2114 30.8807 45.3049 31.0958 45.3112 31.322C45.3174 31.5482 45.236 31.7681 45.0837 31.9362H45.0542Z" fill="#FAD06A"/>
                                                    </g>
                                                    </g>
                                                </svg>
                                                <!-- <img src="images/orderflowIcon/user.svg" alt=""> -->
                                                <div class="mt-3">會員註冊</div>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#FF9292"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
                                            <div class="d-flex flex-column align-items-center mx-3">
                                                <svg width="80" height="80" viewBox="0 0 80 80" fill="white" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="shopFlowIconSpBag">
                                                    <circle id="Ellipse 1" cx="40" cy="40" r="39" stroke="#7DE290" stroke-width="2"/>
                                                    <circle id="goods" cx="39.5" cy="44.5" r="5.5" fill="#FF7870"/>
                                                    <g id="shopBag">
                                                    <path id="Vector" d="M50.1889 30.5576V28.106C50.1889 22.6021 44.8444 19 39.5 19C34.1556 19 28.8111 22.5463 28.8111 28.0502V30.5576H21V50.7615C21 54.207 23.0534 57 27.1079 57H51.8921C55.9466 57 58 54.207 58 50.7615V30.5576H54.0944H50.1889ZM32.1 28.0502C32.1 24.5479 35.8 21.4516 39.5 21.4516C43.2 21.4516 46.9 24.6037 46.9 28.106V30.5576H32.1V28.0502ZM48.5444 36.8618C47.7222 36.8618 46.9 36.1613 46.9 35.4608C46.9 34.7604 47.7222 34.0599 48.5444 34.0599C49.3667 34.0599 50.1889 34.7604 50.1889 35.4608C50.1889 36.1613 49.3667 36.8618 48.5444 36.8618ZM30.4556 36.8618C29.6333 36.8618 28.8111 36.2051 28.8111 35.4608C28.8111 34.7604 29.6333 34.0599 30.4556 34.0599C31.2778 34.0599 32.1 34.7604 32.1 35.4608C32.1 36.1613 31.2778 36.8618 30.4556 36.8618Z" fill="#D5A178"/>
                                                    </g>
                                                    </g>
                                                </svg>
                                                <!-- <img src="images/orderflowIcon/shopping.svg" alt=""> -->
                                                <div class="mt-3">商品選購</div>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#FF9292"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
                                            <div class="d-flex flex-column align-items-center mx-3">
                                                <svg width="80" height="80" viewBox="0 0 80 80" fill="white" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="shopFlowIconOdrPay">
                                                    <circle id="Ellipse 3" cx="40" cy="40" r="39" stroke="#7DE290" stroke-width="2"/>
                                                    <g id="orderCont">
                                                    <path id="Vector" d="M30 47.5C30 47.1022 30.1229 46.7206 30.3417 46.4393C30.5605 46.158 30.8572 46 31.1667 46H35.8333C36.1428 46 36.4395 46.158 36.6583 46.4393C36.8771 46.7206 37 47.1022 37 47.5C37 47.8978 36.8771 48.2794 36.6583 48.5607C36.4395 48.842 36.1428 49 35.8333 49H31.1667C30.8572 49 30.5605 48.842 30.3417 48.5607C30.1229 48.2794 30 47.8978 30 47.5Z" fill="#FAD06A"/>
                                                    <path id="Vector_2" d="M30 42.5C30 42.1022 30.1229 41.7206 30.3417 41.4393C30.5605 41.158 30.8572 41 31.1667 41H35.8333C36.1428 41 36.4395 41.158 36.6583 41.4393C36.8771 41.7206 37 42.1022 37 42.5C37 42.8978 36.8771 43.2794 36.6583 43.5607C36.4395 43.842 36.1428 44 35.8333 44H31.1667C30.8572 44 30.5605 43.842 30.3417 43.5607C30.1229 43.2794 30 42.8978 30 42.5Z" fill="#FAD06A"/>
                                                    <path id="Vector_3" d="M30 37.5C30 37.1022 30.1229 36.7206 30.3417 36.4393C30.5605 36.158 30.8572 36 31.1667 36H35.8333C36.1428 36 36.4395 36.158 36.6583 36.4393C36.8771 36.7206 37 37.1022 37 37.5C37 37.8978 36.8771 38.2794 36.6583 38.5607C36.4395 38.842 36.1428 39 35.8333 39H31.1667C30.8572 39 30.5605 38.842 30.3417 38.5607C30.1229 38.2794 30 37.8978 30 37.5Z" fill="#FAD06A"/>
                                                    <path id="Vector_4" d="M30 32.5C30 32.1022 30.1229 31.7206 30.3417 31.4393C30.5605 31.158 30.8572 31 31.1667 31H35.8333C36.1428 31 36.4395 31.158 36.6583 31.4393C36.8771 31.7206 37 32.1022 37 32.5C37 32.8978 36.8771 33.2794 36.6583 33.5607C36.4395 33.842 36.1428 34 35.8333 34H31.1667C30.8572 34 30.5605 33.842 30.3417 33.5607C30.1229 33.2794 30 32.8978 30 32.5Z" fill="#FAD06A"/>
                                                    </g>
                                                    <path id="paper" fill-rule="evenodd" clip-rule="evenodd" d="M25 29.0909C25 28.0059 25.4741 26.9654 26.318 26.1982C27.1619 25.431 28.3065 25 29.5 25H50.5C51.6935 25 52.8381 25.431 53.682 26.1982C54.5259 26.9654 55 28.0059 55 29.0909V50.9091C55 51.9941 54.5259 53.0346 53.682 53.8018C52.8381 54.569 51.6935 55 50.5 55H29.5C28.3065 55 27.1619 54.569 26.318 53.8018C25.4741 53.0346 25 51.9941 25 50.9091V29.0909ZM29.5 27.7273H50.5C50.8978 27.7273 51.2794 27.8709 51.5607 28.1267C51.842 28.3824 52 28.7293 52 29.0909V50.9091C52 51.2708 51.842 51.6176 51.5607 51.8733C51.2794 52.1291 50.8978 52.2727 50.5 52.2727H29.5C29.1022 52.2727 28.7206 52.1291 28.4393 51.8733C28.158 51.6176 28 51.2708 28 50.9091V29.0909C28 28.7293 28.158 28.3824 28.4393 28.1267C28.7206 27.8709 29.1022 27.7273 29.5 27.7273Z" fill="#D5A178"/>
                                                    <g id="money">
                                                    <path id="Vector_5" fill-rule="evenodd" clip-rule="evenodd" d="M44 47V50H46V47H47C48.0609 47 49.0783 46.5786 49.8284 45.8284C50.5786 45.0783 51 44.0609 51 43C51 41.9391 50.5786 40.9217 49.8284 40.1716C49.0783 39.4214 48.0609 39 47 39H46V35H48V37H50V33H46V30H44V33H43C41.9391 33 40.9217 33.4214 40.1716 34.1716C39.4214 34.9217 39 35.9391 39 37C39 38.0609 39.4214 39.0783 40.1716 39.8284C40.9217 40.5786 41.9391 41 43 41H44V45H42V43H40V47H44ZM46 45H47C47.5304 45 48.0391 44.7893 48.4142 44.4142C48.7893 44.0391 49 43.5304 49 43C49 42.4696 48.7893 41.9609 48.4142 41.5858C48.0391 41.2107 47.5304 41 47 41H46V45ZM44 39V35H43C42.4696 35 41.9609 35.2107 41.5858 35.5858C41.2107 35.9609 41 36.4696 41 37C41 37.5304 41.2107 38.0391 41.5858 38.4142C41.9609 38.7893 42.4696 39 43 39H44Z" fill="#FAD06A"/>
                                                    </g>
                                                    </g>
                                                </svg>
                                                <!-- <img src="images/orderflowIcon/orderPay.svg" alt=""> -->
                                                <div class="mt-3">下單付款</div>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#FF9292"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
                                            <div class="d-flex flex-column align-items-center mx-3">
                                                <svg width="80" height="80" viewBox="0 0 80 80" fill="white" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="shopFlowIconModify">
                                                    <circle id="Ellipse 53" cx="40" cy="40" r="39" stroke="#7DE290" stroke-width="2"/>
                                                    <path id="pen" d="M54.176 29.346L50.6541 25.824C49.5555 24.7253 47.7737 24.7253 46.6751 25.824L43.3617 29.1374L50.8627 36.6386L54.176 33.3251C55.2747 32.2265 55.2747 30.4452 54.176 29.346V29.346ZM39.7155 28.1431C38.8003 27.2279 37.3167 27.2279 36.4015 28.1431L29.4419 35.1034C29.0757 35.4696 29.0757 36.0632 29.4419 36.4288L30.7679 37.7548C31.1341 38.121 31.7276 38.121 32.0938 37.7548L38.0597 31.7888L39.3856 33.1142L30.5054 41.994C27.4295 45.07 25.4917 49.1011 25.0106 53.4245L25.0088 53.4379C24.9092 54.3333 25.6657 55.0903 26.5609 54.9913C30.8898 54.5133 34.9267 52.5747 38.0064 49.4952L49.5367 37.9646L44.687 33.1148L39.7155 28.1431V28.1431Z" fill="#D5A178"/>
                                                    <g id="NumNotify">
                                                    <circle id="Ellipse 68" cx="58" cy="25" r="10" fill="#FF7870" fill-opacity="0.8"/>
                                                    <path id="1" d="M59.2578 31H57V22.2969L54.3047 23.1328V21.2969L59.0156 19.6094H59.2578V31Z" fill="white"/>
                                                    </g>
                                                    </g>
                                                </svg>
                                                <!-- <img src="images/orderflowIcon/modify.svg" alt=""> -->
                                                <div class="mt-3">必要設計修改</div>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#FF9292"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
                                            <div class="d-flex flex-column align-items-center mx-3">
                                                <svg width="80" height="80" viewBox="0 0 80 80" fill="white" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="shopFlowIconSpBag">
                                                    <circle id="Ellipse 2" cx="40" cy="40" r="39" stroke="#7DE290" stroke-width="2"/>
                                                    <path id="box" fill-rule="evenodd" clip-rule="evenodd" d="M40.6508 32.207L54.2417 35.8297L55.7808 36.9425V52.9012L54.9047 54.0377L40.3904 58.0392L25.8524 54.0377L25 52.9012V36.9425L26.4443 35.8297L40.0116 32.207H40.6508ZM40.4377 34.5748L30.9667 36.9425L32.269 37.4161L40.3904 39.5471L47.4936 37.6292L49.743 36.9425L40.4377 34.5748V34.5748ZM27.3678 52.0014L39.2065 55.2453V41.678L27.3678 38.5053V52.0014ZM41.5743 41.678V55.2453L53.413 52.0014V38.4342L48.6302 39.7436V45.8216L46.2624 46.4372V40.3924L41.5743 41.678Z" fill="#D5A178"/>
                                                    <path id="download" d="M46.2375 23.6486L41.75 26.7171V18H39.25V26.7171L34.7625 23.6486L33 24.8571L40.5 30L48 24.8571L46.2375 23.6486Z" fill="#D5A178"/>
                                                    </g>
                                                </svg>
                                                <!-- <img src="images/orderflowIcon/download.svg" alt=""> -->
                                                <div class="mt-3">稿件收件</div>
                                            </div>
                                        </div>
                                        <div class="p-5">
                                            <h5>Step 1 會員註冊 (截圖，會員登入/會員註冊)</h5>
                                            <p>
                                                您可以選擇常用社群帳號快速登入註冊，或以 Email 帳號註冊並驗證信箱<br>
                                                註冊登入後，請至右上方會員資訊中，詳細填寫個人資料，以便節省下單付款時間。
                                            </p>
                                            <h5>Step 2 商品選購 (截圖，商品購物頁面；圈選套餐&加入購物車按鈕)</h5>
                                            <p>
                                                選擇自己需要的商標商品，並選擇是否加購套餐，將商品加入購物車。
                                            </p>
                                            <h5>Step 3 下單付款 (截圖，付款頁面)</h5>
                                            <p>
                                                確認購物車商品內容是否正確<br>
                                                選擇支付方式：1.信用卡付款2.銀行ATM付款
                                            </p>
                                            <h5>Step 4 必要設計修改</h5>
                                            <p>付款成功後，網站後台人員將為您聯繫該商標商品之設計師，與您溝通討論商標需要進行的必要設計修改。</p>
                                            <h5>Step 5 等待收件</h5>
                                            <p>
                                                修改完成後，本網站將會發送一則完成的 Email 通知，完成電子檔會上傳至網站，供您下載使用。<br>
                                                完成電子檔您可以於商品詳情頁面，取得下載地址。
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="afterBuy" role="tabpanel">
                                        <ol class="list-group list-group-flush list-group-numbered p-4">
                                            <li class="list-group-item px-2">商品售出後進行必要性設計修改，修改內容包含：文字修改、顏色修改，修改次數三次為限。</li>
                                            <li class="list-group-item px-2">商品售出皆不接受退換貨服，付款前，請確認商品品項與付款金額 若有任何疑問，請勿付款，並請立即與客服確認。</li>
                                        </ol>
                                    </div>
                                    <div class="tab-pane fade" id="abc" role="tabpanel"></div>
                                    <div class="tab-pane fade" id="edf" role="tabpanel"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-transparent border-0 collapse" id="tradeQues" data-parent="#accordionHelp">
                        <div class="d-flex align-items-center justify-content-around bg-cloud p-4">
                            <span class="text-center">交易問題</span>
                        </div>
                        <div class="bg-cloud my-1 border-0 rounded mh-400">
                            <div class="card-body">
                                <h5 class="card-title bg-logoColor rounded text-white p-2">交易須知</h5>
                                <ol class="list-group list-group-flush list-group-numbered pb-2">
                                    <li class="list-group-item px-2">付款前，請確認下單商品內容、付款帳號、付款金額，若有任何疑問，請勿付款，並請立即來信客服確認，以免受騙。</li>
                                    <li class="list-group-item px-2">本網站採用先收款後製作，請在七日內完成付款，若已超過付款期限，訂單將自動取消。若需再次交易，請重新下單。</li>
                                    <li class="list-group-item px-2">本網站提供之定價及報價，均未含營業稅，正確費用需於下單後，依系統發出之商品報及價Email為準。</li>
                                </ol>
                                <h5 class="card-title bg-logoColor rounded text-white p-2">如何知道付款成功</h5>
                                <p class="card-text p-2">請至網站右上角點選「會員中心」→「我的訂單」，查看訂單是否完成付款。</p>
                                <h5 class="card-title bg-logoColor rounded text-white p-2">付款方式</h5>
                                <ol class="list-group list-group-flush list-group-numbered pb-2">
                                    <h5 class="px-2">信用卡付款：</h5>
                                    <li class="list-group-item px-2">本網站與XX銀行合作，當確定付款時，將開啟信用卡付款頁面，填入正確卡片資料即可，逾時匯款，系統將無法接受信用卡付款。</li>
                                    <li class="list-group-item px-2">本網站採用先付款後製作，請在收到付款通知後七日內完成付款，過付款期限，訂單將自動取消，若需再次交易，請重新下單付款。</li>
                                    <br>
                                    <h5 class="px-2">ATM付款：</h5>
                                    <li class="list-group-item px-2">本網站與XX銀行合作，點選ATM轉帳後，每筆訂單將產生不同的銀行匯款帳號，請於七日內完成匯款，繳款金額不符或逾期匯款，銀行將不接受匯款。</li>
                                    <li class="list-group-item px-2">本網站採用先付款後製作，請在收到付款通知後七日內完成付款，過付款期限，訂單將自動取消，若需再次交易，請重新下單付款。</li>
                                    <span class="text-alert p-2">若有其他付款問題，請至客服信箱詢問，將有客服專人回覆。</span>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-transparent border-0 collapse" id="odrQues" data-parent="#accordionHelp">
                        <div class="d-flex align-items-center justify-content-around bg-cloud p-4">
                            <span class="text-center">訂單問題</span>
                        </div>
                        <div class="bg-cloud my-1 border-0 rounded mh-400">
                            <div class="card-body">
                                <h5 class="card-title bg-logoColor rounded text-white p-2">如何查看訂單?</h5>
                                <p class="card-text p-2">在網站右上角點選「會員中心」→「我的訂單」→「全部訂單」，即可進入頁面查看到所有訂單資訊。</p>
                                <h5 class="card-title bg-logoColor rounded text-white p-2">如何取消訂單?</h5>
                                <p class="card-text p-2">在我的訂單中，選擇欲取消的訂單，按下「取消訂單」。<br>*提醒：訂單一旦付款完成，就無法取消訂單。</p>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-transparent border-0 collapse" id="domOvertrade" data-parent="#accordionHelp">
                        <div class="d-flex align-items-center justify-content-around bg-cloud p-4">
                            <span class="text-center">國內/外交易</span>
                        </div>
                        <div class="bg-cloud my-1 border-0 rounded mh-400">
                            <div class="card-body">
                                <h5 class="card-title bg-logoColor rounded text-white p-2">國內/外交易須知</h5>
                                <p class="card-text p-2">國外交易時，匯率轉換可能會產生匯差，您的發卡銀行也可能向您收取海外交易手續費。</p>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-transparent border-0 collapse" id="mbNotice" data-parent="#accordionHelp">
                        <div class="d-flex align-items-center justify-content-around bg-cloud p-4">
                            <span class="text-center">會員須知</span>
                        </div>
                        <div class="bg-cloud my-1 border-0 rounded mh-400">
                            <div class="card-body">
                                <h5 class="card-title bg-logoColor rounded text-white p-2">會員須知</h5>
                                <ol class="list-group list-group-flush list-group-numbered pb-2">
                                    <li class="list-group-item px-2">當您使用本網站服務時，即表示您同意及遵守本站會員條款之規定事項及相關法律規定。</li>
                                    <li class="list-group-item px-2">員自行選擇「帳號」及「密碼」，請妥善保管及保密您的會員帳號及密碼。</li>
                                    <li class="list-group-item px-2">會員帳號及密碼請勿借予他人使用，以免影響您的個人權益，若因此造成損失，本網站恕不負責。</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-transparent border-0 collapse" id="acontQues" data-parent="#accordionHelp">
                        <div class="d-flex align-items-center justify-content-around bg-cloud p-4">
                            <span class="text-center">帳戶問題</span>
                        </div>
                        <div class="bg-cloud my-1 border-0 rounded mh-400">
                            <div class="card-body">
                                <h5 class="card-title bg-logoColor rounded text-white p-2">如何申請帳號?</h5>
                                <p class="card-text px-2">點擊網站右上角會員專區，即可進行「會員登入」或「會員註冊」流程。</p>
                                <h5 class="card-title bg-logoColor rounded text-white p-2">忘記密碼</h5>
                                <p class="card-text px-2">點擊網站右上角「會員專區」，進入「會員登入」畫面，並點擊「登入」按鈕下方的「忘記密碼」，按照提示步驟操作即可進入取回密碼流程。</p>
                                <h5 class="card-title bg-logoColor rounded text-white p-2">變更密碼</h5>
                                <p class="card-text px-2">登入會員後，網頁左側會出現下拉式選單，點選選單中「帳戶管理」→「密碼變更」，即可變更您的密碼。</p>
                                <h5 class="card-title bg-logoColor rounded text-white p-2">修改個人資料</h5>
                                <p class="card-text px-2">登入會員後，網頁左側會出現下拉式選單，點選選單中「帳戶管理」→「個人信息」，再輸入欄位中變更個人資料，再點擊「更新」按鈕，即可變更您的個人資料。</p>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-transparent border-0 collapse" id="aftrBuy" data-parent="#accordionHelp">
                        <div class="d-flex align-items-center justify-content-around bg-cloud p-4">
                            <span class="text-center">售後須知</span>
                        </div>
                        <div class="bg-cloud my-1 border-0 rounded mh-400">
                            <div class="card-body">
                                <h5 class="card-title bg-logoColor rounded text-white p-2">售後服務</h5>
                                <p class="card-text px-2">商品付款後，會進入必要設計修改流程，設計修改次數三次為限，修改次數超過三次，商品便無法再進行修改，直接進入等待收件作業。</p>
                                <h5 class="card-title bg-logoColor rounded text-white p-2">能不能退貨</h5>
                                <p class="card-text px-2">本網站商品，售出後皆不接受退貨要求，請在結帳時，確認商品規格是否正確，再進行付款。</p>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-transparent border-0 collapse" id="ctmrServe" data-parent="#accordionHelp">
                        <div class="d-flex align-items-center justify-content-around bg-cloud p-4">
                            <span class="text-center">客服相關</span>
                        </div>
                        <div class="bg-cloud my-1 border-0 rounded mh-400">
                            <div class="card-body">
                                <h5 class="card-title bg-logoColor rounded text-white p-2">如何聯絡客服?</h5>
                                <p class="card-text px-2">點擊網站右上方「會員專區」，網頁左側會出現下拉式選單，點選選單中「幫助中心」→「聯絡我們」，按照提示步驟，填寫您的聯絡資料及問題，點擊「送出」，客服人員將會收到您的信件，並盡快為您提供服務。</p>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-transparent border-0 collapse" id="tmOfServe" data-parent="#accordionHelp">
                        <div class="d-flex align-items-center justify-content-around bg-cloud p-4">
                            <span class="text-center">服務條款</span>
                        </div>
                        <div class="bg-cloud my-1 border-0 rounded mh-400">
                            <div class="card-body">
                                <h5 class="card-title bg-logoColor rounded text-white p-2">服務條款聲明</h5>
                                <p class="card-text px-2">......</p>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-transparent border-0 collapse" id="pvcPoli" data-parent="#accordionHelp">
                        <div class="d-flex align-items-center justify-content-around bg-cloud p-4">
                            <span class="text-center">隱私條款</span>
                        </div>
                        <div class="bg-cloud my-1 border-0 rounded mh-400">
                            <div class="card-body">
                                <h5 class="card-title bg-logoColor rounded text-white p-2">隱私條款聲明</h5>
                                <p class="card-text px-2">......</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="toTop-arrow showw toTop" id="gotop"></button>
        </div>
    </div>
</div>
<?php include("template/footer.php"); ?>
<script src="js/allpage.js"></script>
<script>
    $(document).ready(function(){
        $('.helpMenuBtn').click(function () {
	        event.preventDefault();
	        var target = $(this).attr('href');
	        $('html,body').animate({ scrollTop: $(target).offset().top- 60 }, 800);
        });
        $('#helper_guide').click(function (event) {
	        event.stopPropagation();
        });
        $('.sideMenuBtn').click(function () {
            $('.menuBurger').toggleClass('MenuBtnOpen');
            $('.sideMenuBtnCall').toggleClass('ckx');
            $('.call').toggleClass('show');
        })
    });
</script>