<?php
@$conn = mysqli_connect("localhost", "argroup_1", "}{4wg(n#GvNh", "argroup_1");


mysqli_set_charset($conn, 'utf8');


if (!$conn) {
	echo "MySQL baza ile elaqe qururla bilmedi.";
    exit;
}

include 'ekran/settings.php';

 ?>