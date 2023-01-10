<?php 
$pg_id = 9;
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
							<a href="<?= sertifikatlar ?>"><?php echo $pg['title_'.$lang.'']; ?></a>
							
						</div>
					</div>
				</div>
            </div>
        </section>
        <section class="feature_area p_120">
                <div class="container">
	<div class="row feature_inner">
    <?php
    $certfs = mysqli_query($conn, "SELECT * FROM `certfs`");
    while($certf = mysqli_fetch_array($certfs)){
 ?>
	
	    <div class="col-lg-4 col-md-6">
	        <a href="f/<?php echo $certf['file']; ?>">
                        <div class="feature_item" style="border: double;">
                         <center>  <h3><?php echo $certf['from']; ?></h3> 
                         <h4><?php echo $certf['tip']; ?></h4> 
                            
                            <p><?php echo $certf['datev']; ?></p></center><br/>
                        </div>
                        </a>
                        </div>
                    
                    <?php
    }
                    ?>
                    </div>
                    </div>

</section>

<br/>
<br/>


        <?php 
include 'ekran/footer.php';
?>