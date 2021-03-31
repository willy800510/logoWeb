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
	<script src="js/logoUpload.js"></script>
</head>
<body>
<?php include("template/header.php");?>

	<div class="container-fluid designer-content mToTop">
		<div class="container-sm pb-3 pb-xl-1">
			<h5 class="page-title">訂單管理</h5>
			<div class="bg-white px-3 px-sm-4 px-lg-5 pb-4 pb-lg-5">
				<div class="row align-items-end border-bottom border-dark py-3 mb-2 mb-md-5">
					<p class="col-4 m-0">訂單編號：xxxxxxxxxx</p>
					<p class="col-4 h4 text-center align-self-start align-self-lg-auto m-0 p-0">第二次</p>
					<div class="col-4 text-right">
						<img src="images/icon/designer3.png" alt="" style="width:80px">
					</div>
				</div>
				<div class="row mb-4 d-none d-md-flex">
					<div class="col-12 col-lg-2 d-none d-md-flex justify-content-lg-center align-items-center">第一次</div>
					<div class="col-12 col-md-4 col-lg-3 col-xl-2 d-flex align-items-center p-2 py-3">
						<div class="mx-auto mx-md-0 logo-img">
							<img src="images/AdobeStock_250566348 [轉換].svg" class="img-thumbnail shadow border-0" alt="">
						</div>
					</div>
					<div class="col-12 col-md-8 col-lg-5 col-xl-6 pl-xl-5 row">
						<div class="col-12 col-sm-6 p-2">
							<p class="mb-1"><span class="text-danger p-1">*</span>公司名稱</p>
							<div class="bg-light text-muted rounded p-2">company name</div>
						</div>
						<div class="col-12 col-sm-6 p-2">
							<p class="mb-1">公司口號/標語</p>
							<div class="bg-light text-muted rounded p-2">company slogan</div>
						</div>
						<div class="col-12 p-2">
							<p class="mb-1"><span class="text-danger p-1">*</span>選擇顏色</p>
							<div class="d-flex">
								<div class="col bg-light text-muted rounded p-2 mr-3">#5C5CFF<span class="color-sample" style="background-color: #5C5CFF;"></span></div>
								<div class="col bg-light text-muted rounded p-2">#5C5CFF<span class="color-sample" style="background-color: #5C5CFF;"></span></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row mb-4">
					<div class="col-12 col-lg-2 d-none d-md-flex justify-content-lg-center align-items-center">第二次</div>
					<div class="col-12 col-md-4 col-lg-3 col-xl-2 d-flex align-items-center p-2 py-3">
						<div class="mx-auto mx-md-0 logo-img">
							<img src="images/AdobeStock_250566348 [轉換].svg" class="img-thumbnail shadow border-0" alt="">
						</div>
					</div>
					<div class="col-12 col-md-8 col-lg-5 col-xl-6 pl-xl-5 row">
						<div class="col-12 col-sm-6 p-2">
							<p class="mb-1"><span class="text-danger p-1">*</span>公司名稱</p>
							<div class="bg-light text-muted rounded p-2">company name</div>
						</div>
						<div class="col-12 col-sm-6 p-2">
							<p class="mb-1">公司口號/標語</p>
							<div class="bg-light text-muted rounded p-2">company slogan</div>
						</div>
						<div class="col-12 p-2">
							<p class="mb-1"><span class="text-danger p-1">*</span>選擇顏色</p>
							<div class="d-flex">
								<div class="col bg-light text-muted rounded p-2 mr-3">#5C5CFF<span class="color-sample" style="background-color: #5C5CFF;"></span></div>
								<div class="col bg-light text-muted rounded p-2">#5C5CFF<span class="color-sample" style="background-color: #5C5CFF;"></span></div>
							</div>
						</div>
					</div>
				</div>
				<form action="#" method="POST" class="row p-2">
					<div class="col-12 col-lg-8 offset-lg-2 d-flex flex-wrap justify-content-center align-content-center text-center p-2 p-sm-4 my-4 upload-wrapper">
						<input type="file" multiple="multiple" id="upload" />
						<div id="fileInfo" class="col-12 px-0 mb-3" style="pointer-events: none;">
							<img src="images/upload cloud.png" alt="">
						</div>
						<div>
							<p>拖曳檔案　or　<span class="btn btn-pink align-baseline">瀏覽檔案</span></p>
							<p>上傳格式 .png /. ai</p>
						</div>
					</div>
					<div class="col-12 text-center">
						<a href="designer_manage.php" class="btn btn-outline-danger backBtn">返回</a>
						<input type="submit" value="確認上傳" class="btn btn-outline-danger d-none">
					</div>
				</form>

			</div>
		</div>
	</div>
    
<?php include("template/footer.php"); ?>