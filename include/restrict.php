<?php
session_start();
// jika session username belum dibuat, atau session username kosong
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    // redirect ke halaman sign-in
    header("location:../sign-in.php");
    // header("location:../TPB/sign-in.php");
}
$user = $_SESSION['username'];
