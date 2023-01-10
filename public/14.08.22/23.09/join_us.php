<?php 
$pg_id = 10;
include 'ekran/header.php';
?>
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2><?php echo $pg['title_'.$lang.'']; ?></h2>
						<div class="page_link">
                            <a href="<?= $siteurl ?>"><?php echo $l[2]; ?></a>
							<a href="<?php echo $pg['url']; ?>"><?php echo $pg['title_'.$lang.'']; ?></a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Contact Area =================-->
        <section class="contact_area p_120">
            <div class="container">
             
                <div class="row">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6><?php echo $setting['location']; ?></h6>
                                <p><?php echo $setting['location2']; ?></p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#"><?php echo $setting['phone']; ?></a></h6>
                                <h6><a href="#"><?php echo $setting['phone2']; ?></a></h6>
                                <p><?php echo $setting['call_time']; ?></p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#"><?php echo $setting['email']; ?></a></h6>
                                <p>24/7</p>
                            </div>
                        </div>  
                    </div>
                    <div class="col-lg-9">
                        <?php
                        if(isset($_POST['send'])){
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $phone = $_POST['phone'];
                            $note = $_POST['note'];
                            $lastname = $_POST['lastname'];
                            $birthday = $_POST['birthday'];
                            $vezife = $_POST['vezife'];
                            $staj = $_POST['staj'];

                            if (empty($name) or empty($email) or empty($vezife) or empty($phone)){
                                echo "$l[30].<br/> <a href='komandamiza_qatil'>$l[31]</a></div></div></section>";

                                include 'ekran/footer.php';
                                die();
                            }

                            $send = mysqli_query($conn, "INSERT INTO `join_us` set `name` = '$name', `email` = '$email', `date`='$date',
                             `phone`='$phone', `note`='$note', `lastname`='$lastname', `birthday`='$birthday', `vezife`='$vezife', `staj`='$staj'");
                            echo "$l[168].";
                        }else{
                        ?>
                        <form class="row contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="<?php echo $l[24]; ?>">
                                </div>
                                 <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="lastname" placeholder="<?php echo $l[160]; ?>">
                                </div>
                                 <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="birthday" placeholder="<?php echo $l[162]; ?>">
                                </div>
                                 <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="vezife" placeholder="<?php echo $l[163]; ?>">
                                </div>
                                <div class="form-group">
                                   <select class="form-control" name="staj">
                                       <option><?php echo $l[161]; ?></option>
                                       <option value="3 - 12 <?php echo $l[167]; ?>">3 - 12 <?php echo $l[167]; ?></option>
                                       <option value="1 - 3 <?php echo $l[166]; ?>">1 - 3 <?php echo $l[166]; ?></option>
                                       <option value="3 + <?php echo $l[166]; ?>">3 + <?php echo $l[166]; ?></option>
                                   </select>
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                                 <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="phone" placeholder="<?php echo $l[103]; ?>">
                                </div>
                                 <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="email" placeholder="<?php echo $l[165]; ?>">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="note" id="message" rows="1" placeholder="<?php echo $l[164]; ?>"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <input type="submit" name="send" value="<?php echo $l[28]; ?>" class="btn submit_btn">
                            </div>
                        </form>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->
        
<?php 
include 'ekran/footer.php';
?>