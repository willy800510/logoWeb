<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb contact</title>
    <?php include("template/bootstrapScript.php"); ?>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/leftbar.css">
    <link rel="stylesheet" href="css/account.css">
    <?php include("template/materialDesign.php"); ?>
    <style>
        .sendSuccess { display: none; }
    </style>
</head>
<body>
<?php include("template/header.php"); ?>
<div class="container-fluid">
    <div class="container-sm">
        <div class="row mToTop">
        <!-- 左導覽 -->
            <?php include("template/leftbar.php"); ?>
        <!-- 右主欄 -->
            <div class="col-12 col-xl-10 px-0 px-xl-3">
                <div class="d-flex align-items-center justify-content-around bg-cloud p-4">
                    <span class="text-center">聯絡我們</span>
                </div>
                <form action="getContact.php" method="post" id="contactForm" class="bg-cloud my-1 needs-validation rounded" novalidate>
                    <div class="form-group p-3">
                        <span class="text-alert d-block"><span class="text-alert pr-1">*</span>號為必填項目</span>
                        <div class="position-relative">
                            <label for="useName" class="mt-2"><span class="text-alert pr-1">*</span>姓名</label>
                            <input type="text" class="form-control col-6" name="useName" id="" required>
                            <span class="invalid-feedback position-absolute" style="bottom: 0;left: 51%;">請填寫姓名</span>
                        </div>
                        <div class="position-relative">
                            <label for="phone" class="mt-2"><span class="text-alert pr-1">*</span>電話</label>
                            <input type="text" class="form-control col-6" name="phone" id="" required>
                            <span class="invalid-feedback position-absolute" style="bottom: 0;left: 51%;">請填寫電話</span>
                        </div>
                        <div class="position-relative">
                            <label for="mail" class="mt-2"><span class="text-alert pr-1">*</span>E-mail</label>
                            <input type="email" class="form-control col-6" name="mail" id="" required>
                            <span class="invalid-feedback position-absolute" style="bottom: 0;left: 51%;">請輸入正確Email格式</span>
                        </div>
                        <div class="position-relative">
                            <label for="quest" class="mt-2"><span class="text-alert pr-1">*</span>問題類別</label>
                            <select name="quest" id="" class="form-control col-6" required>
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
                            <span class="invalid-feedback position-absolute" style="bottom: 0;left: 51%;">請選擇問題類別</span>
                        </div>
                        <div class="position-relative">
                            <label for="orderNum" class="mt-2"><span class="text-alert pr-1">*</span>訂單編號（如已建立訂單）</label>
                            <input type="text" class="form-control col-6" name="orderNum" id="" required>
                            <span class="invalid-feedback position-absolute" style="bottom: 0;left: 51%;">請填寫訂單編號</span>
                        </div>
                        <div class="position-relative">
                            <label for="content" class="mt-2"><span class="text-alert pr-1">*</span>說明敘述</label>
                            <textarea name="content" id="" cols="30" rows="10" class="form-control" required></textarea>
                            <span class="invalid-feedback position-absolute" style="top: 100%; right: 0;">請敘述您的問題</span>
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-outline-primary col-3" id="contSend">送出</button>
                        </div>
                    </div>
                </form>
                <div class="bg-cloud text-center py-3 my-1 sendSuccess">
                    <span class="material-icons md-48 p-2 text-color2">check_circle_outline</span>
                    <h4>表單送出成功</h4>
                    <h4>我們將盡快與您聯絡</h4>
                    <h4>謝謝</h4>
                    <button type="submit" class="btn btn-outline-orange col-3">返回</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        $('#contactForm').submit(function(){
            var form = document.getElementById('contactForm');
            form.classList.add('was-validated');
            if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
            }else{
                event.preventDefault();
                $.ajax({
                    url:'getContact.php', //送資料到此頁面處理，成功的話會回傳1
                    type:'post',
                    data:$('#contactForm').serialize(),
                    error:function(){
                        alert('傳送失敗!');
                    },
                    success:function(result){
                        if(result==1){
                            $('#contactForm').slideUp(400,function(){
                                $('.sendSuccess').delay(200).fadeIn(800);
                            });
                        }else{
                            alert('發生錯誤!');
                        }
                    }
                })
            }
        })
    })
</script>
<?php include("template/footer.php"); ?>