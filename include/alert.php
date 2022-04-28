<script type="text/javascript">
	var handleDashboardGritterNotification = function() {
		setTimeout(function() {
			$.gritter.add({
				title: 'Selamat datang, <?= $_SESSION['username']; ?>!',
				text: 'Sistem Informasi Tempat Penimbunan Berikat (S-TPB) Sarinah Persero.',
				image: 'assets/img/user/user-12.jpg',
				sticky: true,
				time: '',
				class_name: 'my-sticky-class'
			});
		}, 1000);
	};
</script>