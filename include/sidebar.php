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
			<li class="nav-header">Navigation</li>
			<li>
				<a href="calendar.html"><i class="fas fa-chart-pie"></i> <span>Dashboard</span></a>
			</li>
			<!-- Manajemen Users -->
			<?php include 'modules/ManageUsers/menu.php' ?>
			<!-- Manajemen Aplikasi / Seeting Aplikasi -->
			<?php include 'modules/AppSettings/menu.php' ?>
			<!-- Manajemen Table TBP -->
			<?php include 'modules/ManageTPBDB/menu.php' ?>
			<!-- Do not delete! "begin sidebar minify button" -->
			<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			<!-- End Do not delete! "begin sidebar minify button" -->
		</ul>
	</div>
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->