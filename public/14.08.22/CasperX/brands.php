<?php
include  'ekran/header.php';

?>

    <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
<?php 

 if(isset($_POST['change'])){
$ppid = $_POST['id'];
$name_az = $_POST['name_az'];
$text_az = $_POST['text_az'];
$name_ru = $_POST['name_ru'];
$text_ru = $_POST['text_ru'];
$name_en = $_POST['name_en'];
$text_en = $_POST['text_en'];

$imgtap = mysqli_query($conn, "SELECT * FROM `brands` where `id`=$ppid ");
$imgta = mysqli_fetch_array($imgtap);

@$fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
@$fileName = $_FILES['uploadedFile']['name'];
@$fileSize = $_FILES['uploadedFile']['size'];
@$fileType = $_FILES['uploadedFile']['type'];
$fileNameCmps = explode(".", $fileName);
$fileExtension = strtolower(end($fileNameCmps));
$newFileName = $imgta['logo'];

if ($fileTmpPath){
$allowedfileExtensions = array('jpg', 'png');
if (in_array($fileExtension, $allowedfileExtensions)) {
}else{
    echo $l[131];
   echo "</div></div></div></section>";
    include 'ekran/footer.php';
    die();
} 
// directory in which the uploaded file will be moved
$uploadFileDir = ''.$sitefolder.'img/brands-logo/';
$dest_path = $uploadFileDir . $newFileName;
 
if(move_uploaded_file($fileTmpPath, $dest_path))
{
  $message ='File is successfully uploaded.';
}
else
{
  $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
} }


$update = mysqli_query($conn, "UPDATE `brands` set
`name_az` = '$name_az', `text_az` = '$text_az', 
`name_en` = '$name_en', `text_en` = '$text_en', 
`name_ru` = '$name_ru', `text_ru` = '$text_ru'
 WHERE `id` = '$ppid';
 ");
?>
<div class="progress mb-2">
<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">LOADING...</div> </div>
<meta http-equiv="refresh" content="0">

<?php
}

if(isset($_POST['sil'])){
    $id = $_POST['id'];

    $sil = mysqli_query($conn, "DELETE FROM `brands` where id = $id");
    ?>

    <div class="progress mb-2">
<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">LOADING...</div> </div>
<meta http-equiv="refresh" content="0">

<?php
}
        ?>


                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </th>
                                            <th>IMG</th>
                                            <th>Adı</th>
                                            
                                       
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                       <?php 
                    $partners = mysqli_query($conn, "SELECT * FROM `brands` order by id DESC");
                    while($partner = mysqli_fetch_array($partners)){
                    ?>
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            
                                            <td><img class="img-fluid" style="max-width: 100px;" src="<?php echo $siteurl; ?>img/brands-logo/<?php echo $partner['logo'];?>" alt=""></td>
                                            
                                            <td> <?php echo $partner['name_az']; ?> </td>
                                            
                                            <td>
                                                <div class="table-data-feature">
                                                   
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit" data-toggle="modal" data-target="#largeModal<?php echo $partner['id']; ?>"></i>
                                                    </button>
                                                    <button class="item" type="button" 
data-toggle="modal" data-target="#staticModal<?php echo $partner['id']; ?>" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                   
                                            
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- modal static -->
            <div class="modal fade" id="staticModal<?php echo $partner['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
             data-backdrop="static">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel"><?php echo $partner['name_az']; ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                               Bu brendi silmək istədiyinizdən əminsiniz?
                            </p>
                        </div>
                        <div class="modal-footer">
                            <form method="post" action="">
                                <select name="id">
                                    <option value="<?php echo $partner['id']; ?>"><?php echo $partner['name_az']; ?></option>
                                </select>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $l[72]; ?></button>
                            <input type="submit" name="sil" class="btn btn-primary" value="<?php echo $l[71]; ?>">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal static -->

			<!-- modal large -->
			<div class="modal fade" id="largeModal<?php echo $partner['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="largeModalLabel"><?php echo $partner['name_az']; ?></h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">

							<p>
								
							</p>
							<div class="col-lg-12">
                                <div class="card">
                                   
                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Brend kodu</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="id" class="form-control">
                                                        <option value="<?php echo $partner['id']; ?>"><?php echo $partner['id']; ?></option>
                                                    </select>
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Brend adı AZ</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $partner['name_az']; ?>"  class="form-control" name="name_az">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Brend açıqlaması AZ</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea rows='3'  class="form-control" name="text_az"><?php echo $partner['text_az']; ?></textarea>
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                            <hr/>
                                                 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Brend adı EN</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $partner['name_en']; ?>"  class="form-control" name="name_en">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Brend açıqlaması EN</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea rows='3'  class="form-control" name="text_en"><?php echo $partner['text_en']; ?></textarea>
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                            <hr/>
                                                 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Brend adı RU</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $partner['name_ru']; ?>"  class="form-control" name="name_ru">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Brend açıqlaması RU</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea rows='3'  class="form-control" name="text_ru"><?php echo $partner['text_ru']; ?></textarea>
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>

                                             
                                            

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label"><?php echo $l[181]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="uploadedFile" class="form-control-file">
                                                </div>
                                            </div>
                                           <div class="card-footer">
                                        <input type="submit" name="change" value="<?php echo $l[68]; ?>" class="btn btn-primary btn-sm col-12 h50">
                                            
                                      
                                       
                                    </div> 
                                        </form>
                                    </div>
                                    
                                </div>
                                
                            </div>
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $l[69]; ?></button>
						</div>
					</div>
				</div>
			</div>
			<!-- end modal large -->
                                           <tr class="spacer"></tr>


                                       <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->
            
            		<script>
                pagetitle.innerHTML= "Brendlər";
                addbtn.innerHTML = '<i class="fas fa-plus"></i> Yeni brend';
                addbtn.onclick = function() { window.location='add_brand.php';};
            </script>
            

<?php

include  'ekran/footer.php';
?>