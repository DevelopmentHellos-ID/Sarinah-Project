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
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="assets/css/default/app.min.css" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	<!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
	<link href="assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css" rel="stylesheet" />
	<link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
	<link href="assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL CSS STYLE ================== -->
	<link href="assets/css/tpb.css" rel="stylesheet" />
	<!-- Alert -->
	<script src="assets/sweet/sweetalert2.all.js"></script>
	<script src="assets/sweet/sweetalert2.all.min.js"></script>
	<script src="assets/sweet/sweetalert2.js"></script>
	<script src="assets/sweet/sweetalert2.min.js"></script>
</head>

<script type="text/javascript">
	function display_c() {
		var refresh = 1;
		mytime = setTimeout('display_ct()', refresh)
	}

	function display_ct() {
		var strcount
		var x = new Date()
		document.getElementById('ct').innerHTML = x;
		tt = display_c();
	}
</script>
<?php
// DATE
function date_indo($date, $print_day = false)
{
	$day = array(
		1 =>
		'Monday',
		'Tuesday',
		'Wednesday',
		'Thursday',
		'Friday',
		'Saturday',
		'Sunday'
	);
	$month = array(
		1 =>
		'January',
		'February',
		'March',
		'April',
		'May',
		'June',
		'July',
		'August',
		'September',
		'October',
		'November',
		'December'
	);
	$split    = explode('-', $date);
	$tgl_indo = $split[2] . ' ' . $month[(int)$split[1]] . ' ' . $split[0];

	if ($print_day) {
		$num = date('N', strtotime($date));
		return $day[$num] . ', ' . $tgl_indo;
	}
	return $tgl_indo;
}
// RUPIAH
function Rupiah($angka)
{
	$hasil = "Rp. " . number_format($angka, 2, ',', '.');
	return $hasil;
}
?>

<body onload="display_ct()">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">