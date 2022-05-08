<?php
session_start();
// jika session username belum dibuat, atau session username kosong
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    // redirect ke halaman sign-in
    header("location:../sign-in.php?NoAccess=true");
    // header("location:../TPB/sign-in.php");
}
$user = $_SESSION['username'];

// CEK ALREADY UPDATE PASSWORD OR NOT
$cekUpdatePass = $dbcon->query("SELECT USER_NAME,NEW_USER FROM tbl_users WHERE USER_NAME='$user'");
$valdation_password = mysqli_fetch_array($cekUpdatePass);

if ($valdation_password['NEW_USER'] == NULL) {
    $GetUSR = $valdation_password['USER_NAME'];
    echo "<script>window.location.href='uti_user_manajemen_web_update.php?USER=$GetUSR';</script>";
} else {
}
