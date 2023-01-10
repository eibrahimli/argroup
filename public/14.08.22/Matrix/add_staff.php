	<?php

include  'ekran/header.php';
?>


<section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35"><?php echo$l[146];?></h3>
    <div class="col-lg-12">
                                <div class="card">
                                   
                                    <div class="card-body card-block">

                                            <?php 

 if(isset($_POST['add'])){
$full_name = $_POST['full_name'];
$vezife = $_POST['vezife'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pkod = md5(time().'9793');

@$fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
@$fileName = $_FILES['uploadedFile']['name'];
@$fileSize = $_FILES['uploadedFile']['size'];
@$fileType = $_FILES['uploadedFile']['type'];
$fileNameCmps = explode(".", $fileName);
$fileExtension = strtolower(end($fileNameCmps));
$newFileName = $pkod.'.'.$fileExtension;

if ($fileTmpPath){
$allowedfileExtensions = array('jpg', 'png', 'jpeg');
if (in_array($fileExtension, $allowedfileExtensions)) {
}else{
    echo $l[131].' - '.$fileExtension;
   echo "</div></div></div></section>";
    include 'ekran/footer.php';
    die();
} 
// directory in which the uploaded file will be moved
$uploadFileDir = ''.$sitefolder.'img/staff/';
$dest_path = $uploadFileDir . $newFileName;
 
if(move_uploaded_file($fileTmpPath, $dest_path))
{
  $message ='File is successfully uploaded.';
}
else
{
  $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
} }

$add = mysqli_query($conn, "INSERT INTO `komanda` set 
    `date` = '$date',
    `full_name` = '$full_name',
    `vezife` = '$vezife',
    `phone` = '$phone',
    `email` = '$email',
    `photo` = '$newFileName'
 ");
?>

<div class="progress mb-2">
<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">LOADING...</div> </div>
<meta http-equiv="refresh" content="0; url=staff.php"/>
<?php } ?>


                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[147]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value=""  class="form-control" name="full_name">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[148]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value=""  class="form-control" name="vezife">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[125]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value=""  class="form-control" name="phone">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>

                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[126]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value=""  class="form-control" name="email">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Photo</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="" name="uploadedFile" class="form-control-file">
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