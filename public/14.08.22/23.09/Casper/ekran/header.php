<?php session_start();
$pg_id = 77;
include 'ekran/connect.php';
        @$lang = $_SESSION['lang'];
        include 'ekran/lang.php';
        $pgg = mysqli_query($conn, "SELECT * FROM `pages` WHERE `id` ='$pg_id'");
        $pg = mysqli_fetch_array($pgg);
        if(@$_SESSION['ekran'] != true){
            header("Location: login.php");
        }
        $adminpass = $_SESSION['pass'];
              
        ?><!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- Required meta tags-->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title><?php echo $pg['title_'.$lang.'']; ?></title>


    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="index.php">
                       <button class="au-btn au-btn-icon au-btn--dark" style="border: 1px solid;">CASPER PRIVATE</button>
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <a href="<?php echo $siteurl; ?>">
                        <img src="<?php echo $siteurl; ?>img/logo-2.png" alt="<?php echo $company_name; ?>" />
                    </a>
                    <!--- <div class="image img-cir img-120">
                    </div> --->
                    <a href="ekran/logout.php"><?php echo $l['137']; ?></a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                       
                        <li class=" has-sub">
                            <a class="js-arrow" href="#">
                               <i class="fas fa-images"></i><?php echo $l[190]; ?>
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="gallery.php">
                                       <i class="fas fa-images"></i><?php echo $l[190]; ?></a>
                                </li>
                                <li>
                                    <a href="add_gallery.php">
                                      <i class="fas fa-plus"></i><?php echo $l[54]; ?></a>
                                </li>
                                
                            </ul>
                        </li>
                               <li class=" has-sub">
                            <a class="js-arrow" href="#">
                               <i class="fas fa-th-list"></i><?php echo $l[120]; ?>
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="services.php">
                                        <i class="fas fa-th-list"></i><?php echo $l[120]; ?></a>
                                </li>
                                <li>
                                    <a href="add_service.php">
                                       <i class="fas fa-plus"></i><?php echo $l[54]; ?></a>
                                </li>
                                 <li>
                                    <a href="service_cats.php">
                                        <i class="fas fa-tachometer-alt"></i>Xidmət kateqoriyaları</a>
                                </li>
                                  <li>
                                    <a href="add_service_cat.php">
                                        <i class="fas fa-tachometer-alt"></i>Xidmət kateqoriyası əlavə et</a>
                                </li>
                            </ul>
                        </li>

                        <li class=" has-sub">
                            <a class="js-arrow" href="#">
                               <i class="fas fa-tasks"></i><?php echo $l[53];  ?>
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="projects.php">
                                       <i class="fas fa-tasks"></i><?php echo $l[53]; ?></a>
                                </li>
                                <li>
                                    <a href="add_project.php">
                                       <i class="fas fa-plus"></i><?php echo $l[54]; ?></a>
                                </li>
                                
                            </ul>
                        </li>

                         <li class=" has-sub">
                            <a class="js-arrow" href="#">
                               <i class="fas fa-users"></i></i><?php echo $l[74]; ?>
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="customers.php">
                                     <i class="fas fa-users"></i></i><?php echo $l[74]; ?></a>
                                </li>
                                <li>
                                    <a href="add_customer.php">
                                       <i class="fas fa-plus"></i><?php echo $l[54]; ?></a>
                                </li>
                                
                            </ul>
                        </li>
                        
                          <li class=" has-sub">
                            <a class="js-arrow" href="#">
                               <i class="fas fa-users"></i></i>Brendlər
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="brands.php">
                                     <i class="fas fa-users"></i></i>Brendlər</a>
                                </li>
                                <li>
                                    <a href="add_brand.php">
                                       <i class="fas fa-plus"></i>Brend əlavə et</a>
                                </li>
                                
                            </ul>
                        </li>
                        
                        <li class=" has-sub">
                            <a class="js-arrow" href="#">
                               <i class="fas fa-users"></i></i>Məhsullar
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="products.php">
                                     <i class="fas fa-users"></i></i>Məhsullar</a>
                                </li>
                                <li>
                                    <a href="add_product.php">
                                       <i class="fas fa-plus"></i>Məhsul əlavə et</a>
                                </li>
                                
                            </ul>
                        </li>

  <li class=" has-sub">
                            <a class="js-arrow" href="#">
                              <i class="fas fa-user"></i><?php echo $l[179]; ?>
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="partners.php">
                                 <i class="fas fa-user"></i><?php echo $l[179]; ?></a>
                                </li>
                                <li>
                                    <a href="add_partner.php">
                                        <i class="fas fa-plus"></i><?php echo $l[54]; ?></a>
                                </li>
                                
                            </ul>
                        </li>



                         <li class=" has-sub">
                            <a class="js-arrow" href="#">
                            <i class="fas fa-newspaper"></i></i><?php echo $l[89]; ?>
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="news.php">
                                       <i class="fas fa-newspaper"></i><?php echo $l[89]; ?></a>
                                </li>

                                <li>
                                    <a href="add_new.php">
                                          <i class="fas fa-plus"></i><?php echo $l[54]; ?></a>
                                </li>
                                 <li>
                                    <a href="ncats.php">
                                       <i class="far fa-newspaper"></i><?php echo $l[93]; ?></a>
                                </li> 
                                <li>
                                    <a href="add_ncat.php">
                                          <i class="fas fa-plus"></i><?php echo $l[54]; ?></a>
                                </li>
                                
                            </ul>
                        </li>

                        <li class=" has-sub">
                            <a class="js-arrow" href="#">
                              <i class="fas fa-map-marker-alt"></i><?php echo $l[22]; ?>
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="locs.php">
                                       <i class="fas fa-map-marker-alt"></i><?php echo $l[22]; ?></a>
                                </li>

                                <li>
                                    <a href="add_loc.php">
                                        <i class="fas fa-plus"></i><?php echo $l[54]; ?></a>
                                </li>
                                
                            </ul>
                        </li>


                            <li class=" has-sub">
                                <a class="js-arrow" href="#">
                               <i class="fas fa-users"></i><?php echo $l[146]; ?>
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="staff.php">
                                           <i class="fas fa-users"></i><?php echo $l[146]; ?></a>
                                    </li>

                                    <li>
                                        <a href="add_staff.php">
                                            <i class="fas fa-plus"></i><?php echo $l[54]; ?></a>
                                    </li>
                                    
                                </ul>
                            </li>

                          <li class=" has-sub">
                                <a class="js-arrow" href="#">
                               <i class="fas fa-sticky-note"></i><?php echo $l[149]; ?>
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="certfs.php">
                                        <i class="fas fa-sticky-note"></i><?php echo $l[149]; ?></a>
                                    </li>

                                    <li>
                                        <a href="add_certf.php">
                                             <i class="fas fa-plus"></i><?php echo $l[54]; ?></a>
                                    </li>
                                    
                                </ul>
                            </li>

