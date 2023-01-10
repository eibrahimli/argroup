<?php 
$pg_id = 12;
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
							<a href="<?= $siteurl ?>"><?php echo $l['2']; ?></a>
							<a href="layiheler"><?php echo $pg['title_'.$lang.'']; ?></a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Projects Area =================-->
        <section class="furniture_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2><?php echo $l[194]; ?></h2>
        			<p><?php echo $l[195]; ?> </p>
        		</div>
        		<div class="furniture_inner row">
                    <?php 
                    $brands = mysqli_query($conn, "SELECT * FROM `brands` order by id DESC");
                    while($brand = mysqli_fetch_array($brands)){
                    ?>
        			<div class="col-lg-2">
        				<a href="brend/<?= seo($brand['name_'.$lang.'']).'/'.$brand['id']; ?>">
        				<div class="furniture_item">
        					<img class="img-fluid h100" src="img/brands-logo/<?php echo $brand['logo'];?>" alt="">
        					<h4><?php echo $brand['name_'.$lang.''];?></h4>
        				</div>
        			</a>
        			</div>
        			 
<?php } ?>
        		</div>
        	</div>
        </section>
        <!--================End Projects Area =================-->
        
<?php
include 'ekran/footer.php';
?>