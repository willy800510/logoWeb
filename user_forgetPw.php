<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb log</title>
    <?php
        include("template/bootstrapScript.php");
    ?>
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
<?php
    include("template/header.php");
?>
<div class="container-fluid">
    <div class="container-sm mb-1 mToTop">
        <div class="card m-auto justify-content-between py-4 cardSize">
            <a href="index.php" class="logo mx-auto mt-4 logoSize"></a>
            <h3 class="card-title mx-auto mt-3 font-weight-normal">COMPANY</h3>
            <small class="text-alert mx-auto">重設密碼</small>
            <div class="d-flex flex-column align-items-center mt-3">
                <small class="text-alert p-1">我們會發送一封郵件至您的信箱</small>
                <small class="text-alert p-1">若在收件夾未找到郵件</small>
                <small class="text-alert p-1">請至垃圾信件夾搜尋</small>
            </div>
            <div class=" d-flex flex-column justify-content-center">
                <form action="" class="form-group row flex-column align-items-center">
                    <input type="email" class="form-control my-2 col-8" placeholder="Email">
                    <div class="elem-group col-9 ">
                        <label for="captcha"><small>Please Enter the Captcha Text</small></label>
                        <div class="d-flex align-items-center">
                            <input type="text" id="captcha" name="captcha_challenge" pattern="[A-Z]{6}" class="form-control col-6 p-2" placeholder="輸入驗證碼">
                            <img src="captcha.php" alt="CAPTCHA" class="captcha-image p-1"><i class="fas fa-sync-alt refresh-captcha"></i>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-pink my-2">送出</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    include("template/footer.php");
?>
<script>
    $(document).ready(function(){
        $(".eye").mousedown(function(){
            $(this).attr("src", "images/icon/eye/open.svg");
            $(this).parent().prev().attr("type", "text");
        });    
        $(".eye").mouseup(function(){
            $(this).attr("src", "images/icon/eye/closed.svg");
            $(this).parent().prev().attr("type", "password");
        });
        $(".fa-facebook-f").hover(
            function(){
                $(".fbIcon").addClass("fbColor");
            },
            function(){
                $(".fbIcon").removeClass('fbColor');
            }
        )
    });
    var refreshButton = document.querySelector(".refresh-captcha");
        refreshButton.onclick = function() {
        document.querySelector(".captcha-image").src = 'captcha.php?' + Date.now();
    }
</script>