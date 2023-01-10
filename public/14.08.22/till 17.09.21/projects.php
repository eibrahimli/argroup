<?php 
$pg_id = 4;
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
							<a href="index.php"><?php echo $l['2']; ?></a>
							<a href="projects.html"><?php echo $pg['title_'.$lang.'']; ?></a>
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
        			<h2><?php echo $l[33]; ?></h2>
        			<p><?php echo $l[34]; ?> </p>
        		</div>
        		<div class="furniture_inner row">
                    <?php 
                    @$st = $_GET['st'];
                    if ($st == '1'){
                    	 $projects = mysqli_query($conn, "SELECT * FROM `projects` WHERE `status` = 1 order by id DESC");
                    }elseif($st == '0'){
                    	 $projects = mysqli_query($conn, "SELECT * FROM `projects` WHERE `status` = 0 order by id DESC");
                    }else{
                    $projects = mysqli_query($conn, "SELECT * FROM `projects` order by id DESC");
                    }
                    while($project = mysqli_fetch_array($projects)){
                    	if($project['status'] == 0){
                    		$project_st = $l[36];
                    	}elseif($project['status'] == 1){
                    		$project_st = $l[35];
                    	}
                    ?>
        			<div class="col-lg-4">
        				<a href="project-details.php?project=<?php echo $project['id']; ?>">
        				<div class="furniture_item">
        					<img class="img-fluid" src="img/projects/<?php echo $project['img'];?>" alt="">
        					<b><div align="center" style="background: #ed3237; color: #fafafa;"> <?php echo $project_st; ?></div></b>
        					<h4><?php echo $project['name'];?></h4>
        					<p><?php echo $project['text_'.$lang.''];?></p>
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