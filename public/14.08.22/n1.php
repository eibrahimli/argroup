<?php
$pg_id = 1;
include 'ekran/header.php';
$mp_c = mysqli_query($conn, "SELECT * FROM `mp_config` ");
$mp = mysqli_fetch_array($mp_c);
?>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
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
								<ul class="ul1">
                                <?php
								$services = mysqli_query($conn, "SELECT * FROM `services` order by id ASC LIMIT 3");
                                while($service = mysqli_fetch_array($services)){
                                ?>
                                	<a class="li1a" href="service.php?id=<?php echo $service['id']; ?>"><li class="li1"><font title="<?php echo $service['name_'.$lang.'']; ?>"><?php echo $service['name_'.$lang.'']; ?></font></li></a>
								<?php } ?>
								<a class="li1a" href="join_us.php"><li class="li1"><i class="fas fa-handshake"></i>&ensp; <font title="Komandamıza qatıl">Komandamıza qatıl</font></li></a>
							</ul>
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
                    $projects = mysqli_query($conn, "SELECT * FROM `projects` order by id DESC LIMIT 6");
                    while($project = mysqli_fetch_array($projects)){
                    ?>
                    <div class="col-lg-4">
                    <a href="project-details.php?project=<?php echo $project['id']; ?>">
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
        
        <!--================Feature Area =================-->
        <section class="feature_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2><?php echo $l[22]; ?></h2>
        			<p><?php echo $l[23]; ?></p>
        		</div>
        		<div class="row feature_inner">
        			<?php
        			$locations = mysqli_query($conn, "SELECT * FROM `locations` ");
                    while($loc = mysqli_fetch_array($locations)){
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature_item">
                            <h4><i class="fas fa-flag-usa"></i><?php echo $loc['country']; ?></h4>
                            <p><?php echo $loc['address']; ?></p><br/>
                            <p><?php echo $loc['phone']; ?></p>
                            <p><?php echo $loc['phone2']; ?></p>
                        </div>
                    </div>
                <?php } ?>

        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Feature Area =================-->
        
        <!--================Impress Area =================-->
        <section class="impress_area p_120">
        	<div class="container">
        		<div class="impress_inner text-center" style="color:black;">
					<h2><?php echo $mp['title2_'.$lang.'']; ?></h2>
					<p><?php echo $mp['text2_'.$lang.'']; ?></p>
					<a class="main_btn" href="<?php echo $mp['btn2']; ?>"><?php echo $mp['btn2_'.$lang.'']; ?></a>
        		</div>
        	</div>
        </section>
        <!--================End Impress Area =================-->
        
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
                                <a href="post.php?id=<?php echo $new['id']; ?>">
        						<img class="img-fluid" src="img/blog/main-blog/<?php echo $new['img']; ?>" alt="">
                            </a>
        					</div>
        					<div class="blog_text">
        						<div class="blog_cat">
        							<a class="active" href="#"><?php echo $xeber_cat['name_'.$lang.'']; ?></a>
        							<a href="#"><?php echo $new['o_s']; ?></a>
        						</div>
        						<a href="post.php?id=<?php echo $new['id']; ?>"><h4><?php echo $new['header_'.$lang.'']; ?></h4></a>
        						<u class="date" href="#"><?php echo $new['date']; ?></u>
        					</div>
        				</div>
        			</div>
<?php } ?>
        		</div>
        	</div>
        </section>
        <!--================End Our Blog Area =================-->
        
        <!--================Clients Logo Area =================-->
        <section class="clients_logo_arean p_120">
        	<div class="container">
        		<div class="clients_slider owl-carousel">
                    <?php 
                   $clients = mysqli_query($conn, "SELECT * FROM `clients`");
                  while( $client = mysqli_fetch_array($clients)){
                    ?>
                    <div class="item">
                        <img src="img/clients-logo/<?php echo $client['img']; ?>" alt="" style="border: 1px solid #690f0f; border-radius: 10px;">
                    </div>
        			<?php } ?>
        		</div>
        	</div>
        </section>
        <!--================End Clients Logo Area =================-->
        
        <!--================Footer Area =================-->
        <?php 
include 'ekran/footer.php';
        ?>