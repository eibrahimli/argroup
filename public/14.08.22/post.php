<?php 
$pg_id = 7;
@$id = $_GET['id'];
if(!$id){
    header("Location: xeberler");
}
include 'ekran/header.php';
@$news = mysqli_query($conn, "SELECT * FROM `news` WHERE `id` = $id");
@$new = mysqli_fetch_array($news);
$newo_s = $new['o_s']+1;
$o_s = mysqli_query($conn, "UPDATE `news` set
`o_s` = '$newo_s' WHERE `id` = '$id';
 ");

$xebercat =   $new['cat'];
                                $xeber_cats = mysqli_query($conn, "SELECT * FROM `news_cats` where `id` = $xebercat ");
                                $xeber_cat = mysqli_fetch_array($xeber_cats);
?> 
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2><?php echo $pg['title_'.$lang.'']; ?></h2>
						<div class="page_link">
							<a href="<?= $siteurl ?>"><?php echo$l['2']; ?> </a>
                            <a href="xeberler"><?php echo$l['7']; ?> </a>
							<a href="xeber/<?= $new['header_'.$lang.''].'/'.$new['id']; ?>"><?php echo $new['header_'.$lang.'']; ?></a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Blog Area =================-->
        <section class="blog_area single-post-area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post row">
                            <div class="col-lg-12">
                                <div class="feature-img">
                                    <img class="img-fluid" style="height: auto;" src="img/blog/main-blog/<?php echo $new['img']; ?>" alt="">
                                </div>									
                            </div>
                            <div class="col-lg-3  col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        
                                        <a class="active" href="#"><?php echo $xeber_cat['name_'.$lang.'']; ?></a>
                                        
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#"><?php echo $company_name; ?><i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#"><?php echo $new['date']; ?><i class="lnr lnr-calendar-full"></i></a></li>
                                            <li><a href="#"><?php echo $new['o_s']; ?><i class="lnr lnr-eye"></i></a></li>
                                              </ul>

<!--                    SOSIAL SHEBEKE PAYLASHIMLARI
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
-->

                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 blog_details">
                                <h2><?php echo $new['header_'.$lang.'']; ?></h2>
                                <p class="excert">
                                   <?php echo $new['text_'.$lang.'']; ?> </p>
                                   
                                  <?php if($new['videol']){ ?> <?php echo $new['videol']; ?> <?php } ?>
                              
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="quotes">
                                   								
                                </div>
                               
                            </div>
                        </div>
                       
                     
                    </div>
             <?php include 'xeber_sag.php'; ?>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
      <?php
include 'ekran/footer.php';
      ?>