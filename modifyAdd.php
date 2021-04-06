<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb modify</title>
    <?php include("template/bootstrapScript.php"); ?>
    <!-- color picker -->
    <script src="https://cdn.jsdelivr.net/npm/@jaames/iro@5.4.0/dist/iro.min.js"></script>
    <script src="js/iro.js"></script>
    <!-- css -->
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
                    <span style="text-align:center;">修改細項</span>
                </div>
                <form action="" method="post" class="bg-white my-1">
                    <div class="d-flex justify-content-center justify-content-md-between align-items-center px-3 py-1">
                        <span class="d-none d-md-flex align-items-end odflot pt-3">訂單遍號：<a href="#" class="text-primary">xxxxxxxxxx</a></span>
                        <div class="">
                            <!-- <a href="#" class="badge badge-secondary">第一次</a> -->
                            <!-- <a href="#" class="badge badge-light">第二次</a> -->
                            <a href="#" class="badge badge-secondary">第<?php echo "三" ?>次</a>
                        </div>
                        <div class="d-none d-md-flex align-items-end">
                            <span class="odflot">Name<span class="mx-1">設計師</span></span>
                            <img src="images/icon/designer2.png" alt="">
                        </div>
                    </div>
                    <div class="d-flex d-md-none justify-content-between align-items-center px-3 py-1">
                        <span class="odflot pt-3">訂單遍號：<a href="#" class="text-primary">xxxxxxxxxx</a></span>
                        <div class="d-flex align-items-end">
                            <span class="odflot">Name<span class="mx-1">設計師</span></span>
                            <img src="images/icon/designer2.png" alt="">
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center px-3 py-1 border-top">
                        <span class="odflot text-info">修改(2)完成</span>
                        <div class="odflot text-danger"><?php echo date("Y-m-d"); ?></div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-7 order-1 order-md-0 row form-group flex-column my-2 p-3 p-md-1">
                            <label for="company" class="mt-2"><span class="text-danger p-1">*</span>公司名稱</label>
                            <input type="text" class="form-control p-2" name="company" id="" placeholder="輸入您的公司名稱">
                            <label for="companySign" class="mt-2"><span class="text-danger p-1">*</span>公司口號/標語</label>
                            <input type="text" class="form-control p-2" name="companySign" id="" placeholder="輸入您的公司口號/標語">
                            <label for="companySign" class="mt-2"><span class="text-danger p-1">*</span>選擇顏色</label>
                            <div class="d-flex justify-content-start px-0">
                                <div class="badge badge-danger d-inline-block mr-2 chooColor"></div>
                                <div class="badge badge-info d-inline-block mr-2 chooColor"></div>
                                <div class="badge badge-warning d-inline-block mr-2 chooColor"></div>
                                <div class="badge badge-success d-inline-block mr-2 chooColor"></div>
                                <div class="badge badge-primary d-inline-block mr-2 chooColor"></div>
                                <!-- <button type="button" class="addColor btn d-flex align-items-center justify-content-center mr-2 border border-secondary" style="width: 60px; height:38px;" data-toggle="modal" data-target="#colorPkModal">+</button> -->
                                <button type="button" class="addColor btn d-flex align-items-center justify-content-center mr-2 border border-secondary chooColor" data-toggle="modal" data-target="#colorPk">+</button>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 order-0 order-md-1 p-5 p-md-4 p-lg-5 shadow m-0 m-md-5 mt-4 rounded">
                            <img src="images/AdobeStock_250566348 [轉換].svg" class="" alt="">
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <button type="submit" class="btn btn-outline-pink">送出修改</button>
                        <!-- <a href="modifyView.php" type="submit" class="btn btn-outline-pink">送出修改</a> -->
                    </div>
                    <!-- Modal color picker -->
                    <div class="modal fade" id="colorPk" tabindex="-1">
                        <div class="modal-dialog" style="max-width: 290px !important;">
                            <div class="modal-content" style="background: rgba(255, 255, 255, 0.8);">
                                <div id="boxPicker" class="mx-auto m-3" style="pointer-events: auto;" ></div>
                                <form class="d-flex flex-column align-items-center" method="post">
                                    <div id="values" class="mx-auto"></div>
                                    <div class="form-group col-12 d-flex align-items-center">
                                        <label for="hexInput" class="mb-0">Hex:</label>
                                        <input type="text" id="hexInput" class="form-control mx-1" placeholder="#"></input>
                                    </div>
                                    <div class="form-group col-12 mx-auto">
                                        <div class="" name="rgb">
                                            <div class="d-flex align-items-center">
                                                rgb(
                                                <input type="number" id="red" class="rgb-input form-control">
                                                ,
                                                <input type="number" id="green" class="rgb-input form-control">
                                                ,
                                                <input type="number" id="blue" class="rgb-input form-control">
                                                )
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-outline-primary col-4 mx-auto mb-2">送出</button>
                                </form>
                            </div>
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
