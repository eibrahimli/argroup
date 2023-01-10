	<?php
ob_start();
include  'ekran/header.php';
?>


<section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">PDF Yarat</h3>
    <div class="col-lg-12">
                                <div class="card">
                                   
                                    <div class="card-body card-block">

                                            <?php 

 if(isset($_POST['add'])){
 	$pdftxt = $_POST['pdftxt'];
    $title = $_POST['title'];
 	$lastle = $_POST['lastle'];
 	$id = md5(time());
 	touch('fpdf/txt/'.$id.'.txt');
 	$dosya = fopen('fpdf/txt/'.$id.'.txt', 'w');
fwrite($dosya, $pdftxt);
fclose($dosya);
 	header("Location: pdf.php?id=".$id."&title=".$title."&lastle=".$lastle."");

} ?>


                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Başlıq</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value=""  class="form-control" name="title">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>

                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Mətn</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                 <textarea name="pdftxt" class="form-control" rows="4"></textarea>
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                                
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Sonluq</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value=""  class="form-control" name="lastle">
                                                   
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