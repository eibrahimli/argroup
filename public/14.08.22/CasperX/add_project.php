<?php
include  'ekran/header.php';
?>



<section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body card-block">

                                    	<?php 

 if(isset($_POST['add'])){
$name = $_POST['name'];
$customer = $_POST['customer'];
$start_date = $_POST['start_date'];
$finish_date = $_POST['finish_date'];
$text_en = $_POST['text_en'];
$text_az = $_POST['text_az'];
$text_ru = $_POST['text_ru'];
$text2_en = $_POST['text2_en'];
$text2_az = $_POST['text2_az'];
$text2_ru = $_POST['text2_ru'];
$status = $_POST['status'];
$mainpage = $_POST['mainpage'];

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
$uploadFileDir = ''.$sitefolder.'img/projects/';
$dest_path = $uploadFileDir . $newFileName;
 
if(move_uploaded_file($fileTmpPath, $dest_path))
{
  $message ='File is successfully uploaded.';
}
else
{
  $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
}


$add = mysqli_query($conn, "INSERT INTO `projects` set
`name` = '$name',
`customer` = '$customer',
`start_date` = '$start_date',
`finish_date` = '$finish_date',
`text_en` = '$text_en',
`text_az` = '$text_az',
`text_ru` = '$text_ru',
`text2_en` = '$text2_en',
`text2_az` = '$text2_az',
`text2_ru` = '$text2_ru',
`mainpage` = '$mainpage',
`img` = '$newFileName',
`status` = '$status'
 ");
?>

<div class="progress mb-2">
<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">LOADING...</div> </div>
<meta http-equiv="refresh" content="0; url=projects.php"/>
<?php } ?>


        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[63]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="name"  class="form-control">
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[56]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="customer"  class="form-control">
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[57]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="start_date" class="form-control">
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[58]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="finish_date"  class="form-control">
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[59]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="status" id="select" class="form-control">
                                                        <option value="0"><?php echo $l[36]; ?></option>
                                                        <option value="1"><?php echo $l[35]; ?></option>
                                                    </select>
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[61]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text_en" id="textarea-input" rows="4" class="form-control"></textarea>
                                                </div>
                                            </div> 
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[60]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text_az" id="textarea-input" rows="4" value="Content..." class="form-control"></textarea>
                                                </div>
                                            </div> 
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[62]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text_ru" id="textarea-input" rows="4" value="Content..." class="form-control"></textarea>
                                                </div>
                                            </div>

                                               <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[65]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text2_en" id="textarea-input" rows="4" class="form-control"></textarea>
                                                </div>
                                            </div> 
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[64]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text2_az" id="textarea-input" rows="4" value="Content..." class="form-control"></textarea>
                                                </div>
                                            </div> 
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[66]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text2_ru" id="textarea-input" rows="4" value="Content..." class="form-control"></textarea>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">File input</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="fileToUpload" name="uploadedFile" class="form-control-file">
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[187]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="mainpage" id="mainpage" class="form-control">
                                                        <option value="1"><?php echo $l[188]; ?></option>
                                                        <option value="0"><?php echo $l[189]; ?></option>
                                                    </select>
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                           <div class="card-footer">
                                        <input type="submit" name="add" value="<?php echo $l[73]; ?>" class="btn btn-primary btn-sm col-12 h50">
                                            
                                      
                                       
                                    </div> 
                                        </form>
</div></div></div>

                        </div></div></div></section>





     <script>
                pagetitle.innerHTML= "Yeni layihə";
                addbtn.innerHTML = '<i class="fas fa-tasks"></i> Layihələr';
                addbtn.onclick = function() { window.location='add_project.php';};
            </script>




<?php
include  'ekran/footer.php';

?>
