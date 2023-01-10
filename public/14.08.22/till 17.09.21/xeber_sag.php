 <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                    <form action="" method="get">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="q" placeholder="<?php echo $l['45']; ?>">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                                    </form>
                                <div class="br"></div>
                            </aside>
                            
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title"><?php echo $l['46']; ?></h3>
                                 <?php
                            $xeberler3 = mysqli_query($conn, "SELECT * FROM `news` order by o_s DESC LIMIT 4 ");
                            while($xeber3 = mysqli_fetch_array($xeberler3)){
                             ?>
                            
                                <div class="media post_item">
                                    <img src="img/blog/main-blog/<?php echo $xeber3['img']; ?>" alt="post" style="max-height: 50px;">
                                    <div class="media-body">
                                        <a href="post.php?id=<?php echo $xeber3['id']; ?>"><h3><?php echo $xeber3['header_'.$lang.'']; ?></h3></a>
                                        <p><?php echo $xeber3['date']; ?></p>
                                    </div>
                                </div>
                            <?php } ?>
                                
                                
                                
                                <div class="br"></div>
                            </aside>

                            <!--
                            <aside class="single_sidebar_widget ads_widget">
                                <a href="#"><img class="img-fluid" src="img/blog/add.jpg" alt=""></a>
                                <div class="br"></div>
                            </aside>
                        -->


                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title"><?php echo $l['47']; ?></h4>
                                <ul class="list cat-list">
                                      <?php
                            $xeber_cats = mysqli_query($conn, "SELECT * FROM `news_cats` ");
                            while($xeber_c = mysqli_fetch_array($xeber_cats)){
                                $xebercid = $xeber_c['id'];
                                $xebers = mysqli_query($conn, "SELECT * FROM `news` where cat = $xebercid");
                                $xebersay = mysqli_num_rows($xebers);
                             ?>
                                    <li>
                                        <a href="news.php?c=<?php echo $xeber_c['id']; ?>" class="d-flex justify-content-between">
                                            <p><?php echo $xeber_c['name_'.$lang.'']; ?></p>
                                            <p><?php echo $xebersay; ?></p>
                                        </a>
                                    </li>
                                <?php  } ?>
                                    														
                                </ul>
                                <div class="br"></div>
                            </aside>
                            <aside class="single-sidebar-widget newsletter_widget">
                                <h4 class="widget_title"><?php echo $l['48']; ?></h4>
                                <p>
                               <?php echo $l['49']; ?>
                                </p>
                                <?php
if(isset($_POST['subs'])){
$email = $_POST['email'];

$add = mysqli_query($conn, "INSERT INTO `subscribers` set 
    `date` = '$date',
    `email` = '$email',
    `from` = '1'
 ");
?>
 <div class="form-group d-flex flex-row">
 	<?php echo $l[109]; ?>
 </div>
<?php } ?>
                                <form action="" method="post">
                                <div class="form-group d-flex flex-row">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                        </div>
                                        <input type="text" name="email" class="form-control" id="inlineFormInputGroup" placeholder="<?php echo $l['17']; ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo $l['17']; ?>'">
                                    </div>
                                    <input type="submit" name="subs"class="bbtns" value="<?php echo $l['50']; ?>">
                                </div>	
                                </form>
                              <!--  <p class="text-bottom">You can unsubscribe at any time</p>	-->
                                <div class="br"></div>							
                            </aside>
                            <aside class="single-sidebar-widget tag_cloud_widget">
                                <h4 class="widget_title"><?php echo $l['51']; ?></h4>
                                <ul class="list">
                                         <?php
                            $tags = mysqli_query($conn, "SELECT * FROM `tags`  where `news`=1 ");
                            while($tag = mysqli_fetch_array($tags)){
                             ?>
                                    <li><a href="#"><?php echo $tag['tag_'.$lang.'']; ?></a></li>
                                <?php } ?>
                                </ul>
                            </aside>
                        </div>
                    </div>