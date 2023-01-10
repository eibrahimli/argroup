<?php
include  'ekran/header.php';

?>

    <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35"><?php echo$l[89];?></h3>
<?php 

 if(isset($_POST['change'])){
$ppid = $_POST['id'];
$header_en = $_POST['header_en'];
$header_az = $_POST['header_az'];
$header_ru = $_POST['header_ru'];
$text_en = $_POST['text_en'];
$text_az = $_POST['text_az'];
$text_ru = $_POST['text_ru'];
$videol = $_POST['videol'];

$imgtap = mysqli_query($conn, "SELECT * FROM `news` where `id`=$ppid ");
$imgta = mysqli_fetch_array($imgtap);

@$fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
@$fileName = $_FILES['uploadedFile']['name'];
@$fileSize = $_FILES['uploadedFile']['size'];
@$fileType = $_FILES['uploadedFile']['type'];
$fileNameCmps = explode(".", $fileName);
$fileExtension = strtolower(end($fileNameCmps));
$newFileName = $imgta['img'];

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
$uploadFileDir = ''.$sitefolder.'img/blog/main-blog/';
$dest_path = $uploadFileDir . $newFileName;
 
if(move_uploaded_file($fileTmpPath, $dest_path))
{
  $message ='File is successfully uploaded.';
}
else
{
  $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
} }


$update = mysqli_query($conn, "UPDATE `news` set
`header_en` = '$header_en',
`header_az` = '$header_az',
`header_ru` = '$header_ru',
`text_en` = '$text_en',
`text_az` = '$text_az',
`videol` = '$videol',
`text_ru` = '$text_ru'
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

    $sil = mysqli_query($conn, "DELETE FROM `news` where id = $id");
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
                                            <th><?php echo$l[79];?></th>
                                            <th><?php echo$l[78];?></th>
                                            <th><?php echo$l[80];?></th>
                                            <th><?php echo$l[81];?></th>
                                            
                                       
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                       <?php 
                    $news = mysqli_query($conn, "SELECT * FROM `news` order by id DESC");
                    while($new = mysqli_fetch_array($news)){
                    			 $xebercat =   $new['cat'];
                                $xeber_cats = mysqli_query($conn, "SELECT * FROM `news_cats` where `id` = $xebercat ");
                                $xeber_cat = mysqli_fetch_array($xeber_cats);
                             ?>
                                 <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            
                                           
                                            <td><img class="img-fluid" style="max-width: 100px;" src="<?php echo $siteurl; ?>img/blog/main-blog/<?php echo $new['img'];?>" alt=""></td>
                                            <td> <?php echo $new['date']; ?> </td>
                                            <td> <?php echo $xeber_cat['name_'.$lang.'']; ?> </td>
                                            <td> <?php echo $new['header_az']; ?> </td>
                                            <td> <?php echo $new['o_s']; ?> </td>
                                            
                                            <td>
                                                <div class="table-data-feature">
                                                   
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit" data-toggle="modal" data-target="#largeModal<?php echo $new['id']; ?>"></i>
                                                    </button>
                                                    <button class="item" type="button" 
data-toggle="modal" data-target="#staticModal<?php echo $new['id']; ?>" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                   
                                            
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- modal static -->
            <div class="modal fade" id="staticModal<?php echo $new['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
             data-backdrop="static">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel"><?php echo $new['id']; ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                <?php echo $l[111]; ?>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <form method="post" action="">
                                <select name="id">
                                    <option value="<?php echo $new['id']; ?>"><?php echo $new['id']; ?></option>
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
			<div class="modal fade" id="largeModal<?php echo $new['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="largeModalLabel"><?php echo $new['id']; ?></h5>
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
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[88]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="id" class="form-control">
                                                        <option value="<?php echo $new['id']; ?>"><?php echo $new['id']; ?></option>
                                                    </select>
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[83]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $new['header_en']; ?>"  class="form-control" name="header_en">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[82]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $new['header_az']; ?>"  class="form-control" name="header_az">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>

											 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[84]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $new['header_ru']; ?>"  class="form-control" name="header_ru">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>



                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[86]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text_en" id="textarea-input" rows="4" class="form-control"><?php echo $new 	['text_en']; ?></textarea>
                                                </div>
                                            </div>
                                                 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[85]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text_az" id="textarea-input" rows="4" class="form-control"><?php echo $new 	['text_az']; ?></textarea>
                                                </div>
                                            </div>
                                                 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[87]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text_ru" id="textarea-input" rows="4" class="form-control"><?php echo $new 	['text_ru']; ?></textarea>
                                                </div>
                                            </div>
                                             
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[142]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $new['videol']; ?>"  class="form-control" name="videol">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label"><?php echo $l[90]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="uploadedFile" class="form-control-file">
                                                </div>
                                            </div>
                                           <div class="card-footer">
                                        <input type="submit" name="change" value="<?php echo $l[68]; ?>" class="btn btn-primary btn-sm">
                                            
                                      
                                       
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

<?php

include  'ekran/footer.php';
?>