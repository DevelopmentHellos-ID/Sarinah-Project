<?php
include "include/connection.php";

session_start();

$ID = $_SESSION['username'];
$GetData = $dbcon->query("SELECT * FROM tbl_log WHERE log_username='$ID' ORDER BY id DESC LIMIT 1");
$resultGetData = mysqli_fetch_array($GetData);

$out_where = $resultGetData['id'];
$log_dateSignIn = $resultGetData['log_date'];
// Hitung Durasi Session in System
$waktustart = $log_dateSignIn;
$waktuend = date('Y-m-d H:i:s');
$datetime1 = new DateTime($waktustart);
$datetime2 = new DateTime($waktuend);
$durasi = $datetime1->diff($datetime2);
$durasi1 = $durasi->format('%d Hari %H Jam %i Menit %s Detik');
// End Hitung Durasi Session in System

$out_type = "Sign Out";
$out_date = date('Y-m-d H:i:m');


$query = $dbcon->query("UPDATE tbl_log SET out_type='$out_type',
                                           out_date='$out_date',
                                           duration='$durasi1'
                                           WHERE id='$out_where'");
session_destroy();
header("Location: ../sign-in.php?OutAccess=true");
// header("Location: ../TPB/index.php ");