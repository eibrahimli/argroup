	<?php

include  'ekran/header.php';
?> 


<section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Xidmət kateqoriyası əlavə et</h3>
    <div class="col-lg-12">
                                <div class="card">
                                   
                                    <div class="card-body card-block">

                                            <?php 

 if(isset($_POST['add'])){
$name_az = $_POST['name_az'];
$name_en = $_POST['name_en'];
$name_ru = $_POST['name_ru'];


$add = mysqli_query($conn, "INSERT INTO `service_cats` set 
`name_az` = '$name_az', 
`name_en` = '$name_en',
`name_ru` = '$name_ru' ");
?>

<div class="progress mb-2">
<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">LOADING...</div> </div>
<meta http-equiv="refresh" content="0; url=service_cats.php"/>
<?php } ?>


                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Xidmət kateqoriyası adı AZ</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value=""  class="form-control" name="name_az">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                           
                                            <hr/>

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Xidmət kateqoriyası adı EN</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value=""  class="form-control" name="name_en">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                            
                                            <hr/>

                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Xidmət kateqoriyası adı RU</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value=""  class="form-control" name="name_ru">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>

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