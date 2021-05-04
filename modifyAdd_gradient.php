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
        .swatch {
        height: 32px;
        margin: 4px 0;
        border-radius: 4px;
        }

        #colorList {
            list-style-type: none;
            padding: 0;
            margin: 0;
            margin-bottom: 12px;
            display: flex;
        }
    
        #colorList .swatch {
            border-radius: 0;
        }
    
        #colorList li {
            flex: 1;
        }
    
        #colorList li:first-child .swatch {
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }
    
        #colorList li:last-child .swatch{
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
        }

        #activeColor .swatch {
        width: 120px;
        }

        .readout {
            margin-top: 32px;
            line-height: 180%;
        }

        #values {
            font-family: monospace;
            line-height: 150%;
        }

        .link {
            margin-top: 16px;
        }
    
        .link a {
            color: MediumSlateBlue;
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
                                <input type="radio" id="colorCustom" name="companyColor" value="007bff" class="d-none">
                                <label for="colorCustom" class="btn d-flex align-items-center justify-content-center my-2 mr-0 mr-sm-2 border border-secondary chooColor" data-toggle="modal" data-target="#colorPk">+</label>
                            </div>
                            <label for="remark" class="mt-2">選色備註</label>
                            <textarea class="form-control" name="remark" id="remark" cols="30" rows="10"></textarea>
                        </div>
                        <div id="pdlogo" class="col-6 col-md-4 col-lg-3 order-0 order-lg-1 m-0 m-lg-5 mt-4 ">
                            <!-- <img src="images/logo5.svg" class="" alt=""> -->
                            <div class="d-flex flex-column rounded bg-0_8 p-5 p-lg-4 p-lg-5 shadow">
                                <small class="text-alert"></small>
                                <?php require_once( 'images/logo.svg.php' ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <button type="submit" class="btn btn-outline-logoColor">送出修改</button>
                    </div>
                </form>
                <!-- Modal color picker -->
                <div class="modal fade" id="colorPk" tabindex="-1">
                    <div class="modal-dialog mx-auto" style="max-width: 330px !important;">
                        <div class="modal-content bg-0_8">
                            <div id="colorPicker" class="mx-auto m-3" style="pointer-events: auto;" ></div>
                            <!-- <form class="d-flex flex-column align-items-center" method="post"> -->
                            <form id="colorValue" class="d-flex flex-column align-items-center">
                                <span>您選的顏色:</span>
                                <div id="colorList"></div>
                                <span>漸層色:</span>
                                <span id="colorGradient"></span>
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
// Create a new color picker instance
// https://iro.js.org/guide.html#getting-started
var colorPicker = new iro.ColorPicker("#colorPicker", {
  // color picker options
  // Option guide: https://iro.js.org/guide.html#color-picker-options
  width: 250,
  // Pure red, green and blue
  colors: [  
    "rgb(255, 0, 0)", // Pure red
    "rgb(0, 255, 0)", // Pure green
    // "rgb(0, 0, 255)", // Pure blue
  ],
  handleRadius: 9,
  borderWidth: 1,
  borderColor: "#fff",
});

const colorList = document.getElementById("colorList");

function setColor(colorIndex) {
  // setActiveColor expects the color index!
  colorPicker.setActiveColor(colorIndex);
}


// https://iro.js.org/guide.html#color-picker-events
colorPicker.on(["mount","color:change"], function(){
    colorList.innerHTML = '';
    colorPicker.colors.forEach(color => {
        const index = color.index;
        const hexString = color.hexString;
        colorList.innerHTML += `
            <li onClick="setColor(${ index })">
            <div class="swatch" style="background: ${ hexString }; width:100px;"></div>
            <span>${ hexString }</span>
            </li>
        `;
        var color1 = colorPicker.colors[0].hexString;
        var color2 = colorPicker.colors[1].hexString;
        colorGradient.innerHTML = `
            <div
                style="
                width: 100px;
                height: 35px;
                background: linear-gradient(to left,${ color2 },${ color1 }); 
                "
                class="rounded mb-3 colorShow"
            ></div>
        `;
    });
});
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
    var colorG = $('#colorGradient .colorShow').css('background');
    $('#colorCustom').next().css('background',colorG);
    // 關閉color picker
    $('#colorPk').modal('hide');
})

</script>
<?php include("template/footer.php"); ?>
<script src="js/allpage.js"></script>
