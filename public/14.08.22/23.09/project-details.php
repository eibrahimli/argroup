<?php 
ob_start();
$pg_id = 5;
include 'ekran/header.php';
$project_id = mysqli_real_escape_string($conn, htmlspecialchars(trim($_GET['project'])));
$projects = mysqli_query($conn, "SELECT * FROM `projects` WHERE `id` = '$project_id'");
$projectsay = mysqli_num_rows($projects);
if(!$project_id or $projectsay != 1){
	header("Location: ".$siteurl."layiheler");
}
@$project = mysqli_fetch_array($projects);
	if($project['status'] == 0){
                    		$project_st = $l[36];
                    	}elseif($project['status'] == 1){
                    		$project_st = $l[35];
                    	}
?>
     
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2><?php echo $pg['title_'.$lang.'']; ?></h2>
						<div class="page_link">
							<a href="index.php"><?php echo $l['2']; ?></a>
							<a href="projects.php"><?php echo $l['4']; ?></a>
							<a href="project-details.php?project=<?php echo $project['id']; ?>"><?php echo $project['name']; ?></a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Portfolio Details Area =================-->
        <section class="portfolio_details_area p_120">
        	<div class="container">
        		<div class="portfolio_details_inner">
					<div class="row">
						<div class="col-md-6">
							<div class="left_img">
								<img class="img-fluid" style="height: auto;" src="img/projects/<?php echo $project['img'];?>" alt="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="portfolio_right_text">
								<h4><?php echo $project['name']; ?></h4>
								<p><?php echo $project['text_'.$lang.'']; ?></p>
								<ul class="list">
									<!-- <li><span><?php echo $l[39]; ?></span>:   <i class="fa fa-star"></i>  </li> -->
									<li><span><?php echo $l[40]; ?></span>:  <?php echo $project_st; ?></li>
									<li><span><?php echo $l[41]; ?></span>:  <?php echo $project['customer']; ?></li>
									<li><span><?php echo $l[42]; ?></span>:  <?php echo $project['start_date']; ?></li>
									<li><span><?php echo $l[43]; ?></span>:  <?php echo $project['finish_date']; ?></li>
								</ul>
							</div>
						</div>
					</div>
       				<p><?php echo $project['text2_'.$lang.'']; ?></p>
       				
        		</div>
        	</div>
        </section>
        <!--================End Portfolio Details Area =================-->
        
<?php 
include 'ekran/footer.php';
?>
     