<?php 
date_default_timezone_set('Asia/Dubai');
  $date = date('d.m.Y H:i:s');
$company_name = "AR GROUP CONSTRUCTİON SERVİCES";
$sitename = "AR GROUP CONSTRUCTİON SERVİCES";
$siteurl = "https://argroup.az/";
$settings = mysqli_query($conn, "SELECT * FROM `settings`");
$setting = mysqli_fetch_array($settings);
?> 