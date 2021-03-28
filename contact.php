<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb contact</title>
    <?php
        include("template/bootstrapScript.php");
    ?>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/leftbar.css">
    <link rel="stylesheet" href="css/account.css">
</head>
<body>
<?php
    include("template/header.php");
?>
<div class="container-fluid">
    <div class="container-sm">
        <div class="row" style="margin-top: 70px;">
        <!-- 左導覽 -->
            <?php include("template/leftbar.php"); ?>
        <!-- 右主欄 -->
            <div class="col-12 col-xl-10 px-0 px-xl-3">
                <div class="d-flex align-items-center justify-content-around bg-white p-4">
                    <span style="text-align:center;">聯絡我們</span>
                </div>
                <form action="" class="bg-white my-1 contactForm" method="post">
                    <div class="form-group p-3">
                        <span class="text-danger d-block"><span class="text-danger pr-1">*</span>號為必填項目</span>
                        <label for="useName" class="mt-2"><span class="text-danger pr-1">*</span>姓名</label>
                        <input type="text" class="form-control col-6" name="useName" id="">
                        <label for="phone" class="mt-2"><span class="text-danger pr-1">*</span>電話</label>
                        <input type="text" class="form-control col-6" name="phone" id="">
                        <label for="mail" class="mt-2"><span class="text-danger pr-1">*</span>E-mail</label>
                        <input type="text" class="form-control col-6" name="mail" id="">
                        <label for="quest" class="mt-2"><span class="text-danger pr-1">*</span>問題類別</label>
                        <select name="quest" id="" class="form-control col-6">
                            <option value="">----購買問題（退換）----</option>
                            <option value="">----金流刷卡問題----</option>
                            <option value="">----修改相關疑問----</option>
                            <option value="">----其他----</option>
                            <option value="">----購買問題（退換）----</option>
                            <option value="">----購買問題（退換）----</option>
                            <option value="">----金流刷卡問題----</option>
                            <option value="">----修改相關疑問----</option>
                            <option value="">----其他----</option>
                            <option value="">----購買問題（退換）----</option>
                        </select>
                        <label for="orderNum" class="mt-2"><span class="text-danger pr-1">*</span>訂單編號（如已建立訂單）</label>
                        <input type="text" class="form-control col-6" name="orderNum" id="">
                        <label for="content" class="mt-2"><span class="text-danger pr-1">*</span>說明敘述</label>
                        <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-outline-primary col-3" id="contSend">送出</button>
                        </div>
                    </div>
                </form>
                <div class="bg-white text-center py-3 my-1 sendSuccess">
                    <i class="far fa-check-circle fa-3x p-2" style="color: #FF9292;"></i>
                    <h4>表單送出成功</h4>
                    <h4>我們將盡快與您聯絡</h4>
                    <h4>謝謝</h4>
                    <button type="submit" class="btn btn-outline-pink col-3">返回</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include("template/footer.php");
?>
<script>
    $(document).ready(function(){
    });
</script>