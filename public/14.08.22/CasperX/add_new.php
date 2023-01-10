<?php
include  'ekran/header.php';

?>



<section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35"><?php echo$l[91];?></h3>

                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body card-block">

                                    	<?php 

 if(isset($_POST['add'])){
$cat = $_POST['cat'];
$header_en = $_POST['header_en'];
$header_az = $_POST['header_az'];
$header_ru = $_POST['header_ru'];
$text_en = $_POST['text_en'];
$text_az = $_POST['text_az'];
$text_ru = $_POST['text_ru'];
$videol = $_POST['$videol'];

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
$uploadFileDir = ''.$sitefolder.'img/blog/main-blog/';
$dest_path = $uploadFileDir . $newFileName;
 
if(move_uploaded_file($fileTmpPath, $dest_path))
{
  $message ='File is successfully uploaded.';
}
else
{
  $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
}

$add = mysqli_query($conn, "INSERT INTO `news` set
`cat` = '$cat',
`date` = '$date',
`header_en` = '$header_en',
`header_az` = '$header_az',
`header_ru` = '$header_ru',
`text_en` = '$text_en',
`text_az` = '$text_az',
`img` = '$newFileName',
`videol` = '$videol',
`text_ru` = '$text_ru'
 ");
?>

<div class="progress mb-2">
<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">LOADING...</div> </div>
<meta http-equiv="refresh" content="0; url=news.php"/>
<?php } ?>


        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[92]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select  class="form-control" name="cat">
                                                      <?php 
                     $xeber_cats = mysqli_query($conn, "SELECT * FROM `news_cats`  ");
                           while($xeber_cat = mysqli_fetch_array($xeber_cats)){
                    ?>
                                             <option value="<?php echo $xeber_cat['id']; ?>"><?php echo $xeber_cat['name_'.$lang.'']; ?></option>
                                                    <?php } ?>
                                                    </select>
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                             
                                             

                                             

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[83]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="header_en" id="textarea-input" rows="4" class="form-control"></textarea>
                                                </div>
                                            </div> 
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[82]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="header_az" id="textarea-input" rows="4" value="Content..." class="form-control"></textarea>
                                                </div>
                                            </div> 
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[84]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="header_ru" id="textarea-input" rows="4" value="Content..." class="form-control"></textarea>
                                                </div>
                                            </div>

                                               <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[86]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text_en" id="textarea-input" rows="4" class="form-control"></textarea>
                                                </div>
                                            </div> 
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[85]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text_az" id="textarea-input" rows="4" value="Content..." class="form-control"></textarea>
                                                </div>
                                            </div> 
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[87]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text_ru" id="textarea-input" rows="4" value="Content..." class="form-control"></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[142]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="videol" id="textarea-input" rows="1" value="Content..." class="form-control"></textarea>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">File input</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="uploadedFile" class="form-control-file">
                                                </div>
                                            </div>
                                           <div class="card-footer">
                                        <input type="submit" name="add" value="<?php echo $l[91]; ?>" class="btn btn-primary btn-sm">
                                            
                                      
                                       
                                    </div> 
                                        </form>
</div></div></div>

                        </div></div></div></section>










<?php
include  'ekran/footer.php';

?>
