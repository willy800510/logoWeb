<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb log</title>
    <?php include("template/bootstrapScript.php"); ?>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="css/carousel.css">
    <?php include("template/materialDesign.php"); ?>
</head>
<body>
<?php include("template/header.php"); ?>
<div class="container-fluid">
    <div class="container-sm mb-1 mToTop">
        <div class="card m-auto justify-content-between cardSize bg-cloud">
            <a href="index.php" class="logo mx-auto mt-4 logoSize"></a>
            <h3 class="card-title mx-auto mt-3 font-weight-normal">COMPANY</h3>
            <div class=" d-flex flex-column justify-content-center">
                <form action="" class="form-group row flex-column align-items-center">
                    <input type="text" class="form-control my-2 col-9" placeholder="Email/電話號碼/使用者名稱">
                    <div class="input-group justify-content-center my-2 p-0-50">
                        <input type="password" class="form-control border-right-0" placeholder="密碼">
                        <div class="input-group-append">
                            <img src="images/icon/eye/closed.svg" alt="" class="eye input-group-text border-left-0 bg-white">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-logoColor my-2 px-3">登入</button>
                </form>
            </div>
            <a href="user_forgetPw.php" class="text-black-50 mx-auto"><small>忘記密碼</small></a>
            <a href="user_regist.php" class="text-black-50 mx-auto"><small><span class="text-dark">還是新朋友？</span>馬上註冊</small></a>
            <div class="badge text-black-50 p-2">————————社群帳號快速登入————————</div>
            <div class="d-flex justify-content-center community rounded-bottom">
                <span class="fbIcon">
                    <i class="fab fa-facebook-f fa-2x d-inline-block p-3"></i>
                </span>
                <i class="fab fa-google fa-2x d-inline-block p-3"></i>
            </div>
        </div>
    </div>
</div>
<?php include("template/footer.php"); ?>
<script src="js/allpage.js"></script>
<script src="js/account.js"></script>