<?php
include "include/connection.php";
include "include/detect.php";
// NEW SESSION
if (isset($_SESSION['newuser'])) {
	header("Location: ./index.php");
}
// END NEW SESSION

// FUNCTION SIGN-IN
if (isset($_POST['submit'])) {
	// SIGN-IN
	$user = $_POST['username'];
	$pass = $_POST['password'];
	// END SIGN-IN

	// IF FAILED SIGN-IN
	$log_user = $_POST['username'];
	$log_type = "Sign In Error";
	$log_date = date('Y-m-d H:i:m');
	$log_device = $devicename;
	$log_ip = $IP;
	$log_browser = $detailbrowser;
	// END IF FAILED SIGN-IN

	$query_signin = $dbcon->query("SELECT * FROM user_manajemen WHERE USER_NAME='$user' AND PASSWORD='$pass'");
	if (mysqli_num_rows($query_signin) == 1) {
		// START SESSION
		session_start();
		$_SESSION['username'] = $user;
		// END START SESSION

		$query = $dbcon->query("INSERT INTO tbl_log (id,log_username,log_type,log_date,log_devicename,log_ip,log_browser)
											VALUES
													('','$log_user','$log_type','$log_date','$log_device','$log_ip','$log_browser')");
		if ($query) {
			header("Location: ./index.php?SignInsuccess=true");
		} else {
			echo "<h4>" . "log error" . mysqli_connect_errno() . "</h4>";
		}
	} else {
		header("Location: ./sign-in.php?error=true");
	}
}
// END FUNCTION SIGN-IN
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>TPB | Sarinah Persero - Sistem Tempat Penimbunan Berikat</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link rel="apple-touch-icon" sizes="180x180" href="assets/images/logo/logo.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/images/logo/logo.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/images/logo/logo.png">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="assets/css/default/app.min.css" rel="stylesheet" />
	<link href="assets/css/tpb.css" rel="stylesheet" />
	<!-- Alert -->
	<script src="assets/sweet/sweetalert2.all.js"></script>
	<script src="assets/sweet/sweetalert2.all.min.js"></script>
	<script src="assets/sweet/sweetalert2.js"></script>
	<script src="assets/sweet/sweetalert2.min.js"></script>
</head>
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

<body class="pace-top">
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<div id="page-container" class="fade">
		<div class="login login-with-news-feed">
			<div class="news-feed">
				<div class="news-image" style="background-image: url(assets/images/bg-signin/bg-01.png)"></div>
				<div class="news-caption">
					<h4 class="caption-title"><b>TPB</b> Sarinah Persero</h4>
					<p>Sistem Informasi Tempat Penimbunan Berikat (S-TPB) Sarinah Persero | Gedung Sarinah, Jl. M. H. Thamrin No. 11, RT.8/RW.4, Gondangdia, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10350.</p>
				</div>
			</div>
			<div class="right-content">
				<div class="login-header">
					<div class="brand">
						<span class="logo"></span> <b>TPB</b> Sistem
						<small>Silahkan <b>Sign In</b> untuk memulai <i>session</i> anda.</small>
					</div>
					<div class="icon">
						<i class="fa fa-sign-in-alt"></i>
					</div>
				</div>
				<div class="login-content">
					<form action="" method="POST" class="margin-bottom-0">
						<div class="form-group m-b-15">
							<input type="text" id="username" name="username" class="form-control form-control-lg" placeholder="Username" required />
						</div>
						<div class="form-group m-b-15">
							<input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password" />
						</div>
						<div class="checkbox checkbox-css">
							<input type="checkbox" id="ckb1" onclick="myFunction()" />
							<label for="ckb1">Lihat Password</label>
						</div>
						<div class="checkbox checkbox-css m-b-30">
							<input type="checkbox" id="remember_me_checkbox" value="" />
							<label for="remember_me_checkbox">Ingat Saya</label>
						</div>
						<div class="login-buttons">
							<button type="submit" name="submit" class="btn btn-success btn-block btn-lg">Sign In</button>
						</div>
						<!-- <div class="m-t-20 m-b-40 p-b-40 text-inverse">Not a member yet? Click <a href="register_v3.html">here</a> to register.</div> -->
						<hr />
						<p class="text-center text-grey-darker mb-0">&copy; Copyright <a href="https://hellos-id.com/" target="_blank"><b>HELLOS-ID</b></a> All Right Reserved 2022 - <?= date('Y') ?></p>
					</form>
				</div>
			</div>
		</div>
		<?php include "include/panel.php"; ?>
	</div>
	<script src="assets/js/app.min.js"></script>
	<script src="assets/js/theme/default.min.js"></script>
	<!-- Show Password -->
	<script type="text/javascript">
		function myFunction() {
			var x = document.getElementById("password");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}
	</script>
	<!-- End Show Password -->
	<script type="text/javascript">
		if (window?.location?.href?.indexOf('error') > -1) {
			Swal.fire({
				title: 'Gagal Sign In!',
				icon: 'error',
				html: '<font style="font-size: 14px;font-weight: 500;">Username atau password anda salah! Periksa kembali atau hubungungi Administrator!</font>',
				text: '',
			})
			history.replaceState({}, '', './sign-in.php');
		}

		if (window?.location?.href?.indexOf('errorAccess') > -1) {
			Swal.fire({
				title: 'Tidak Ada Akses!',
				icon: 'error',
				text: 'Hubungungi Administrator!',
			})
			history.replaceState({}, '', './sign-in.php');
		}
	</script>
</body>

</html>