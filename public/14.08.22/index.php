<?php
$pg_id = 1;
include 'ekran/header.php';
$mp_c = mysqli_query($conn, "SELECT * FROM `mp_config` ");
$mp = mysqli_fetch_array($mp_c);
$sla = 0;
if(file_exists("img/bannerx/homebanner1.jpg")){ $sla = $sla+1;}
if(file_exists("img/bannerx/homebanner2.jpg")){ $sla = $sla+1;}
if(file_exists("img/bannerx/homebanner3.jpg")){ $sla = $sla+1;}
if(file_exists("img/bannerx/homebanner4.jpg")){ $sla = $sla+1;}

$slax = 0;
if(file_exists("img/banner2x/homebannernd1.jpg")){ $slax = $slax+1;}
if(file_exists("img/banner2x/homebannernd2.jpg")){ $slax = $slax+1;}
if(file_exists("img/banner2x/homebannernd3.jpg")){ $slax = $slax+1;}
if(file_exists("img/banner2x/homebannernd4.jpg")){ $slax = $slax+1;}
?>
        <!--================Header Menu Area =================-->
        
          <script> var mainbacks = 2;
          setInterval(function(){ 

           document.getElementById("homebanner").style.backgroundImage = "url('img/bannerx/homebanner"+mainbacks+".jpg')";
          mainbacks++;

          if (mainbacks >= <?= $sla+1; ?>){
            mainbacks = 1;
          }
     
         }, 5000);</script>

        <!--================Home Banner Area =================-->
        <section class="home_banner_area hba" id="homebanner" style="transition: 3s; background: url(img/bannerx/homebanner1.jpg);">
            <div class="banner_inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="banner_content">
                                <h2><?php echo $mp['title1_'.$lang.'']; ?></h2>
                                <p><?php echo $mp['text1_'.$lang.'']; ?></p>
                                <a class="main_btn" href="<?php echo $mp['btn1']; ?>"><?php echo $mp['btn1_'.$lang.'']; ?></a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="home_right_box">
                                <?php
                                $services = mysqli_query($conn, "SELECT * FROM `services` order by id ASC LIMIT 3");
                                while($service = mysqli_fetch_array($services)){
                                ?>
                                <div class="home_item">
                                    <a href="xidmet/<?= seo($service['name_'.$lang.''])."/".$service['id']; ?>">
                                        <font title="<?php echo $service['name_'.$lang.'']; ?>">
   <?php if(!$service['icon']){  ?> <i class="fas fa-building"></i> <?php }else{ echo $service['icon']; } ?>
                                </font>
                                    </a>
                                </div>
                                <?php } ?>
                                <div class="home_item">
                                    <a href="komandamiza_qatil">
                                     <font title="Komandamıza qatıl">
                                    <i class="fas fa-handshake"></i>
                                    </font></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Furniture Area =================-->
        <section class="furniture_area p_120">
            <div class="container">
                <div class="main_title">
                    <h2><?php echo $l[11]; ?></h2>
                    <p><?php echo $l[12]; ?> </p>
                </div>
                <div class="furniture_inner row">
                    <?php 
                    $projects = mysqli_query($conn, "SELECT * FROM `projects` WHERE `mainpage` = 1");
                    while($project = mysqli_fetch_array($projects)){
                    ?>
                    <div class="col-lg-4">
                    <a href="layihe/FireStop/<?= seo($project['name']).'/'.$project['id']; ?>">
                        <div class="furniture_item">
                            <img class="img-fluid" src="img/projects/<?php echo $project['img'];?>" alt="">
                            <h4><?php echo $project['name'];?></h4>
                            <p><?php echo $project['text_'.$lang.''];?></p>
                        </div>
                </a>
                    </div>
                     
<?php } ?>
                </div>
            </div>
        </section>
        <!--================End Furniture Area =================-->
        
        <!--================Projects Area =================-->

       <!-- <section class="projects_area">
            <br/>
                <div class="main_title">
                    <h2><?php echo $l[13]; ?></h2>
                    <p><?php echo $l[14]; ?> </p>
                </div>
            <div class="row m0">
            <div class="projects_item wd_18" style="margin: 10px;">
                    <img src="img/projects/projects-4.jpg" alt="">
                    <div class="hover">
                        <h4>ABOUT PROJECT</h4>
                        <p>More information about this project.</p>
                    </div>
                </div>
                <div class="projects_item wd_18" style="margin: 10px;">
                    <img src="img/projects/projects-4.jpg" alt="">
                    <div class="hover">
                        <h4>ABOUT PROJECT</h4>
                        <p>More information about this project.</p>
                    </div>
                </div>
                <div class="projects_item wd_18" style="margin: 10px;">
                    <img src="img/projects/projects-4.jpg" alt="">
                    <div class="hover">
                        <h4>ABOUT PROJECT</h4>
                        <p>More information about this project.</p>
                    </div>
                </div>
                <div class="projects_item wd_18" style="margin: 10px;">
                    <img src="img/projects/projects-4.jpg" alt="">
                    <div class="hover">
                        <h4>ABOUT PROJECT</h4>
                        <p>More information about this project.</p>
                    </div>
                </div>
               

            </div>
        </section> -->
        <!--================End Projects Area =================-->
        

        <!--================End Feature Area =================-->
        
        <!--================Impress Area =================-->

         <script> var mainbacksnd = 2;
          setInterval(function(){ 

           document.getElementById("homebanner2").style.backgroundImage = "url('img/banner2x/homebannernd"+mainbacksnd+".jpg')";
          mainbacksnd++;

          if (mainbacksnd >= <?= $sla; ?>+1){
            mainbacksnd = 1;
          }
     
         }, 3000);</script>


        <section id="homebanner2" class="impress_area p_120" style="transition: 3s; background: url(img/banner2x/homebannernd1.jpg);">
            <div class="container">
                <div class="impress_inner text-center" style="color:black;">
                    <h2><?php echo $mp['title2_'.$lang.'']; ?></h2>
                    <p><?php echo $mp['text2_'.$lang.'']; ?></p>
                    <a class="main_btn" href="<?php echo $mp['btn2']; ?>"><?php echo $mp['btn2_'.$lang.'']; ?></a>
                </div>
            </div>
        </section>
        <!--================End Impress Area =================-->
        <section class="clients_logo_arean p_120">
            <div class="container">
                <div class="main_title">
                    <h2><?php echo $l[184]; ?></h2>
                </div>
                <div class="row">
                    <?php 
                   $partners = mysqli_query($conn, "SELECT * FROM `partners`");
                  while( $partner = mysqli_fetch_array($partners)){
                    ?>
                    <div class="col-md-6 col-lg-3">
                        <img src="img/partners-logo/<?php echo $partner['img']; ?>" alt="" style="width: 210px; height: 210px; border: 1px solid #690f0f; border-radius: 10px;">
                       <div class="partyorsub"> <?php echo $partner['name']; ?></div>
                    </div>
                    
                    <?php } ?>
                </div>
            </div>
        </section>

        
        <!--================Our Blog Area =================-->
        <section class="our_blog_area p_120">
            <div class="container">
                <div class="main_title">
                    <h2><?php echo $l[20]; ?></h2>
                    <p><?php echo $l[21]; ?></p>
                </div>
                <div class="blog_inner row">
                    
                    <?php
                    $news = mysqli_query($conn, "SELECT * FROM `news` order by id DESC LIMIT 3");
                   while($new = mysqli_fetch_array($news)){
                                $xebercat =   $new['cat'];
                                $xeber_cats = mysqli_query($conn, "SELECT * FROM `news_cats` where `id` = $xebercat ");
                                $xeber_cat = mysqli_fetch_array($xeber_cats);

                     ?>
                    <div class="col-lg-4">
                        <div class="o_blog_item">
                            <div class="blog_img">
                                <a href="xeber/<?= seo($new['header_'.$lang.'']).'/'.$new['id']; ?>">
                                <img class="img-fluid" src="img/blog/main-blog/<?php echo $new['img']; ?>" alt="">
                            </a>
                            </div>
                            <div class="blog_text">
                                <div class="blog_cat">
                                    <a class="active" href="#"><?php echo $xeber_cat['name_'.$lang.'']; ?></a>
                                    <a href="#"><?php echo $new['o_s']; ?></a>
                                </div>
                                <a href="xeber/<?= seo($new['header_'.$lang.'']).'/'.$new['id']; ?>"><h4><?php echo $new['header_'.$lang.'']; ?></h4></a>
                                <u class="date" href="#"><?php echo $new['date']; ?></u>
                            </div>
                        </div>
                    </div>
<?php } ?>
                </div>
            <div class="row mt-4">
               <button class='col-12 btn btn-danger' onclick="location.href = '<?= $siteurl; ?>xeberler'"    style="  border-radius: 5px;cursor: pointer;padding: 5px;">Bütün xəbərləri gör</button> 
            </div>
            
             </div>
        </section>
                <!--================Feature Area =================-->

        <!--================End Our Blog Area =================-->

        <!--================Clients Logo Area =================-->
    <div class="brands">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="main_title main_title_costumers">
                        <h2><?php echo $l[192]; ?></h2>
                    </div>
                    <div id="carouselExampleIndicators" class="brands_slider_container">
                        <div class="owl-carousel owl-theme brands_slider">
                            <?php
                            $clients = mysqli_query($conn, "SELECT * FROM `clients`");
                            while ($client = mysqli_fetch_array($clients)) {
                                ?>
                                <div class="item">
                                    <img src="img/clients-logo/<?php echo $client['img']; ?>" alt="" style="width: 200px !important; border: 1px solid #690f0f; border-radius: 10px;">
                                </div>
                            <?php } ?>
                        </div> <!-- Brands Slider Navigation -->
                        <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        
        <!--================End Clients Logo Area =================-->
        
        <!--================Footer Area =================-->
        <?php 
include 'ekran/footer.php';
        ?>