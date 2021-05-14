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

	<div class="container-fluid designer-content mToTop">
		<div class="container-sm pb-3 pb-xl-1">
			<h5 class="position-fixed fixed-top page-title">訂單管理</h5>
			<div class="bg-white px-3 px-sm-4 px-lg-5 pb-4 pb-lg-5">
				<div class="row align-items-end border-bottom border-dark py-3 mb-2 mb-md-5">
					<p class="col-4 m-0">訂單編號：xxxxxxxxxx</p>
					<p class="col-4 h4 text-center align-self-start align-self-lg-auto m-0 p-0">第二次</p>
					<div class="col-4 text-right">
						<img src="images/icon/designer3.png" alt="" style="width:80px">
					</div>
				</div>
				<div class="row mb-4">
					<div class="col-12 col-md-4 col-lg-3 col-xl-2 offset-lg-2 d-flex align-items-center p-2 py-3">
						<div class="mx-auto mx-md-0 logo-img">
							<img src="images/logo5.svg" class="img-thumbnail shadow border-0" alt="">
						</div>
					</div>
					<div class="col-12 col-md-8 col-lg-5 col-xl-6 pl-xl-5 row">
						<div class="col-12 col-sm-6 p-2">
							<p class="mb-1">公司名稱</p>
							<div class="bg-light text-muted rounded p-2">company name</div>
						</div>
						<div class="col-12 col-sm-6 p-2">
							<p class="mb-1">公司口號/標語</p>
							<div class="bg-light text-muted rounded p-2">company slogan</div>
						</div>
						<!-- 如果只有一個顏色，col-12 改成 col-6 -->
						<div class="col-12 p-2">
							<p class="mb-1">希望使用的顏色</p>
							<div class="d-flex">
								<!-- 如果是漸層色的話，才出現那下面一行 -->
								<!-- <div class="col-2 bg-light text-muted rounded p-2 mr-3" style="background:linear-gradient(to left,#AEC20F,#5C5CFF);"></div> -->

								<!-- 如果只有一個顏色，不要加 mr-3；多個顏色的話，除了最後一個以外 都要加 mr-3 -->
								<div class="col bg-light text-muted rounded p-2 mr-3">#5C5CFF<span class="color-sample" style="background-color: #5C5CFF;"></span></div>
								<div class="col bg-light text-muted rounded p-2">#5C5CFF<span class="color-sample" style="background-color: #5C5CFF;"></span></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row col-lg-8 offset-lg-2 mt-md-5">
					<p class="col-10 small mb-2 mb-md-3">檔案預覽</p>
					<div class="col-6 p-2 upload-info">
						<div class="text-center border border-secondary rounded p-2">
							<img src="images/logo5_changeColor.svg" class="img-thumbnail shadow-sm border-0 upload-img" alt="">
						</div>
						<div class="shadow-sm p-1 p-md-3 mt-2">truckLogo.png</div>
					</div>
					<div class="col-6 p-2 upload-info d-flex flex-column">
						<div class="text-center border border-secondary rounded p-2 flex-grow-1 d-flex flex-wrap justify-content-center align-content-center">
							<i class="far fa-file-alt fa-3x text-secondary"></i>
						</div>
						<div class="shadow-sm p-1 p-md-3 mt-2">truckLogo.ai</div>
					</div>
				</div>
				<div class="text-center mt-4">
					<a href="designer_upload.php" class="btn btn-outline-logoColor mr-3">上傳檔案</a>
					<button type="button" class="btn btn-logoColor" data-toggle="modal" data-target="#confirmModal">確定送出</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<!-- <div class="modal-header h5">
					確認送出以下 2個檔案？
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div> -->
				<div class="modal-body text-center font-weight-bold py-5">
					<!-- <div class="shadow-sm p-1 p-md-3 mb-2">truckLogo.png</div>
					<div class="shadow-sm p-1 p-md-3 mb-2">truckLogo.ai</div> -->
					確認送出第二次的修改提案？<br>
					<sapn class="text-danger">(確認後將無法再變更)</sapn>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-logoColor" data-dismiss="modal">取消</button>
					<a href="#" class="btn btn-danger">送出</a>
				</div>
			</div>
		</div>
	</div>

	<?php include("template/footer.php"); ?>