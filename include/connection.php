<?php
// $dbhost = "localhost";
$dbhost = "117.54.102.106";
$dbusername = "beacukai";
$dbpassword = "beacukai";
$dbname = "tpbdb";
// $dbport = "3306";
$dbport = "3307";
$dbcon = new mysqli($dbhost, $dbusername, $dbpassword, $dbname, $dbport) or die(mysqli_connect_errno());
