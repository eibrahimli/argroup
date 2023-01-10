<?php
if(!$lang){
	$lang = $setting['default_lang'];
}

$langz = mysqli_query($conn, "SELECT * FROM `lang`");
while ($lan = mysqli_fetch_array($langz)){
if ($lang == "az"){
	$l[''.$lan['id'].''] = "".$lan['az']."";
}elseif ($lang == "ru"){
	$l[''.$lan['id'].''] = "".$lan['ru']."";
}elseif ($lang == "en"){
	$l[''.$lan['id'].''] = "".$lan['en']."";
}
};


?>