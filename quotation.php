<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb Home</title>
    <?php include("template/bootstrapScript.php"); ?>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="css/icon_animate.css">
    <link rel="stylesheet" href="css/quota.css">
    <!-- Material Design -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/material-icon.css">
</head>
<body>
<?php include("template/header.php"); ?>
<div class="container-fluid">
    <div class="container-sm mToTop">
        <div class="d-flex bg-cloud justify-content-between align-items-center my-3 px-3">
            <a onclick="history.back()" class=""><svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 0 24 24 " width="30px" fill="#FC9545"><path d="M0 0h24v24H0z" fill="none"/><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg>返回</a>
            <div>
                <svg id="shopFlow" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="shopFlowIconDload">
                    <path id="box" fill-rule="evenodd" clip-rule="evenodd" d="M40.6508 32.207L54.2417 35.8297L55.7808 36.9425V52.9012L54.9047 54.0377L40.3904 58.0392L25.8524 54.0377L25 52.9012V36.9425L26.4443 35.8297L40.0116 32.207H40.6508ZM40.4377 34.5748L30.9667 36.9425L32.269 37.4161L40.3904 39.5471L47.4936 37.6292L49.743 36.9425L40.4377 34.5748V34.5748ZM27.3678 52.0014L39.2065 55.2453V41.678L27.3678 38.5053V52.0014ZM41.5743 41.678V55.2453L53.413 52.0014V38.4342L48.6302 39.7436V45.8216L46.2624 46.4372V40.3924L41.5743 41.678Z" fill="#D5A178"/>
                    <path id="download" d="M46.2375 23.6486L41.75 26.7171V18H39.25V26.7171L34.7625 23.6486L33 24.8571L40.5 30L48 24.8571L46.2375 23.6486Z" fill="#D5A178"/>
                    </g>
                </svg>
            </div>
        </div>
        <div class="bg-cloud rounded p-3 table_bg"> <!-- table_bg可以換圖 -->
            <div class="d-flex align-items-center flex-column border-bottom pb-2">
                <div class="logo m-2"></div>
                <div class="">COMPANY</div>
            </div>
            <div class="row border-bottom bg-white py-2 ">
                <div class="col-3 col-md-2 text-right px-0 py-2">訂單編號：</div>
                <div class="col-3 col-md-4 text-left px-0 py-2">xxxxxxxxxx</div>
                <div class="col-3 col-md-2 text-right px-0 py-2">報價日期：</div>
                <div class="col-3 col-md-4 text-left px-0 py-2"></div>
                <div class="col-3 col-md-2 text-right px-0 py-2">公司名稱：</div>
                <div class="col-3 col-md-4 text-left px-0 py-2">OOOOOOOOOO</div>
                <div class="col-3 col-md-2 text-right px-0 py-2">列印日期：</div>
                <div class="col-3 col-md-4 text-left px-0 py-2"></div>
                <div class="col-3 col-md-2 text-right px-0 py-2">聯絡人：</div>
                <div class="col-3 col-md-4 text-left px-0 py-2">OOO</div>
                <div class="col-3 col-md-2 text-right px-0 py-2"></div>
                <div class="col-3 col-md-4 text-left px-0 py-2"></div>
            </div>
            <table class="table table-bordered p-2 my-2 bg-white">
                <tbody> 
                    <tr>
                        <th scope="col" class="text-center">項次</th>
                        <th scope="col" class="text-center">品名</th>
                        <th scope="col" class="text-center">規格</th>
                        <th scope="col" class="text-center">金額</th>
                        <th scope="col" class="text-center">小記</th>
                    </tr>
                    <tr>
                        <td class="text-center">.......</td>
                        <td class="text-center">.......</td>
                        <td class="text-center">.......</td>
                        <td class="text-center">.......</td>
                        <td class="text-center">.......</td>
                    </tr>
                    <tr>
                        <td class="text-center">.......</td>
                        <td class="text-center">.......</td>
                        <td class="text-center">.......</td>
                        <td class="text-center">.......</td>
                        <td class="text-center">.......</td>
                    </tr>
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="" colspan="2">總金額（未稅）：</td>
                    </tr>
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="" colspan="2">總金額（含稅）：</td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered bg-white p-2">
                <tr>
                    <th class="align-middle">備註</th>
                    <td>
                        <ol class="list-group list-group-flush list-group-numbered">
                            <li class="">訂單完成後，貴公司保有對稿件的修改權，且著作財產權歸貴公司所有；本公司則有完成稿件之公開展示權及複製權。</li>
                            <li class="">本報價單經雙方確認簽章後，即為正式訂單，具有法律效力。</li>
                        </ol>
                    </td>
                </tr>
            </table>
            <table class="table table-bordered bg-white p-2">
                <tbody>
                    <tr>
                        <td>客戶確認</td>
                        <td>OOOOO LOGO設計販售平台</td>
                    </tr>
                    <tr>
                        <td rowspan="3"></td>
                        <td>聯絡電話：</td>
                    </tr>
                    <tr>
                        <td>客服信箱：</td>
                    </tr>
                    <tr>
                        <td>統一編號：</td>
                    </tr>
                    <tr>
                        <td>日期：</td>
                        <td>公司地址：</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include("template/footer.php"); ?>
<script src="js/allpage.js"></script>