	<?php

include  'ekran/header.php';
?>


<section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35"><?php echo$l[100];?></h3>
    <div class="col-lg-12">
                                <div class="card">
                                   
                                    <div class="card-body card-block">

                                            <?php 

 if(isset($_POST['add'])){
$tag_az = $_POST['tag_az'];
$tag_en = $_POST['tag_en'];
$tag_ru = $_POST['tag_ru'];
$footer = isset($_POST['footer']);
$news = isset($_POST['news']);

$add = mysqli_query($conn, "INSERT INTO `tags` set 
    `tag_az` = '$tag_az',
    `tag_en` = '$tag_en',
    `tag_ru` = '$tag_ru',
    `footer` = '$footer',
    `news` = '$news'  ");
?>

<div class="progress mb-2">
<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">LOADING...</div> </div>
<meta http-equiv="refresh" content="0; url=tags.php"/>
<?php } ?>


                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[134]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value=""  class="form-control" name="tag_az">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[135]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value=""  class="form-control" name="tag_en">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[136]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value=""  class="form-control" name="tag_ru">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>


&emsp;Footer &emsp; 
                                                    <label class="switch switch-3d switch-primary mr-3">
                                                    <input type="checkbox" name="footer[]" value="1" class="switch-input" checked/>
                                                    <span class="switch-label"></span>
                                                    <span class="switch-handle"></span>
                                                    </label>
&emsp; News &emsp; 
                                                    <label class="switch switch-3d switch-primary mr-3">
                                                    <input type="checkbox" name="news[]" value="1" class="switch-input" checked/>
                                                    <span class="switch-label"></span>
                                                    <span class="switch-handle"></span>
                                                    </label>
<br/>
<br/>


                                             
                                            


                                           <div class="card-footer">
                                        <input type="submit" name="add" value="<?php echo $l[54]; ?>" class="btn btn-primary btn-sm">
                                            
                                      
                                       
                                    </div> 
                                        </form>
                                    </div>
                                    
                                </div>
                                
                            </div>
							
						</div>
						
                    </div>
                </div></div>
                    </div>
                </div>
            </section>
			
        <?php

include  'ekran/footer.php';
?>