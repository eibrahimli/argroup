<?php 
date_default_timezone_set('Asia/Dubai');
  $date = date('d.m.Y H:i:s');
$company_name = "AR GROUP CONSTRUCTION SERVICES";
$sitename = "AR GROUP CONSTRUCTION SERVICES";
$siteurl = "https://argroup.az/";
$adminurl = "https://argroup.az/Casper/";
$sitefolder = "../";
$ekrandocs1 = "http://ekranmedia.az/docs/ar_group.php";

$settings = mysqli_query($conn, "SELECT * FROM `settings`");
$setting = mysqli_fetch_array($settings);
?>