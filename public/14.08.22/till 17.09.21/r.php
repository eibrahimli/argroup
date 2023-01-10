	<?php
    ob_start();
    $pg_id=1;
include 'ekran/header.php';

$r = @mysqli_real_escape_string($conn, htmlspecialchars(trim($_GET['r'])));
$rtap = mysqli_query($conn, "SELECT * FROM `red` WHERE `code` = '$r'");
$rx = mysqli_fetch_array($rtap);

$seen = $rx['seen'];
$qrseen = $rx['qrseen'];
$seen2 = $seen+1;
$qrseen2 = $qrseen+1;
$clicktourl = $rx['clicktourl'];
$clicktourl2 = $clicktourl+1;
$qrclicktourl = $rx['qrclicktourl'];
$qrclicktourl2 = $qrclicktourl+1;
$curl = $rx['url'];

@$q = $_GET['q'];
if(!$q){
    if(isset($_POST['clicktourl'])){
      $seenplus = mysqli_query($conn, "UPDATE `red` set `qrclicktourl` = '$qrclicktourl2' WHERE `code` = '$r'");
      header("Location: $curl");
}else{
    $seenplus = mysqli_query($conn, "UPDATE `red` set `qrseen` = '$qrseen2' WHERE `code` = '$r'");
}
}else{
    if(isset($_POST['clicktourl'])){
      $seenplus = mysqli_query($conn, "UPDATE `red` set `clicktourl` = '$clicktourl2' WHERE `code` = '$r'");
      header("Location: $curl");
}else{
    $seenplus = mysqli_query($conn, "UPDATE `red` set `seen` = '$seen2' WHERE `code` = '$r'"); 
}
}
 

	?>
       <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="banner_content text-center">
                        <h2><?= $rx['header_'.$lang.'']; ?></h2>
                        <div class="page_link">
                            <a href="index.php"><?php echo $l['2']; ?></a>
                            <a href="<?= $siteurl ?>r.php?r=<?= $rx['code']; ?>"><?= $rx['header_'.$lang.'']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
	<title></title>
</head>
<body  style="background: url('http://argroup.az/img/bannerx/homebanner1.jpg'); background-size: cover;">

<div style="padding:10px; background: white; text-align: center; font-family: sans-serif; height: 300px; opacity: 90%;"> <h4>

<?= $rx['text_'.$lang.'']; ?>

</h4></div>
<form method="post" action="">
<button name="clicktourl" style="width: 100%;
    height: 50px;
    background: #631918;
    margin-top: 20px;
    border: 2px solid #969696;
    box-shadow: 0px 0px 5px 1px #868686;
    font-weight: 600;
    color: white;" ><?= $l[191]; ?></button>
</form>
<br/>
<br/>
<br/>

<?php include 'ekran/footer.php'; ?>