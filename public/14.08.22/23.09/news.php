<?php 
$pg_id = 6;
include 'ekran/header.php';
@$c = $_GET['c'];
@$xcc = mysqli_query($conn, "SELECT * FROM `news` where `cat`=$c ");
@$xcsay = mysqli_num_rows($xcc);
@$q = $_GET['q'];

?>
    
        
       
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="banner_content text-center">
                        <h2><?php echo $pg['title_'.$lang.'']; ?></h2>
                        <div class="page_link">
                            <a href="<?= $siteurl ?>"><?php echo $l['2']; ?></a>
                            <a href="<?= $siteurl ?>xeberler"><?php echo $pg['title_'.$lang.'']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Blog Categorie Area =================-->
        <section class="blog_categorie_area">
            <div class="container">
                <div class="row">

                    <?php 
                     $xeber_cats3 = mysqli_query($conn, "SELECT * FROM `news_cats`  ");
                           while($xeber_cat3 = mysqli_fetch_array($xeber_cats3)){
                    ?>
                    <div class="col-lg-4">
                            <a href="xeberler/<?= seo($xeber_cat3['name_'.$lang.'']).'/'.$xeber_cat3['id']; ?>">
                        <div class="categories_post">
                            <img src="img/banner/banner.jpg" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <h5><?php echo $xeber_cat3['name_'.$lang.'']; ?></h5></a>
                                    <div class="border_line"></div>
                                    <p><?php 
                                $xebercidd = $xeber_cat3['id'];
                                $xeberss = mysqli_query($conn, "SELECT * FROM `news` where cat = $xebercidd");
                                $xebersayy = mysqli_num_rows($xeberss);
                                    echo $xebersayy." ".$l[52];?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                        </a>
                <?php } ?>
                </div>
            </div>
        </section>
        <!--================Blog Categorie Area =================-->
        
        <!--================Blog Area =================-->
        <section class="blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">
                            <?php
                            if($c){
                            $p ='where `cat` = '.$c.'';
                             if($xcsay == 0) {
                        echo '<div style="color: #ed3237; text-align: center; font-weight: bold; font-size:20px;">'.$l[132].'</div>';
                        }
                        }else{ $p = ""; }

                       
                            $xeberler = mysqli_query($conn, "SELECT * FROM `news` $p order by id DESC LIMIT 8 ");
                            while($xeber = mysqli_fetch_array($xeberler)){
                             $xebercat =   $xeber['cat'];
                                $xeber_cats = mysqli_query($conn, "SELECT * FROM `news_cats` where `id` = $xebercat ");
                                $xeber_cat = mysqli_fetch_array($xeber_cats);

                            $xeberh =  $xeber['header_'.$lang.''];
                             ?>
                            
                            <article class="row blog_item">
                               <div class="col-md-3">
                                   <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a class="active" href="#"><?php echo $xeber_cat['name_'.$lang.'']; ?></a>
                                            
                                        </div>
                                        <ul class="blog_meta list">
                                            <li><a href="#"><?php echo $company_name; ?><i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#"><?php echo $xeber['date']; ?><i class="lnr lnr-calendar-full"></i></a></li>
                                            <li><a href="#"><?php echo $xeber['o_s']; ?><i class="lnr lnr-eye"></i></a></li>
                                             </ul>
                                    </div>
                               </div>
                       
                                
                              
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="img/blog/main-blog/<?php echo $xeber['img']; ?>" alt="" style="height: 300px; width: 100%;">
                                        <div class="blog_details">
                                            <a href="xeber/<?= seo($xeber['header_'.$lang.'']).'/'.$xeber['id']; ?>"><h2><?php echo $xeber['header_'.$lang.'']; ?></h2></a>
                                            <p><?php echo $xeber['text_'.$lang.'']; ?></p>
                                            <a href="xeber/<?= seo($xeber['header_'.$lang.'']).'/'.$xeber['id']; ?>" class="blog_btn"><?php echo $l['44']; ?></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <?php } ?>

<!--                    SƏHİFƏLƏMƏ
                            <nav class="blog-pagination justify-content-center d-flex">
		                        <ul class="pagination">
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Previous">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-left"></span>
		                                    </span>
		                                </a>
		                            </li>
		                            <li class="page-item"><a href="#" class="page-link">01</a></li>
		                            <li class="page-item active"><a href="#" class="page-link">02</a></li>
		                            <li class="page-item"><a href="#" class="page-link">03</a></li>
		                            <li class="page-item"><a href="#" class="page-link">04</a></li>
		                            <li class="page-item"><a href="#" class="page-link">09</a></li>
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Next">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-right"></span>
		                                    </span>
		                                </a>
		                            </li>
		                        </ul>
		                    </nav>

-->

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