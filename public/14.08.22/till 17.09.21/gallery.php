  <?php 
$pg_id = 11;
include 'ekran/header.php';

?>
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
<iframe id="sayfa" src="<?php echo $siteurl; ?>g.php" width="100%" height="900px" frameborder="no"></iframe>
  
       <?php 
$pg_id = 2;
include 'ekran/footer.php';
?>