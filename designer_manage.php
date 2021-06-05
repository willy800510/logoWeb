<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>logoWeb designer</title>
	<?php include("template/bootstrapScript.php"); ?>
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/banner.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/account.css">
	<link rel="stylesheet" href="css/designer.css">
</head>

<body>
	<?php include("template/header.php"); ?>

	<div class="container-fluid mToTop designer-content">
		<div class="container-sm pb-3 pb-xl-1">
			<h5 class="bg-white p-4 text-center mb-1">訂單管理</h5>
			<div class="bg-white px-sm-4 px-lg-5 pb-4 pb-lg-5">
				<div class="text-center pt-3 pb-4">
					<img src="images/icon/designer3.png" alt="" style="width:120px">
				</div>
				<div class="row my-3">
					<h6 class="col-3 text-center">商品</h6>
					<h6 class="col-3 text-center">訂單編號</h6>
					<h6 class="col-3 text-center">目前狀態</h6>
					<h6 class="col-3 text-center">動作</h6>
				</div>
				<div class="row border-top border-secondary">
					<div class="col-3 d-flex justify-content-center align-items-center "><img src="images/logo.svg" alt="" class="logoIcon p-2"></div>
					<div class="col-3 d-flex justify-content-center align-items-center">
						xxxxxxxxxx
					</div>
					<div class="col-3 d-flex justify-content-center align-items-center text-info">尚未新增修改內容</div>
					<div class="col-3 d-flex justify-content-center align-items-center ">
						<a href="designer_details.php" class="btn btn-outline-secondary disabled">查看修改</a>
					</div>
				</div>
				<div class="row border-top border-secondary">
					<div class="col-3 d-flex justify-content-center align-items-center "><img src="images/logo.svg" alt="" class="logoIcon p-2"></div>
					<div class="col-3 d-flex justify-content-center align-items-center">
						xxxxxxxxxx
					</div>
					<div class="col-3 d-flex justify-content-center align-items-center text-info">客戶新增修改 (1)</div>
					<div class="col-3 d-flex justify-content-center align-items-center ">
						<a href="designer_details.php" class="btn btn-outline-primary">查看修改</a>
					</div>
				</div>
				<div class="row border-top border-secondary">
					<div class="col-3 d-flex justify-content-center align-items-center "><img src="images/logo.svg" alt="" class="logoIcon p-2"></div>
					<div class="col-3 d-flex justify-content-center align-items-center">
						xxxxxxxxxx
					</div>
					<div class="col-3 d-flex justify-content-center align-items-center text-info">修改 (1) 等待確認</div>
					<div class="col-3 d-flex justify-content-center align-items-center ">
						<a href="designer_details.php" class="btn btn-outline-primary">查看修改</a>
					</div>
				</div>
				<div class="row border-top border-secondary">
					<div class="col-3 d-flex justify-content-center align-items-center "><img src="images/logo.svg" alt="" class="logoIcon p-2"></div>
					<div class="col-3 d-flex justify-content-center align-items-center">
						xxxxxxxxxx
					</div>
					<div class="col-3 d-flex justify-content-center align-items-center text-info">修改 (2) 尚未上傳</div>
					<div class="col-3 d-flex justify-content-center align-items-center ">
						<a href="designer_details.php" class="btn btn-outline-primary">查看修改</a>
					</div>
				</div>
				<div class="row border-top border-secondary">
					<div class="col-3 d-flex justify-content-center align-items-center "><img src="images/logo.svg" alt="" class="logoIcon p-2"></div>
					<div class="col-3 d-flex justify-content-center align-items-center">
						xxxxxxxxxx
					</div>
					<div class="col-3 d-flex justify-content-center align-items-center text-info">修改 (3) 確認</div>
					<div class="col-3 d-flex justify-content-center align-items-center ">
						<a href="designer_details.php" class="btn btn-success disabled">訂單完成</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include("template/footer.php"); ?>