<li class=" has-sub">
                                <a class="js-arrow" href="#">
                               <i class="fas fa-folder-open"></i>Fayllar
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="pdfs.php">
                                          <i class="fas fa-folder-open"></i>Mövcud fayllar</a>
                                    </li>

                                    <li>
                                        <a href="add_pdf.php">
                                              <i class="fas fa-plus"></i><?php echo $l[54]; ?></a>
                                    </li>
                                    
                                </ul>
                            </li>
                       
                        
<li >
                            <ul class=" has-sub">
                                <li>
                                    <a href="subscribers.php">
                                      <i class="fas fa-street-view"></i><?php echo $l[105]; ?></a>
                                </li>
                            
                                
                            </ul>
                       </li>
                       
                       <li >
                            <ul class="active has-sub">
                                <li>
                                    <a href="appeals.php">
                                       <i class="fas fa-envelope"></i><?php echo $l[145]; ?></a>
                                </li>
                            
                                
                            </ul>
                       </li>

                        <li >
                            <ul class="active has-sub">
                                <li>
                                    <a href="joins.php">
                               <i class="fas fa-briefcase"></i><?php echo $l[169]; ?></a>
                                </li>
                            
                                
                            </ul>
                       </li>

                        <li class=" has-sub">
                            <a class="js-arrow" href="#">
                                  <i class="fas fa-tags"></i><?php echo $l[51]; ?>
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="tags.php">
                                           <i class="fas fa-tags"></i><?php echo $l[51]; ?></a>
                                </li>
                                <li>
                                    <a href="add_tag.php">
                                           <i class="fas fa-plus"></i><?php echo $l[54]; ?></a>
                                </li>
                                
                            </ul>
                        </li>

                         <li >
                            <ul class="active has-sub">
                                <li>
                                    <a href="backslayder.php">
                                         <i class="fas fa-images"></i>Slayder şəkilləri</a>
                                </li>
                            
                                
                            </ul>
                       </li>

                        <li >
                            <ul class="active has-sub">
                                <li>
                                    <a href="backslayder2.php">
                                       <i class="far fa-images"></i>Slayder şəkilləri 2</a>
                                </li>
                            
                                
                            </ul>
                       </li>

                        <li >
                            <ul class="active has-sub">
                                <li>
                                    <a href="cpdf.php">
                                     <i class="fas fa-file-pdf"></i>PDF Yarat</a>
                                </li>
                            
                                
                            </ul>
                       </li>
                             
                               <li class=" has-sub">
                            <a class="js-arrow" href="#">
                               <i class="fas fa-map-signs"></i>Yönləndirmə səhifəsi
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="reds.php">
                                          <i class="fas fa-map-signs"></i>Mövcud yönləndirmələr</a>
                                </li>
                                <li>
                                    <a href="red.php">
                                          <i class="fas fa-plus"></i>Yeni yönləndirmə</a>
                                </li>
                                
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item js-item-menu">
                                    <i class="zmdi zmdi-search"></i>
                                    <div class="search-dropdown js-dropdown">
                                        <form action="">
                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="SOON" />
                                            <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-button-item has-noti js-item-menu">
                                    <i class="zmdi zmdi-notifications"></i>
                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__title">
                                            <p>You haven't Notifications</p>
                                        </div>
                                      
                                        
                                        <div class="notifi__footer">
                                            <a href="#">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        
                                       
                                        <div class="account-dropdown__item">
                                            <a href="mp_config.php">
                                                <i class="zmdi zmdi-settings"></i><?php echo $l[122]; ?></a>
                                        </div>

                                        <div class="account-dropdown__item">
                                            <a href="about_us.php">
                                                <i class="zmdi zmdi-settings"></i><?php echo $l[138]; ?></a>
                                        </div>
                                          <div class="account-dropdown__item">
                                            <a href="cp_config.php">
                                                <i class="zmdi zmdi-settings"></i><?php echo $l[123]; ?></a>
                                        </div>

                                         <div class="account-dropdown__item">
                                            <a href="repass.php">
                                                <i class="zmdi zmdi-settings"></i><?php echo $l[170]; ?></a>
                                        </div>
                                        
                                         <div class="account-dropdown__item">
                                            <a href="info.php">
                                                <i class="zmdi zmdi-settings"></i><?php echo $l[129]; ?></a>
                                        </div>
                                        
                                         <div class="account-dropdown__item">
                                            <a href="tesla.php">
                                                <i class="zmdi zmdi-settings"></i>TeslaHosting</a>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img src="images/icon/logo-white.png" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                       <!-- <div class="image img-cir img-120">
                        </div> -->
                            <img src="<?php echo $siteurl; ?>img/logo-2.png" alt="John Doe" />
                        <a href="ekran/logout.php"><?php echo $l[137]; ?></a>
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                           <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i><?php echo $l[120]; ?>
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="services.php">
                                        <i class="fas fa-tachometer-alt"></i><?php echo $l[120]; ?></a>
                                </li>
                                <li>
                                    <a href="add_service.php">
                                        <i class="fas fa-tachometer-alt"></i><?php echo $l[54]; ?></a>
                                </li>
                                  <li>
                                    <a href="service_cats.php">
                                        <i class="fas fa-tachometer-alt"></i>Xidmət kateqoriyaları</a>
                                </li>
                                  <li>
                                    <a href="add_service_cat.php">
                                        <i class="fas fa-tachometer-alt"></i>Xidmət kateqoriyası əlavə et</a>
                                </li>
                                
                            </ul>
                        </li>

                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i><?php echo $l[53];  ?>
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="projects.php">
                                        <i class="fas fa-tachometer-alt"></i><?php echo $l[53]; ?></a>
                                </li>
                                <li>
                                    <a href="add_project.php">
                                        <i class="fas fa-tachometer-alt"></i><?php echo $l[54]; ?></a>
                                </li>
                                
                            </ul>
                        </li>

                         <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i><?php echo $l[74]; ?>
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="customers.php">
                                        <i class="fas fa-tachometer-alt"></i><?php echo $l[74]; ?></a>
                                </li>
                                <li>
                                    <a href="add_customer.php">
                                        <i class="fas fa-tachometer-alt"></i><?php echo $l[54]; ?></a>
                                </li>
                                
                            </ul>
                        </li>
                        
                         <li class=" has-sub">
                            <a class="js-arrow" href="#">
                               <i class="fas fa-users"></i></i>Brendlər
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="brands.php">
                                     <i class="fas fa-users"></i></i>Brendlər</a>
                                </li>
                                <li>
                                    <a href="add_brand.php">
                                       <i class="fas fa-plus"></i>Brend əlavə et</a>
                                </li>
                                
                            </ul>
                        </li>
                        
                        <li class=" has-sub">
                            <a class="js-arrow" href="#">
                               <i class="fas fa-users"></i></i>Məhsullar
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="products.php">
                                     <i class="fas fa-users"></i></i>Məhsullar</a>
                                </li>
                                <li>
                                    <a href="add_product.php">
                                       <i class="fas fa-plus"></i>Məhsul əlavə et</a>
                                </li>
                                
                            </ul>
                        </li>


  <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i><?php echo $l[179]; ?>
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="partners.php">
                                        <i class="fas fa-tachometer-alt"></i><?php echo $l[179]; ?></a>
                                </li>
                                <li>
                                    <a href="add_partner.php">
                                        <i class="fas fa-tachometer-alt"></i><?php echo $l[54]; ?></a>
                                </li>
                                
                            </ul>
                        </li>

                         <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i><?php echo $l[89]; ?>
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="news.php">
                                        <i class="fas fa-tachometer-alt"></i><?php echo $l[89]; ?></a>
                                </li>

                                <li>
                                    <a href="add_new.php">
                                        <i class="fas fa-tachometer-alt"></i><?php echo $l[54]; ?></a>
                                </li>
                                 <li>
                                    <a href="ncats.php">
                                        <i class="fas fa-tachometer-alt"></i><?php echo $l[93]; ?></a>
                                </li> 
                                <li>
                                    <a href="add_ncat.php">
                                        <i class="fas fa-tachometer-alt"></i><?php echo $l[54]; ?></a>
                                </li>
                                
                            </ul>
                        </li>

                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i><?php echo $l[22]; ?>
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="locs.php">
                                        <i class="fas fa-tachometer-alt"></i><?php echo $l[22]; ?></a>
                                </li>

                                <li>
                                    <a href="add_loc.php">
                                        <i class="fas fa-tachometer-alt"></i><?php echo $l[54]; ?></a>
                                </li>
                                
                            </ul>
                        </li>

                       
                       
                        
<li >
                            <ul class="active has-sub">
                                <li>
                                    <a href="subscribers.php">
                                        <i class="fas fa-tachometer-alt"></i><?php echo $l[105]; ?></a>
                                </li>
                            
                                
                            </ul>
                       </li>

                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i><?php echo $l[51]; ?>
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="tags.php">
                                        <i class="fas fa-tachometer-alt"></i><?php echo $l[51]; ?></a>
                                </li>
                                <li>
                                    <a href="add_tag.php">
                                        <i class="fas fa-tachometer-alt"></i><?php echo $l[54]; ?></a>
                                </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END HEADER DESKTOP-->
              <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span"><?php echo $l[130]; ?>:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="<?php echo $siteurl; ?>"><?php echo $company_name; ?></a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Casper</li>
                                        </ul>
                                    </div>
                                    <button class="au-btn au-btn-icon au-btn--green">CASPER VIP</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->
