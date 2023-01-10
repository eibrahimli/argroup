<?php
ob_start();
include 'ekran/header.php';
$id = $_GET['id'];

if(!$id){
    header("Location: index.php");
}

if(isset($_POST['saven'])){
$fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
$fileName = $_FILES['uploadedFile']['name'];
$fileSize = $_FILES['uploadedFile']['size'];
$fileType = $_FILES['uploadedFile']['type'];
$fileNameCmps = explode(".", $fileName);
$fileExtension = strtolower(end($fileNameCmps));
$newFileName = "homebannernd".$id . '.' . $fileExtension;

$allowedfileExtensions = array('jpg', 'png');
if (in_array($fileExtension, $allowedfileExtensions)) {
}else{
    echo $l[131];
   echo "</div></div></div></div></div></div></section>";
    include 'ekran/footer.php';
    die();
}


// directory in which the uploaded file will be moved
$uploadFileDir = ''.$sitefolder.'img/banner2x/';
$dest_path = $uploadFileDir . $newFileName;
 
if(move_uploaded_file($fileTmpPath, $dest_path))
{
  $message ='File is successfully uploaded.';
}
else
{
  $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
}
header("Location: backslayder2.php");
}
?>




          <div class="container">
            <div style="margin: 20px;">

 <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
               <a href="backslayder2.php"  style="background: #b9b9b9; padding: 5px 15px 5px 15px;"> GERİ</a>
                &emsp;
                <input type="file"  id="fileToUpload" name="uploadedFile">
                <button name="saven" style="background: #69cc36; padding: 5px 15px 5px 15px;">Yüklə və dəyişdir</button>

</form>
            </div> 
      <img src="../img/banner2x/homebannernd<?= $id; ?>.jpg" width="500px;">
            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-8">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>
             </div>

    <?php
    include 'ekran/footer.php';
    ?>