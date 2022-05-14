<?php
include "include/connection.php";
include "include/restrict.php";
include "include/head.php";
include "include/alert.php";
include "include/top-header.php";
include "include/sidebar.php";
?>
<!-- begin #content -->
<div id="content" class="content">
	<div class="page-title-css">
		<div>
			<h1 class="page-header-css">
				<i class="fas fa-chart-pie icon-page"></i>
				<font class="text-page">Dashboard</font>
			</h1>
			<ol class="breadcrumb">
				<li class="breadcrumb-item active">Dashboard</li>
			</ol>
		</div>
		<div>
			<button class="btn btn-primary-css"><i class="icon-copy dw dw-calendar-11"></i> <span id="ct"></span></button>
		</div>
	</div>
	<div class="line-page"></div>
	<!-- begin row -->
	<div class="row">
		<div class="col-xl-12 col-md-12">
			<!-- Alert -->
			<div class="note note-danger">
				<div class="note-icon"><i class="fas fa-id-badge"></i></div>
				<div class="note-content">
					<h4><b>Lengkapi Profile Anda!</b></h4>
					<p> Anda belum melengkapi profile anda! <a href="usr_profile.php" style="color:#bd0500;"><b>Klik disini!</b></a> untuk melengkapi data profile anda!</p>
				</div>
			</div>
		</div>
		<!-- End Alert -->
		<div class="col-xl-8 col-md-8">
			<div class="announcement">
				<marquee class="text-announcement"><b><i class="fas fa-bullhorn"></i> Informasi TPB:</b> ...</marquee>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<!-- begin widget-card -->
					<a href="#" class="widget-card widget-card-rounded m-b-20" data-id="widget">
						<div class="widget-card-cover" style="background: linear-gradient(45deg, #1d2226, #1d2226);"></div>
						<div class="widget-card-content">
							<?php if ($resultSetting['app_name'] == NULL) { ?>
								<b class="text-white">App Name.</b>
							<?php } else { ?>
								<b class="text-white"><?= $resultSetting['app_name'] ?>.</b>
							<?php } ?>
							<div class="line-dashboard"></div>
						</div>
						<div style="display: flex;justify-content: space-between;align-items: center;">
							<div class="widget-card-content bottom">
								<i class="fab fa-pushed fa-5x text-indigo"></i>
								<?php if ($resultSetting['sd_one'] == NULL || $resultSetting['sd_two'] == NULL) { ?>
									<h4 class="text-white m-t-10"><b>Name 1 Name 2<br /> by <b>HELLOS</b><sup><b>ID</b></sup></b></h4>
								<?php } else { ?>
									<h4 class="text-white m-t-10"><b><?= $resultSetting['sd_one'] ?> <?= $resultSetting['sd_two'] ?><br /> by Hellos-ID</b></h4>
								<?php } ?>
								<?php if ($resultSetting['app_name'] == NULL || $resultSetting['company'] == NULL) { ?>
									<h5 class="f-s-12 text-white-transparent-7 m-b-2"><b>Dashboard App Name Perusahaan</b></h5>
								<?php } else { ?>
									<h5 class="f-s-12 text-white-transparent-7 m-b-2"><b>Dashboard <?= $resultSetting['app_name'] ?> <?= $resultSetting['company'] ?></b></h5>
								<?php } ?>
							</div>
							<div class="widget-card-content bottom">
								<img src="assets/img/svg/data-report-animate.svg" style="width: 212px;height: 100%;" alt="Images Dasboard">
							</div>
						</div>
					</a>
					<!-- end widget-card -->
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-md-4">
			<div class="row rowGrid">
				<div class="col-xl-12 col-md-12">
					<div class="widget widget-stats bg-teal">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-database fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">TOTAL TABEL TPB</div>
							<div class="stats-number"><?= $jt_query['view_tables'] ?> Tabel</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: <?= $jt_query['view_tables'] ?>%;"></div>
							</div>
							<div class="stats-desc">Update Data: <?= date_indo(date('Y-m-d'), true) ?></div>
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-md-12">
					<div class="widget widget-stats bg-blue">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-users fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">TOTAL PENGGUNA</div>
							<?php
							$jumlah_pengguna = $dbcon->query("SELECT COUNT(*) pengguna FROM view_privileges");
							$jp_query = mysqli_fetch_array($jumlah_pengguna);
							?>
							<div class="stats-number"><?= $jp_query['pengguna'] ?> Pengguna</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: <?= $jp_query['pengguna'] ?>%;"></div>
							</div>
							<div class="stats-desc">Persentase Pengguna (<?= $jp_query['pengguna'] ?>%)</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end row -->
	<!-- begin row -->
	<div class="row">
		<div class="col-xl-12">
			<div class="panel panel-inverse" data-sortable-id="ui-icons-1">
				<div class="panel-heading">
					<h4 class="panel-title">[Content] Coming Soon</h4>
					<?php include "include/panel-row.php"; ?>
				</div>
				<div class="panel-body text-inverse">
					<center>
						<img class="picture-w-550" src="assets/images/coming-soon/01.jpg" alt="coming-soon">
					</center>
				</div>
			</div>
		</div>
	</div>
	<!-- end row -->
	<?php include "include/creator.php"; ?>
</div>
<!-- end #content -->
<?php include "include/panel.php"; ?>
<?php include "include/footer.php"; ?>