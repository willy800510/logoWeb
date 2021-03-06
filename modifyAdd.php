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
    <style>
        input[name="companyColor"]:checked+.chooColor {
            border: 2px solid #FF4141 !important;
        }
        .colorBox.invalid{
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(.375em + .1875rem) center;
            background-size: calc(.75em + .375rem) calc(.75em + .375rem);
            padding-left: .5rem !important;
        }
    </style>
</head>
<body data-no="5">
<?php include("template/header.php"); ?>
<div class="container-fluid">
    <div class="container">
        <div class="row mToTop">
        <!-- 左導覽 -->
            <?php include("template/leftbar.php"); ?>
        <!-- 右主欄 -->
            <div class="col-12 col-xl-10 px-0 px-xl-3">
                <div class="d-flex align-items-center justify-content-around bg-cloud p-4">
                    <span class="text-center">修改細項</span>
                </div>
                <form action="modifyView.php" method="post" id="modifyForm" class="bg-cloud rounded my-1 needs-validation" novalidate>
                    <div class="d-flex justify-content-center justify-content-lg-between align-items-center px-3 py-1">
                        <span class="d-none d-lg-flex align-items-end odflot pt-3">訂單遍號：<a href="orderNum.php" class="text-primary" target="_blank">xxxxxxxxxx</a></span>
                        <div class="">
                            <!-- <a href="#" class="badge badge-secondary">第一次</a> -->
                            <!-- <a href="#" class="badge badge-light">第二次</a> -->
                            <a href="#" class="badge badge-logoColor active">第<?php echo "三" ?>次</a>
                        </div>
                        <div class="d-none d-lg-flex align-items-end">
                            <span class="odflot">Name<span class="mx-1">設計師</span></span>
                            <img src="images/icon/designer2.png" alt="">
                        </div>
                    </div>
                    <div class="d-flex d-lg-none justify-content-between align-items-center px-3 py-1">
                        <span class="odflot pt-3">訂單遍號：<a href="orderNum.php" class="text-primary" target="_blank">xxxxxxxxxx</a></span>
                        <div class="d-flex align-items-end">
                            <span class="odflot">Name<span class="mx-1">設計師</span></span>
                            <img src="images/icon/designer2.png" alt="">
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center px-3 py-1 border-top border-white">
                        <span class="odflot text-logoColor-2">修改(2)完成</span>
                        <div class="odflot text-alert"><?php echo date("Y-m-d"); ?></div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-7 order-1 order-lg-0 row form-group flex-column my-2 p-3 p-lg-1">
                            <label for="company" class="mt-2"><span class="text-danger p-1">*</span>公司名稱</label>    
                            <input type="text" class="form-control p-2" name="company" id="" placeholder="輸入您的公司名稱" required>
                            <label for="companySign" class="mt-2"><span class="text-danger p-1">*</span>公司口號/標語</label>
                            <input type="text" class="form-control p-2" name="companySign" id="" placeholder="輸入您的公司口號/標語" required>
                            <!-- <label class="mt-2"><span class="text-danger p-1">*</span>選擇顏色</label> -->
                            <div class="mt-2">嘗試看看其他顏色吧</div>
                            <div class="d-flex flex-wrap justify-content-between justify-content-sm-start px-0 colorBox">
                                <input type="radio" id="colorCustom" name="companyColor" value="" class="d-none">
                                <label for="colorCustom" class="btn d-flex align-items-center justify-content-center my-2 mr-0 mr-sm-2 border border-secondary chooColor" data-toggle="modal" data-target="#colorPk">+</label>
                            </div>
                            <label for="remark" class="mt-2">選色備註</label>
                            <textarea class="form-control" name="remark" id="remark" cols="30" rows="10"></textarea>
                        </div>
                        <div id="pdlogo" class="col-6 col-md-4 col-lg-3 order-0 order-lg-1 m-0 m-lg-5 mt-4 ">
                            <!-- <img src="images/logo5.svg" class="" alt=""> -->
                            <div class="d-flex flex-column rounded bg-0_8 p-5 p-lg-4 p-lg-5 shadow">
                                <small class="text-alert"></small>
                                <?php require_once( 'images/logo5.svg.php' ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <button type="submit" class="btn btn-outline-logoColor">送出修改</button>
                    </div>
                </form>
                <!-- Modal color picker -->
                <div class="modal fade" id="colorPk" tabindex="-1">
                    <div class="modal-dialog mx-auto" style="max-width: 290px !important;">
                        <div class="modal-content bg-0_8">
                            <div id="boxPicker" class="mx-auto m-3" style="pointer-events: auto;" ></div>
                            <!-- <form class="d-flex flex-column align-items-center" method="post"> -->
                            <form id="colorValue" class="d-flex flex-column align-items-center">
                                <div id="values" class="mx-auto"></div>
                                <div class="form-group col-12 d-flex align-items-center">
                                    <label for="hexInput" class="mb-0">Hex:</label>
                                    <input type="text" id="hexInput" class="form-control mx-1" placeholder="#"></input>
                                </div>
                                <div class="form-group col-12 mx-auto">
                                    <div name="rgb">
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
                                <button id="colorDecide" type="submit" class="btn btn-outline-primary col-4 mx-auto mb-2">送出</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // 提交修改表單
    $('#modifyForm').submit(function(){
        var form = document.getElementById('modifyForm');
        var companyColor = document.getElementById('colorRed');
        form.classList.add('was-validated');
        if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
            if(companyColor.checkValidity() === false) {
                $('.colorBox').addClass('border border-danger rounded invalid');
            }
        }
    })

    // 嘗試其他顏色的色塊，預設圖檔的顏色（目前只有辦法一種顏色）
    // var colorDefault = $('#pdlogo svg .cls-1').css('fill');
    // $(".chooColor").css('background-color',colorDefault)
    
    // 選擇顏色
    $('.chooColor').on('click',function(){
        $('.colorBox').removeClass('border border-danger rounded invalid');
        $(".chooColor").off("click");
    })
    // 提交color picker的表單
    $('#colorValue').submit(function(){
        // 不送出表單
        event.preventDefault();
        // 將自訂的顏色放入要送出的表單，並改變標籤顏色
        var color = $('#hexInput').val();
        $('#colorCustom').val(color);
        $('#colorCustom').next().css('background-color',color);
        // $('#pdlogo svg .cls-1').css('fill',color);

        // 判斷顏色深淺，決定"+"是黑/白色
        var grayLevel = $('#red').val() * 0.299 + $('#green').val() * 0.587 + $('#blue').val() * 0.114;
        console.log(grayLevel);
        if (grayLevel >= 192) {
            $('#colorCustom').next().css('color','#000000');
            // $("#pdlogo").css('background-color','rgb(0,0,0,0.8)')
        } else {
            $('#colorCustom').next().css('color','#ffffff');
            // $("#pdlogo").css('background-color','#ffffff')
        }
        // 關閉color picker
        $('#colorPk').modal('hide');
    })

</script>
<?php include("template/footer.php"); ?>
<script src="js/allpage.js"></script>
