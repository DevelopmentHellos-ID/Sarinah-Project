<style>
	.sidebar .nav>li.nav-profile .cover {
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		background-image: url('assets/images/sidebar/TPB-SIS.png');
		background-repeat: no-repeat;
		background-size: cover;
	}
</style>
<?php $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); ?>
<div id="sidebar" class="sidebar">
	<div data-scrollbar="true" data-height="100%">
		<ul class="nav">
			<li class="nav-profile">
				<a href="javascript:;" data-toggle="nav-profile">
					<div class="cover with-shadow"></div>
					<div class="image">
						<img src="assets/img/user/user-13.jpg" alt="" />
					</div>
					<div class="info">
						<b class="caret pull-right"></b>
						<?= $_SESSION['username']; ?>
						<small><?= $_SESSION['username']; ?></small>
					</div>
				</a>
			</li>
			<li>
				<ul class="nav nav-profile">
					<li><a href="javascript:;"><i class="fa fa-cog"></i> Profil</a></li>
				</ul>
			</li>
		</ul>
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