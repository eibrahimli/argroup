 <?php
session_start();
 $from = $_GET['from'];
$n_lang = $_GET['lang'];

if($n_lang != "az" and $n_lang != "en" and $n_lang != "ru"){
	header("Location:../index.php");
}else{

$_SESSION['lang'] = $n_lang;
header("Location: ".$from."");
}


?> 