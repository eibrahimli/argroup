 <footer class="footer_area p_120">
            <div class="container">
                <div class="row footer_inner">
                    <div class="col-lg-5 col-sm-6">
                        <aside class="f_widget ab_widget">
                            <div class="f_title">

                          

                                <h3><a class="navbar-brand logo_h" href="<?= $siteurl ?>"><img src="img/logo.png" alt=""></a></h3>
                            </div>
                            <p><?php 
                            $mp_cz = mysqli_query($conn, "SELECT * FROM `mp_config` ");
                            $mpz = mysqli_fetch_array($mp_cz);
                            echo $mpz['title1_'.$lang.'']; ?></p>
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed by <a href="https://ekranmedia.az" target="_blank">EKRAN</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </aside>
                    </div>
                    <div class="col-lg-5 col-sm-6">
                        <aside class="f_widget news_widget">
                            <div class="f_title">
                                <h3><?php echo $l[16]; ?></h3>
                            </div>
                            <p><?php echo $l[15]; ?></p>
                               
                                <?php
                                if(isset($_POST['abune'])){
                                    $date = $date;
                                    $email = $_POST['email'];
                                    $abuneol = mysqli_query($conn, "INSERT INTO `subscribers` set `date` = '$date', `email` = '$email'");
                                    echo "<?php echo $l[18]; ?>";
                                }
                                ?>
                                <form method="post" action="" >
                                    <div class="input-group d-flex flex-row">
                                        <input name="email" placeholder="<?php echo $l[17]; ?>" type="email">
                                        <input name="abune" class="btn sub-btn" value="<?php echo $l[50]; ?>" type="submit">        
                                    </div>              
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </aside>

                          <aside class="single-sidebar-widget tag_cloud_widget">
                            <div class="f_title" style="color: white;">
                                <h4><?php echo $l['51']; ?></h4>
                            </div>
                                <ul class="list">
                                         <?php
                            $tags = mysqli_query($conn, "SELECT * FROM `tags` where `footer`=1 ");
                            while($tag = mysqli_fetch_array($tags)){
                             ?>
                                    <li style="background: white; color: #ed3237; border: 1px solid; border-color: black;">&ensp;<?php echo $tag['tag_'.$lang.'']; ?></li>
                                 
                                <?php } ?>
                                </ul>
                            </aside>

                    </div>

                    <div class="col-lg-2">
                        <aside class="f_widget social_widget">
                            <div class="f_title">
                                
                            </div>
                            <p><?php echo $l[19]; ?>:</p>
                            <ul class="list">
                                  <li><a title="LinkedIn" href="https://www.linkedin.com/in/ar-group-construction-services-432b8621b/"><i class="fab fa-linkedin"></i></a></li>
                                   <li><a title="Instagram" href="https://instagram.com/<?php echo $setting['insta']; ?>"><i class="fab fa-instagram"></i></a></li>
                                 <li><a title="Facebook" href="https://facebook.com/<?php echo $setting['fb']; ?>"><i class="fab fa-facebook-square"></i></a></li>
                                 <li><a title="YouTube" href="<?php echo $setting['youtube']; ?>"><i class="fab fa-youtube"></i></a></li>
                                <li><a title="WhatsApp" href="https://wa.me/<?php echo $setting['whatsapp']; ?>"><i class="fab fa-whatsapp"></i></a></li></ul>
                        </aside>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?= $siteurl ?>js/popper.js"></script>
        <script src="<?= $siteurl ?>js/bootstrap.min.js"></script>
        <script src="<?= $siteurl ?>js/stellar.js"></script>
        <script src="<?= $siteurl ?>vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="<?= $siteurl ?>vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="<?= $siteurl ?>vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="<?= $siteurl ?>vendors/isotope/isotope-min.js"></script>
        <script src="<?= $siteurl ?>vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?= $siteurl ?>js/jquery.ajaxchimp.min.js"></script>
        <script src="<?= $siteurl ?>vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="<?= $siteurl ?>vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="<?= $siteurl ?>js/mail-script.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        <script src="<?= $siteurl ?>js/theme.js"></script>
        <!--    slider    -->
        <script src="<?= $siteurl ?>js/slider.js"></script>
 </body>
</html>