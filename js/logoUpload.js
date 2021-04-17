$(function () {
	const upload = document.getElementById('upload'),
		validExts = new Array('.png', '.ai'), //可接受的附檔名
		maxSize = 10; //檔案大小限制(MB)
	let oldFiles = new DataTransfer();

	$('#upload').on('dragenter', function () {
		$('.upload-wrapper').addClass('dragging');
	});
	$('#upload').on('dragleave', function () {
		$('.upload-wrapper').removeClass('dragging');
	});
	$('#upload').on('dragdrop', function () {
		uploadFiles();
		$('.upload-wrapper').removeClass('dragging');
	});
	$('#upload').on('change', function () {
		if (upload.files.length == 0) {
			//按"取消"時不做任何動作
			return;
		} else {
			uploadFiles();
			$('.upload-wrapper').removeClass('dragging');
		}
	});

	$('#fileInfo').on('click', '.delBtn', function () {
		let i = $(this).data('idx');
		removeFile(i);
		updateInfo();
	});

	function uploadFiles() {
		// if (oldFiles.files.length > 0) {  //增加檔案
		// 	for (let i = upload.files.length - 1; i >= 0; i--) {
		// 		checkFile(i, 'add');
		// 	}
		// 	upload.onchange = null // remove event listener
		// 	upload.files = oldFiles.files // this will trigger a change event
		// 	updateInfo();
		// } else {
		for (let i = upload.files.length - 1; i >= 0; i--) {
			checkFile(i);
		}
		oldFiles.files = upload.files;
		updateInfo();
		// }
	}

	function checkFile(i, action) {
		const file = upload.files[i];

		let fileExt = file.name.substring(file.name.lastIndexOf('.'));
		if (validExts.indexOf(fileExt) < 0) {
			window.alert(file.name + ' 檔案類型錯誤，可接受的副檔名有：*' + validExts.join('/*'));
			// upload.value = '';
			removeFile(i);
		} else {
			if (file.size < maxSize * 1000 * 1024) {
				//符合條件 會執行預設動作
				if (action === 'add') {
					//增加檔案時 額外添加
					oldFiles.items.add(file);
				}
				$('.upload-wrapper').removeClass('dragging');
			} else {
				window.alert('檔案大小超過限制，不能超過 ' + maxSize + 'MB');
				removeFile(i);
			}
		}
	}

	function removeFile(i) {
		let dt = new DataTransfer();
		for (let file of upload.files) {
			// This will remove the [i] item
			if (file !== upload.files[i]) {
				dt.items.add(file);
			}
		}
		upload.onchange = null; // remove event listener
		upload.files = dt.files; // this will trigger a change event
	}

	function updateInfo() {
		const infoBox = $('#fileInfo');
		if (upload.value !== '') {
			infoBox.html('<div class="row bg-white p-3 mb-2"><h6 class="col-3">縮圖</h6><h6 class="col-4">名稱</h6><h6 class="col-2">格式</h6><h6 class="col-3">動作</h6></div>');
			for (let i = 0; i < upload.files.length; i++) {
				const file = upload.files[i],
					extPos = file.name.lastIndexOf('.'),
					fileName = file.name.substring(0, extPos),
					fileExt = file.name.substring(extPos);

				// 預覽圖準備
				var imgReader = new FileReader();
				imgReader.readAsDataURL(file);
				imgReader.onload = function (e) {
					var imgSrc = e.target.result;
					var img = fileExt == '.ai' ? '<i class="far fa-file-alt fa-3x text-orange"></i>' : '<img class="w-100" src="' + imgSrc + '" alt=""></img>';

					infoBox.append('<div class="row d-flex align-items-center bg-white shadow-sm p-3 mb-1"><div class="col-3">' + img + '</div><div class="col-4 text-left" style="overflow-wrap: break-word;">' + fileName + '</div><div class="col-2">' + fileExt + '</div><div class="col-3"><button type="button" class="btn btn-danger delBtn" data-idx="' + i + '">刪除</button></div></div>');
				};
			}

			$('#fileInfo').css('pointer-events', '');
			$('.upload-wrapper').addClass('bg-light align-content-between').removeClass('align-content-center');

			$('input[type="submit"]').removeClass('d-none');
			// $('.backBtn').addClass('d-none');
		} else {
			infoBox.html('<img src="images/upload cloud.png" alt="">');
			$('#fileInfo').css('pointer-events', 'none');
			$('.upload-wrapper').removeClass('bg-light align-content-between').addClass('align-content-center');
			$('input[type="submit"]').addClass('d-none');
			// $('.backBtn').removeClass('d-none');
		}
	}
});
