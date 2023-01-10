<?php
 @$conn = mysqli_connect("localhost", "root", "", "arg1");
// @$conn = mysqli_connect("localhost", "root", "", "ar");

mysqli_set_charset($conn, 'utf8');


if (!$conn) {
	echo "MySQL baza ile elaqe qururla bilmedi.";
    exit;
}

include 'ekran/settings.php';

 ?>