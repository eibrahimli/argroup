<?php ob_start();
include  'ekran/header.php';
?>


<section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Yönləndirmə Yarat</h3>
    <div class="col-lg-12">
                                <div class="card">
                                   
                                    <div class="card-body card-block">

                                            <?php 

 if(isset($_POST['add'])){
    $txt_az = $_POST['txt_az'];
    $txt_en = $_POST['txt_en'];
 	$txt_ru = $_POST['txt_ru'];
    $title_az = $_POST['title_az'];
    $title_en = $_POST['title_en'];
    $title_ru = $_POST['title_ru'];
 	$url = $_POST['url'];
 	$code = rand(100,999).substr(md5(rand()+time()),-3).rand(1000,9999);



 	$insert = mysqli_query($conn, "INSERT INTO `red` set `header_az` = '$title_az', `header_en` = '$title_en',  `header_ru` = '$title_ru', `url` = '$url', `code` = '$code', `text_az` = '$txt_az', `text_en` = '$txt_en', `text_ru` = '$txt_ru'");
 	header('Location: '.$siteurl.'Casper/reds.php');
} ?>


                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Başlıq AZ</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value=""  class="form-control" name="title_az">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>

                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Başlıq EN</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value=""  class="form-control" name="title_en">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>

                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Başlıq RU</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value=""  class="form-control" name="title_ru">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>

                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Mətn AZ</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                 <textarea name="txt_az" class="form-control" rows="4"></textarea>
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                                
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Mətn EN</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                 <textarea name="txt_en" class="form-control" rows="4"></textarea>
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                                
                                            </div>


<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Mətn RU</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                 <textarea name="txt_ru" class="form-control" rows="4"></textarea>
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                                
                                            </div>


                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">URL (Link)</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="https://"  class="form-control" name="url">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>

                                            </div>
                                            

                                           <div class="card-footer">
                                        <input type="submit" name="add" value="Yarat" class="btn btn-primary btn-sm">
                                            
                                      
                                       
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