<?php 
$pg_id = 3;
include 'ekran/header.php';
@$services = mysqli_query($conn, "SELECT * FROM `services`");
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
        
        <!--================About Area =================-->
       
<iframe id="sayfa" src="<?php echo $siteurl; ?>aboutx.php" width="100%" height="500px" frameborder="no"></iframe>

    
        <!--================End About Area =================-->
        
     <section class="contact_area p_120">
            <div class="container">
        <div class="main_title">
                    <h2><?php echo $l[120]; ?> </h2>
                    <p><?php echo $company_name; ?></p>
                </div>
        <div class="row feature_inner">

<?php 
 while($service = mysqli_fetch_array($services)){
 $sertext = $service['text_'.$lang.''];
 $sertext = substr($sertext,0,20);
?>
<div class="col-lg-4 col-md-6">
    <a href="xidmet/<?= seo($service['name_'.$lang.''])."/".$service['id']; ?>">
                        <div class="feature_item">
                            <h4><?= $service['icon']; ?><?php echo $service['name_'.$lang.'']; ?></h4>
                            
                            <p><?php echo $sertext; ?>...</p><br/>
                        </div>
                    </a>
                    </div>
<?php } ?>
                    </div>
                    </div>
</section>
        

        
       <?php 
$pg_id = 2;
include 'ekran/footer.php';
?>