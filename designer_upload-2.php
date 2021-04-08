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
	<!-- Dropzone JS -->
	<link rel="stylesheet" href="js/dropzonejs/dropzone.css">
	<script src="js/dropzonejs/dropzone.min.js"></script>

	<!-- Main JS file -->
	<script src="js/dropzonejs/script.js"></script>
	<style>
	</style>
</head>

<body>
	<?php include("template/header.php"); ?>

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
				<div id="modify_carousel" class="carousel slide" data-touch="false" data-interval="false">
					<div class="carousel-inner">
						<div class="row mb-4 carousel-item">
							<div class="col-12 col-lg-2 d-flex justify-content-center justify-content-md-start justify-content-lg-center align-items-center">第一次</div>
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
						<div class="row mb-4 carousel-item active">
							<div class="col-12 col-lg-2 d-flex justify-content-center justify-content-md-start justify-content-lg-center align-items-center">第二次</div>
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
					</div>
					<a class="carousel-control-prev d-md-none" href="#modify_carousel" role="button" data-slide="prev">
						<i class="fas fa-chevron-left text-secondary h4"></i>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next d-md-none" href="#modify_carousel" role="button" data-slide="next">
						<i class="fas fa-chevron-right text-secondary h4"></i>
						<span class="sr-only">Next</span>
					</a>
				</div>

				<!-- dropzonejs -->
				<div class="row p-2">
					<form action="file-upload.php" class="dropzone col-12 col-lg-8 offset-lg-2 d-flex flex-wrap justify-content-center align-content-center text-center p-2 p-sm-4 my-4 upload-wrapper">
						
						<!-- Preview collection of uploaded documents -->
						<div class="preview-container dz-preview uploaded-files col-12 px-0 mb-3">
							<!-- <img src="images/upload cloud.png" alt=""> -->
							<div id="previews">
								<div id="dropzone-template" class="dz-preview d-block bg-white shadow-sm p-3 m-0 mb-1">
									<div class="dropzone-info row">
										<div class="thumb-container col-4">
											<img class="w-100" data-dz-thumbnail />
										</div>
										<div class="details col-8">
											<div>
												<div class="h6" data-dz-name></div>
												<div class="text-secondary" data-dz-size></div>
											</div>
											<div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
											<div class="text-danger small"><span data-dz-errormessage></span></div>
											<div class="actions">
												<button class="btn btn-danger delBtn mt-2" data-dz-remove>刪除</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="fallback">
							<input name="file" type="file" multiple />
						</div>
						
					</form>

					<div class="col-12 text-center">
						<a href="designer_manage.php" class="btn btn-outline-danger backBtn">返回</a>
						<!-- <input type="submit" value="確認送出" class="btn btn-outline-danger d-none"> -->
						<button id="sendDataBtn" class="btn btn-outline-danger">確認送出</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="hintModal" tabindex="-1" aria-labelledby="hintModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body text-danger text-center">
					尚未上傳任何檔案！
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">關閉</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header h5">
					確認送出以下 <span class="uploaded-files-count">0</span> 個檔案？
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">取消</button>
					<button type="button" class="btn btn-danger">確定送出</button>
				</div>
			</div>
		</div>
	</div>

	<script>
		$(function() {
			$(".carousel").carousel({
				wrap: false
			});

			toggleCarouselControl()

			$('.carousel').on('slid.bs.carousel', function() {
				toggleCarouselControl()
			})

			function toggleCarouselControl() {
				if ($('.carousel-inner').children('.carousel-item').length == 1) {
					$('a.carousel-control-prev,a.carousel-control-next').addClass('d-none');
				} else {
					if ($('.carousel-item:first-child').hasClass('active')) {
						$('a.carousel-control-prev').addClass('d-none');
						$('a.carousel-control-next').removeClass('d-none');
					} else if ($('.carousel-item:last-child').hasClass('active')) {
						$('a.carousel-control-prev').removeClass('d-none');
						$('a.carousel-control-next').addClass('d-none');
					} else {
						$('a.carousel-control-prev,a.carousel-control-next').removeClass('d-none');
					}
				}
			}
			$('#sendDataBtn').click(function () {
				var filesName=[]
				$('.dropzone .dz-success').find('[data-dz-name]').each(function (i,e) {
					filesName.push($(this).text());
				})
				if (filesName.length > 0) {
					$('#confirmModal .modal-body').html(filesName.join('<br>'));
					$('#confirmModal').modal('show')
				} else {
					$('#hintModal').modal('show')

				}
			})
		})
	</script>
	<?php include("template/footer.php"); ?>