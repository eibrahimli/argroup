<?php session_start(); ?>
<!doctype html>
<base href='https://argroup.az'/>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
        include 'ekran/connect.php';
        @$lang = $_SESSION['lang'];
        include 'ekran/lang.php';
        $indikisehife = 'https://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
        $pgg = mysqli_query($conn, "SELECT * FROM `pages` WHERE `id` ='$pg_id'");
        $pg = mysqli_fetch_array($pgg);
        @$f = $_GET['f'];
        if ($f){
          $f41 = mysqli_query($conn, "SELECT * FROM `pdf` where `id` = '$f'");
          $f44 = mysqli_num_rows($f41);
          $f43 = mysqli_fetch_array($f41);
          if($f44 == 0){
            header("Location: index.php");
          }
        ?>

        <center>
          <br/>
        <div class="progress mb-2">
<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">FILE LOADING...</div> </div> <br/>
       <meta http-equiv="refresh" content="0;URL=<?php echo $siteurl; ?>f/<?php echo $f43['file']; ?>">
     </center>
         <?php } ?>
        <!-- Required meta tags -->
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title><?php echo $pg['title_'.$lang.'']." - ".$sitename ?></title>
        <!-- Bootstrap CSS -->
   
        <link rel="stylesheet" href="<?= $siteurl ?>css/bootstrap.css">
        <link rel="stylesheet" href="<?= $siteurl ?>vendors/linericon/style.css">
        <link rel="stylesheet" href="<?= $siteurl ?>css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= $siteurl ?>vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?= $siteurl ?>vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="<?= $siteurl ?>vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="<?= $siteurl ?>vendors/animate-css/animate.css">
        <link rel="stylesheet" href="<?= $siteurl ?>vendors/flaticon/flaticon.css">
        <link rel="stylesheet" href="<?= $siteurl ?>css/ekran.css">
        <!--    slider    -->
        <link rel="stylesheet" href="<?= $siteurl ?>css/slider.css">
        <!-- main css -->
        <link rel="stylesheet" href="<?= $siteurl ?>css/style.css">
        <link rel="stylesheet" href="<?= $siteurl ?>css/responsive.css">
        <!--    slider    -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
        <!--   end-slider     -->
        <script src="//kit.fontawesome.com/d5cb4b1e43.js" crossorigin="anonymous"></script>
                  <script src="<?= $siteurl ?>js/jquery-3.2.1.min.js"></script>

    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="top_menu">
              <div class="container">
                <div class="top_inner">
                  <div class="float-left">
         <ul class="list header_socila">
                                <li><a href="ekran/changelang.php?lang=az&from=<?= $indikisehife; ?>"><img src="img/az.png" title="Az??rbaycan" class="ekranlang33"></a></li>
                                <li><a href="ekran/changelang.php?lang=en&from=<?= $indikisehife; ?>"><img src="img/en.png" title="English" class="ekranlang33"></a></li>
                                <li><a href="ekran/changelang.php?lang=ru&from=<?= $indikisehife; ?>"><img src="img/ru.png" title="Russian" class="ekranlang33"></a></li>
                        </ul>
                  </div>
                  <div class="float-right">
                    <ul class="list header_socila">
                        <li><a title="Instagram" href="https://instagram.com/<?php echo $setting['insta']; ?>"><i class="fab fa-instagram"></i></a></li>
                       <li><a title="Facebook" href="https://facebook.com/<?php echo $setting['fb']; ?>"><i class="fab fa-facebook-square"></i></a></li>
                       <li><a title="YouTube" href="<?php echo $setting['youtube']; ?>"><i class="fab fa-youtube"></i></a></li>
                                <li><a title="WhatsApp" href="https://wa.me/<?php echo $setting['whatsapp']; ?>"><i class="fab fa-whatsapp"></i></a></li>
                      </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="main_menu" id="mainNav">
              <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="<?= $siteurl ?>"><img src="img/logo.png" alt=""><img src="img/logo-2.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item active"><a class="nav-link" href="<?= $siteurl; ?>"><?php echo $l[2]; ?></a></li> 
                  <li class="nav-item submenu dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $l[3]; ?></a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="nav-link" href="<?= $siteurl ?>haqqimizda"><?php echo $l[3]; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= $siteurl ?>qalereya"><?php echo $l[190]; ?></a></li>
                  
                  </ul>
                </li> 
                <li class="nav-item"><a class="nav-link" href="<?= $siteurl ?>xidmetler"><?php echo $l[120]; ?></a></li> 
                <li class="nav-item submenu dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $l[4]; ?></a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="nav-link" href="layiheler/tamamlanmayan/0"><?php echo $l[5]; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="layiheler/tamamlanan/1"><?php echo $l[6]; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="layiheler/"><?php echo $l[37]; ?></a></li>
                  
                  </ul>
                </li> 
                <li class="nav-item"><a class="nav-link" href="sertifikatlar"><?php echo $l[155]; ?></a></li>
                <li class="nav-item"><a class="nav-link" href="xeberler"><?php echo $l[7]; ?></a></li>
                 
                <li class="nav-item"><a class="nav-link" href="elaqe"><?php echo $l[10]; ?></a></li>
              </ul>
            </div> 
          </div>
              </nav>
            </div>
        </header>
        <?php
        
function seo($s){
   	$az = array('??','??','??','??','??','??','??');
   	$eng = array('e','u','i','o','g','sh','i');
   	$s = str_replace($az,$eng,$s);
   	$s = mb_strtolower($s);
   	$s = preg_replace('/&amp;&amp;&amp;&amp;&amp;&amp;&amp;&amp;&amp;.+?;/', '', $s);
   	$s = preg_replace('/[^a-z0-9]/', '-', $s);
   	   	$s = preg_replace('/-+/', '-', $s);
   	$s = trim($s, '-');
   	  	if(empty($s)){
   	    $s = 0;
   	}
   	return $s;
}