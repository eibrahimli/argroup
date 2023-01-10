	<?php

include  'ekran/header.php';
?> 


<section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Məhsul əlavə et</h3>
    <div class="col-lg-12">
                                <div class="card">
                                   
                                    <div class="card-body card-block">

                                            <?php 

 if(isset($_POST['add'])){
$name_az = $_POST['name_az'];
$text_az = $_POST['text_az'];
$name_en = $_POST['name_en'];
$text_en = $_POST['text_en'];
$name_ru = $_POST['name_ru'];
$text_ru = $_POST['text_ru'];
$brand = $_POST['brand'];

$fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
$fileName = $_FILES['uploadedFile']['name'];
$fileSize = $_FILES['uploadedFile']['size'];
$fileType = $_FILES['uploadedFile']['type'];
$fileNameCmps = explode(".", $fileName);
$fileExtension = strtolower(end($fileNameCmps));
$newFileName = md5(time() . $fileName) . '.' . $fileExtension;

$allowedfileExtensions = array('jpg', 'png');
if (in_array($fileExtension, $allowedfileExtensions)) {
}else{
    echo $l[131];
   echo "</div></div></div></div></div></div></section>";
    include 'ekran/footer.php';
    die();
}


// directory in which the uploaded file will be moved
$uploadFileDir = ''.$sitefolder.'img/products-img/';
$dest_path = $uploadFileDir . $newFileName;
 
if(move_uploaded_file($fileTmpPath, $dest_path))
{
  $message ='File is successfully uploaded.';
}
else
{
  $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
}


$add = mysqli_query($conn, "INSERT INTO `products` set 
`name_az` = '$name_az', `text_az` = '$text_az', 
`name_en` = '$name_en', `text_en` = '$text_en', 
`name_ru` = '$name_ru', `text_ru` = '$text_ru', 
`brand` = '$brand',  `img` = '$newFileName' ");
?>

<div class="progress mb-2">
<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">LOADING...</div> </div>
<meta http-equiv="refresh" content="0; url=products.php"/>
<?php } ?>


                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Məhsul brendi</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name='brand' class='form-control'>
<?php $brtap = mysqli_query($conn, "SELECT * FROM `brands`");
while($brw = mysqli_fetch_array($brtap)){ ?>
                                                        <option value='<?= $brw['id']; ?>'><?= $brw['name_az']; ?></option>
<?php } ?>
                                                    </select>
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                            
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Məhsul adı AZ</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value=""  class="form-control" name="name_az">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Məhsul açıqlaması AZ</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                 <textarea name="text_az" row='3' class='form-control'></textarea>
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                            <hr/>

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Məhsul adı EN</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value=""  class="form-control" name="name_en">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Məhsul açıqlaması EN</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                 <textarea name="text_en" row='3' class='form-control'></textarea>
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                            <hr/>

                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Məhsul adı RU</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value=""  class="form-control" name="name_ru">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Məhsul açıqlaması RU</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                 <textarea name="text_ru" row='3' class='form-control'></textarea>
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                            
                                            

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Məhsul şəkli</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="uploadedFile" class="form-control-file">
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