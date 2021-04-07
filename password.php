<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb info</title>
    <?php include("template/bootstrapScript.php"); ?>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/leftbar.css">
    <link rel="stylesheet" href="css/account.css">
    <?php include("template/materialDesign.php"); ?>
</head>
<body>
<?php
    include("template/header.php");
?>
<div class="container-fluid">
    <div class="container">
        <div class="row mToTop">
        <!-- 左導覽 -->
            <?php include("template/leftbar.php"); ?>
        <!-- 右主欄 -->
            <div class="col-12 col-xl-10 px-0 px-xl-3">
                <div class="d-flex align-items-center justify-content-around bg-cloud p-4">
                    <span class="text-center">密碼變更</span>
                </div>
                <form action="" class="bg-cloud my-1 rounded" method="post">
                    <div class="text-center p-3 text-alert">小提醒：請不要與他人分享密碼</div>
                    <div class="form-group row d-flex align-items-stretch text-center">
                        <div class="col-12 col-lg-9 p-5">
                            <div class="form-group row my-2 align-items-center">
                                <label for="pwNow" class="col-4 col-lg-3">現在密碼</label>
                                <div class="input-group col-8">
                                    <input type="password" name="pwNow" value="<?php echo"**********" ?>" class="form-control" style="border-right: 0;">
                                    <div class="input-group-append">
                                        <img src="images/icon/eye/closed.svg" alt="" class="eye input-group-text" style="border-left: 0; background-color:white;">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row my-2 align-items-center">
                                <label for="newPW" class="col-4 col-lg-3">新的密碼</label>
                                <div class="input-group col-8">
                                    <input type="password" name="newPW" class="form-control" placeholder="新的密碼" style="border-right: 0;">
                                    <div class="input-group-append">
                                        <img src="images/icon/eye/closed.svg" alt="" class="eye input-group-text" style="border-left: 0; background-color:white;">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row my-2 align-items-center">
                                <label for="newPwConfirm" class="col-4 col-lg-3">再次確認</label>
                                <div class="input-group col-8">
                                    <input type="password" name="newPwConfirm" class="form-control" placeholder="請輸入至少6位數" style="border-right: 0;">
                                    <div class="input-group-append">
                                        <img src="images/icon/eye/closed.svg" alt="" class="eye input-group-text" style="border-left: 0; background-color:white;">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row my-5 d-flex d-lg-none justify-content-around">
                                <button type="submit" class="btn btn-outline-success col-4">確認變更</button>
                            </div>
                        </div>
                        <div class="col-3 text-center d-none d-lg-flex flex-column justify-content-center align-items-center">
                            <!-- <input type="file" class="form-control-file" id="photoUpload"> -->
                            <button class="btn btn-outline-success">確認變更</button>
                        </div>
                    </div>
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
    });
</script>