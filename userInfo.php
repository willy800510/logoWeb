<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb user info</title>
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
<?php include("template/header-logoCenter.php"); ?>
<div class="container-fluid">
    <div class="container">
        <div class="row mToTop">
        <!-- 左導覽 -->
            <?php include("template/leftbar.php"); ?>
        <!-- 右主欄 -->
            <div class="col-12 col-xl-10 px-0 px-xl-3">
                <div class="d-flex align-items-center justify-content-around bg-cloud p-4">
                    <span class="text-center">個人資訊</span>
                </div>
                <form action="" class="bg-cloud rounded my-1">
                    <div class="text-center p-3">基本資料</div>
                    <div class="form-group row d-flex text-center" style="min-height: 520px;">
                        <div class="col-12 col-md-9 p-2 p-md-5">
                            <div class="form-group row px-5 mb-4 d-flex d-md-none flex-column align-items-center">
                                <img src="images/headerIcon/usery.svg" width="25px" alt="" class="logoIcon p-2 mb-3">
                                <!-- <input type="file" class="form-control-file" id="photoUpload"> -->
                                <button class="btn btn-outline-success col-4 col-sm-3">更換</button>
                            </div>
                            <div class="form-group row my-2">
                                <label for="member" class="col-4">會員代號</label>
                                <input type="text" name="member" value="member" class="col-6 form-control p-2">
                            </div>
                            <div class="form-group row my-2">
                                <label for="myName" class="col-4">真實姓名</label>
                                <div class="col-6 d-flex justify-content-between">
                                    <input type="text" class="form-control mr-1" name="myName" placeholder="名字">
                                    <input type="text" class="form-control" name="myName" placeholder="姓氏">
                                </div>
                            </div>
                            <div class="form-group row my-2">
                                <label for="phone" class="col-4">聯絡電話</label>
                                <div class="col-6">
                                    <input type="text" name="phone" class="col-12 form-control p-2" placeholder="09xx-xxx-xxx">
                                    <input type="text" name="phone" class="col-12 form-control p-2 mt-2 phone d-none" placeholder="09xx-xxx-xxx">
                                </div>
                                <img width="35px" height="35px" class="col-2 add addBtn" alt="">
                            </div>
                            <div class="form-group row my-2">
                                <label for="email" class="col-4">電子郵件</label>
                                <div class="col-6">
                                    <input type="email" name="email" class="col-12 form-control p-2" placeholder="name@logoweb.com">
                                    <input type="email" name="email" class="col-12 form-control p-2 mt-2 mail d-none" placeholder="name@logoweb.com">
                                </div>
                                <img width="35px" height="35px" class="col-2 add addBtn" alt="">
                            </div>
                            <div class="form-group row my-2">
                                <label for="local" class="col-4">所在地</label>
                                <select class="form-control col-6" id="local">
                                    <option>台北市</option>
                                    <option>新北市</option>
                                    <option>桃園市</option>
                                    <option>新竹市</option>
                                    <option>苗栗市</option>
                                    <option>台中市</option>
                                    <option>彰化縣</option>
                                    <option>雲林縣</option>
                                    <option>嘉義市</option>
                                    <option>台南市</option>
                                    <option>高雄市</option>
                                    <option>屏東市</option>
                                    <option>宜蘭市</option>
                                    <option>花蓮縣</option>
                                    <option>台東縣</option>
                                    <option>南投市</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-outline-logoColor my-4 px-3">更新</button>
                        </div>
                        <div class="col-md-3 text-center d-none d-md-flex flex-column mg-70 align-items-center">
                            <img src="images/headerIcon/usery.svg" width="25px" alt="" class="logoIcon p-2 m-3">
                            <!-- <input type="file" class="form-control-file" id="photoUpload"> -->
                            <button class="btn btn-outline-success">更換</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("template/footer.php"); ?>
<script>
    $(document).ready(function(){
        $('.addBtn').click(function(){
            $(this).toggleClass('minus')
            $(this).toggleClass('mt-auto')
            if($(this).siblings('.col-6').children('.form-control').hasClass('mail')){
                $('.mail').toggleClass('d-none','d-block')
            }else{
                $('.phone').toggleClass('d-none','d-block')
            }
        })
    })
</script>