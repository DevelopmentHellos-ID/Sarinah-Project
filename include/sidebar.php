<?php if ($resultSetting['bg_sidebar'] == NULL) { ?>
	<style>
		.sidebar .nav>li.nav-profile .cover {
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background-image: url('assets/images/sidebar/sidebar-default.png');
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
<?php } else { ?>
	<style>
		.sidebar .nav>li.nav-profile .cover {
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background-image: url('assets/images/sidebar/<?= $resultSetting['bg_sidebar'] ?>');
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
<?php } ?>
<?php
$user = $_SESSION['username'];
$roleSidebar = $dbcon->query("SELECT * FROM view_privileges WHERE USER_NAME='$user' ");
$accessSidebar = mysqli_fetch_array($roleSidebar);
?>
<?php $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); ?>
<div id="sidebar" class="sidebar">
	<div data-scrollbar="true" data-height="100%">
		<ul class="nav">
			<li class="nav-profile">
				<a href="javascript:;" data-toggle="nav-profile">
					<div class="cover with-shadow"></div>
					<div class="image">
						<?php if ($accessSidebar['foto'] == NULL || $accessSidebar['foto'] == 'default-user-imge.jpeg') { ?>
							<img src="assets/images/users/default-user-imge.jpeg" alt="Foto Profile" />
						<?php } else { ?>
							<img src="assets/images/users/<?= $accessSidebar['foto'] ?>" alt="Foto Profile" />
						<?php } ?>
					</div>
					<div class="info">
						<b class="caret pull-right"></b>
						<!-- NAMA LENGKAP -->
						<?php if ($accessSidebar['nama_lengkap'] == NULL) { ?>
							Belum dilengkapi!
						<?php } else { ?>
							<?= $accessSidebar['nama_lengkap'] ?>
						<?php } ?>
						<!-- END NAMA LENGKAP -->
						<!-- HAK AKSES -->
						<small><?= $accessSidebar['role'] ?></small>
						<!-- END HAK AKSES -->
					</div>
				</a>
			</li>
			<li>
				<ul class="nav nav-profile">
					<li><a href="usr_profile.php"><i class="fa-solid fa-user-gear"></i> Profile</a></li>
					<li><a href="usr_password.php"><i class="fa-solid fas fa-lock"></i> Ganti Password</a></li>
				</ul>
			</li>
		</ul>
		<br>
		<ul class="nav">
			<li class="nav-header">NAVIGATION</li>
			<li class="<?= $uriSegments[1] == 'index.php' ? 'active' : '' ?>">
				<a href="index.php"><i class="fas fa-chart-pie"></i> <span>Dashboard</span></a>
			</li>
			<!-- Dokumen Pabean -->
			<?php include 'modules/DokumenPabean/menu.php' ?>
			<!-- Gate Mandiri -->
			<?php include 'modules/GateMandiri/menu.php' ?>
			<!-- Komunikasi -->
			<?php include 'modules/Komunikasi/menu.php' ?>
			<!-- Referensi -->
			<?php include 'modules/Referensi/menu.php' ?>
			<!-- Utility -->
			<?php include 'modules/Utility/menu.php' ?>
			<!-- Administrator -->
			<?php include 'modules/Administrator/menu.php' ?>
			<!-- Database -->
			<?php include 'modules/Database/menu.php' ?>
			<!-- Do not delete! "begin sidebar minify button" -->
			<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			<!-- End Do not delete! "begin sidebar minify button" -->
		</ul>
	</div>
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->