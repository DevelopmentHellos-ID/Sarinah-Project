<style>
	.swal2-styled.swal2-confirm {
		border: 0;
		border-radius: 0.25em;
		background: initial;
		background-color: #00acac;
		color: #fff;
		font-size: 1.0625em;
	}
</style>
<script type="text/javascript">
	// var handleDashboardGritterNotification = function() {
	// 	setTimeout(function() {
	// 		$.gritter.add({
	// 			title: 'Selamat datang, <?= $_SESSION['username']; ?>!',
	// 			text: 'Sistem Informasi Tempat Penimbunan Berikat (S-TPB) Sarinah Persero.',
	// 			image: 'assets/img/user/user-12.jpg',
	// 			sticky: true,
	// 			time: '',
	// 			class_name: 'my-sticky-class'
	// 		});
	// 	}, 1000);
	// };

	if (window?.location?.href?.indexOf('SignInsuccess') > -1) {
		Swal.fire({
			imageUrl: 'assets/images/logo/logo.png',
			imageWidth: 350,
			imageHeight: 115,
			imageAlt: 'Custom image',
			html: '<font style="font-size: 20px;font-weight: 500;">Sistem Informasi Tempat Penimbunan Berikat (S-TPB) Sarinah Persero</font>',
		})
		history.replaceState({}, '', './index.php');
	}
</script>