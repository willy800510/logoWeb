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
<?php include("template/header.php"); ?>
<div class="container-fluid">
    <div class="container">
        <div class="row mToTop">
        <!-- 左導覽 -->
            <?php include("template/leftbar.php"); ?>
        <!-- 右主欄 -->
            <div class="col-12 col-xl-10 px-0 px-xl-3">
                <div class="d-flex align-items-center justify-content-around bg-white p-4">
                    <span class="text-center">個人資訊</span>
                </div>
                <form action="" class="bg-white my-1">
                    <div class="text-center p-3">基本資料</div>
                    <div class="form-group row d-flex align-items-stretch text-center">
                        <div class="col-12 col-md-9 p-2 p-md-5">
                            <div class="form-group row px-5 mb-4 d-flex d-md-none flex-column align-items-center">
                                <img src="images/headerIcon/usery.svg" width="25px" alt="" class="logoIcon p-2 m-3">
                                <!-- <input type="file" class="form-control-file" id="photoUpload"> -->
                                <button class="btn btn-outline-success col-2">更換</button>
                            </div>
                            <div class="form-group row my-2">
                                <label for="member" class="col-4">會員代號</label>
                                <input type="text" name="member" value="member" class="col-6 form-control p-2">
                            </div>
                            <div class="form-group row my-2">
                                <label for="myName" class="col-4">真實姓名</label>
                                <input type="text" class="col-3 form-control" name="myName" placeholder="名字">
                                <input type="text" class="col-3 form-control" name="myName" placeholder="姓氏">
                            </div>
                            <div class="form-group row my-2">
                                <label for="phone" class="col-4">聯絡電話</label>
                                <input type="text" name="phone" class="col-6 form-control p-2" placeholder="09xx-xxx-xxx">
                                <img src="images/icon/add.svg" width="35px" height="35px" class="col-2" alt="">
                            </div>
                            <div class="form-group row my-2">
                                <label for="email" class="col-4">電子郵件</label>
                                <input type="email" name="email" class="col-6 form-control p-2" placeholder="name@logoweb.com">
                                <img src="images/icon/add.svg" width="35px" height="35px" class="col-2" alt="">
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
                            <button type="submit" class="btn btn-outline-primary my-4">更新</button>
                        </div>
                        <div class="col-md-3 text-center d-none d-md-flex flex-column justify-content-center align-items-center">
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