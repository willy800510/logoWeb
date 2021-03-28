<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb order</title>
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
            <div class="col-12 col-xl-10 mb-3 px-0 px-xl-3">
                <div class="d-flex align-items-center justify-content-around bg-white p-4">
                    <span style="text-align:center;">我的收藏</span>
                </div>
                <div class="row justify-content-between my-1">
                    <div class="col-6 col-md-auto d-flex flex-column align-items-center mb-1 mb-md-2 mb-xl-1">
                        <div class="bg-white p-md-4 text-center rounded bmlogo ">
                            <img src="images/AdobeStock_250566348 [轉換].svg" width="140px" alt="" class="p-2 m-2 cardImg">
                            <div class="d-flex m-1 flex-column flex-md-row justify-content-center">
                                <button class="btn btn-outline-danger px-3 mx-2 my-1 order-1 order-md-0" onclick="return confirm('確認取消？')">取消收藏</button>
                                <button class="btn btn-info mx-2 my-1 order-0 order-md-1">加入購物車</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-auto d-flex flex-column align-items-center mb-1 mb-md-2 mb-xl-1">
                        <div class="bg-white p-md-4 text-center rounded bmlogo ">
                            <img src="images/AdobeStock_250566348 [轉換].svg" width="140px" alt="" class="p-2 m-2">
                            <div class="d-flex m-1 flex-column flex-md-row justify-content-center">
                                <button class="btn btn-outline-danger px-3 mx-2 my-1 order-1 order-md-0" onclick="return confirm('確認取消？')">取消收藏</button>
                                <button class="btn btn-info mx-2 my-1 order-0 order-md-1">加入購物車</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-auto d-flex flex-column align-items-center mb-1 mb-md-2 mb-xl-1">
                        <div class="bg-white p-md-4 text-center rounded bmlogo ">
                            <img src="images/AdobeStock_250566348 [轉換].svg" width="140px" alt="" class="p-2 m-2">
                            <div class="d-flex m-1 flex-column flex-md-row justify-content-center">
                                <button class="btn btn-outline-danger px-3 mx-2 my-1 order-1 order-md-0" onclick="return confirm('確認取消？')">取消收藏</button>
                                <button class="btn btn-info mx-2 my-1 order-0 order-md-1">加入購物車</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-auto d-flex flex-column align-items-center mb-1 mb-md-2 mb-xl-1">
                        <div class="bg-white p-md-4 text-center rounded bmlogo ">
                            <img src="images/AdobeStock_250566348 [轉換].svg" width="140px" alt="" class="p-2 m-2">
                            <div class="d-flex m-1 flex-column flex-md-row justify-content-center">
                                <button class="btn btn-outline-danger px-3 mx-2 my-1 order-1 order-md-0" onclick="return confirm('確認取消？')">取消收藏</button>
                                <button class="btn btn-info mx-2 my-1 order-0 order-md-1">加入購物車</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-auto d-flex flex-column align-items-center mb-1 mb-md-2 mb-xl-1">
                        <div class="bg-white p-md-4 text-center rounded bmlogo ">
                            <img src="images/AdobeStock_250566348 [轉換].svg" width="140px" alt="" class="p-2 m-2">
                            <div class="d-flex m-1 flex-column flex-md-row justify-content-center">
                                <button class="btn btn-outline-danger px-3 mx-2 my-1 order-1 order-md-0" onclick="return confirm('確認取消？')">取消收藏</button>
                                <button class="btn btn-info mx-2 my-1 order-0 order-md-1">加入購物車</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-auto d-flex flex-column align-items-center mb-1 mb-md-2 mb-xl-1">
                        <div class="bg-white p-md-4 text-center rounded bmlogo ">
                            <img src="images/AdobeStock_250566348 [轉換].svg" width="140px" alt="" class="p-2 m-2">
                            <div class="d-flex m-1 flex-column flex-md-row justify-content-center">
                                <button class="btn btn-outline-danger px-3 mx-2 my-1 order-1 order-md-0" onclick="return confirm('確認取消？')">取消收藏</button>
                                <button class="btn btn-info mx-2 my-1 order-0 order-md-1">加入購物車</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center bg-white py-3">
                    <button class="btn btn-outline-primary">前往購物袋</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include("template/footer.php");
?>