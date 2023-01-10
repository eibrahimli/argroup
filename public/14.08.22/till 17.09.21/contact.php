<?php 
$pg_id = 2;
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
                            <a href="index.php"><?php echo $l[2]; ?></a>
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
                            $subject = $_POST['subject'];
                            $message = $_POST['message'];

                            if (empty($name) or empty($email) or empty($subject) or empty($message)){
                                echo "$l[30].<br/> <a href='contact.php'>$l[31]</a></div></div></section>";

                                include 'ekran/footer.php';
                                die();
                            }

                            $send = mysqli_query($conn, "INSERT INTO `contact` set `name` = '$name', `email` = '$email', `date`='$date', `subject`='$subject', `message`='$message'");
                            echo "$l[29].";
                        }else{
                        ?>
                        <form class="row contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="<?php echo $l[24]; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="<?php echo $l[25]; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="<?php echo $l[26]; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="<?php echo $l[27]; ?>"></textarea>
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