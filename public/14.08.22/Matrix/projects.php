<?php
include  'ekran/header.php';

?>

    <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35"><?php echo$l[53];?></h3>
<?php 

 if(isset($_POST['change'])){
$ppid = $_POST['id'];
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

$imgtap = mysqli_query($conn, "SELECT * FROM `projects` where `id`=$ppid ");
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
$uploadFileDir = ''.$sitefolder.'img/projects/';
$dest_path = $uploadFileDir . $newFileName;
 
if(move_uploaded_file($fileTmpPath, $dest_path))
{
  $message ='File is successfully uploaded.';
}
else
{
  $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
} }

$update = mysqli_query($conn, "UPDATE `projects` set
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
`status` = '$status' WHERE `id` = '$ppid';
 ");
?>

<div class="progress mb-2">
<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">LOADING...</div> </div>
<meta http-equiv="refresh" content="0">

<?php
}

if(isset($_POST['sil'])){
    $id = $_POST['id'];

    $sil = mysqli_query($conn, "DELETE FROM `projects` where id = $id");
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
                                            <th><?php echo$l[55];?></th>
                                            <th><?php echo$l[56];?></th>
                                            <th><?php echo$l[57];?></th>
                                            <th><?php echo$l[58];?></th>
                                            <th><?php echo$l[59];?></th>
                                       
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                       <?php 
                    $projects = mysqli_query($conn, "SELECT * FROM `projects` order by id DESC");
                    while($project = mysqli_fetch_array($projects)){
                    ?>
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                              <td><img class="img-fluid" style="max-width: 100px;" src="<?php echo $siteurl; ?>img/projects/<?php echo $project['img'];?>" alt=""></td>
                                            <td><?php echo $project['name']; ?></td>
                                            <td>
                                                <span class="block-email"><?php echo $project['customer']; ?></span>
                                            </td>
                                            <td class="desc"><?php echo $project['start_date']; ?></td>
                                            <td class="desc"><?php echo $project['finish_date']; ?></td>
                                            <td>
                                                <span class="status--process"><?php 
                                                if($project['status'] == 1){
                                                	$pst = "$l[35]";
                                                }else{
                                                	$pst = "$l[36]";
                                                }
                                                echo $pst; ?></span>
                                            </td>
                                            
                                            <td>
                                                <div class="table-data-feature">
                                                   
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit" data-toggle="modal" data-target="#largeModal<?php echo $project['id']; ?>"></i>
                                                    </button>
                                                    <button class="item" type="button" 
data-toggle="modal" data-target="#staticModal<?php echo $project['id']; ?>" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                   
                                            
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- modal static -->
            <div class="modal fade" id="staticModal<?php echo $project['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
             data-backdrop="static">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel"><?php echo $project['name']; ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                <?php echo $l[70]; ?>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <form method="post" action="">
                                <select name="id">
                                    <option value="<?php echo $project['id']; ?>"><?php echo $project['name']; ?></option>
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
			<div class="modal fade" id="largeModal<?php echo $project['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="largeModalLabel"><?php echo $project['name']; ?></h5>
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
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[67]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="id" class="form-control">
                                                        <option value="<?php echo $project['id']; ?>"><?php echo $project['id']; ?></option>
                                                    </select>
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[63]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="name" value="<?= htmlspecialchars(trim($project['name'])); ?>" class="form-control">
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[56]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="customer" value="<?php echo htmlspecialchars(trim($project['customer'])); ?>" class="form-control">
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[57]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="start_date" value="<?php echo $project['start_date']; ?>" class="form-control">
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[58]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="finish_date" value="<?php echo $project['finish_date']; ?>" class="form-control">
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[59]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="status" id="select" class="form-control">
                                                        <option value="0" <?php if($project['status'] == 0){ echo "selected";}; ?>><?php echo $l[36]; ?></option>
                                                        <option value="1" <?php if($project['status'] == 1){ echo "selected";}; ?>><?php echo $l[35]; ?></option>
                                                    </select>
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[61]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text_en" id="textarea-input" rows="4" class="form-control"><?php echo htmlspecialchars(trim($project['text_en'])); ?></textarea>
                                                </div>
                                            </div> 
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[60]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text_az" id="textarea-input" rows="4" value="Content..." class="form-control"><?php echo htmlspecialchars(trim($project['text_az'])); ?></textarea>
                                                </div>
                                            </div> 
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[62]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text_ru" id="textarea-input" rows="4" value="Content..." class="form-control"><?php echo htmlspecialchars(trim($project['text_ru'])); ?></textarea>
                                                </div>
                                            </div>

                                               <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[65]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text2_en" id="textarea-input" rows="4" class="form-control"><?php echo htmlspecialchars(trim($project['text2_en'])); ?></textarea>
                                                </div>
                                            </div> 
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[64]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text2_az" id="textarea-input" rows="4" value="Content..." class="form-control"><?php echo htmlspecialchars(trim($project['text2_az'])); ?></textarea>
                                                </div>
                                            </div> 
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[66]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text2_ru" id="textarea-input" rows="4" value="Content..." class="form-control"><?php echo htmlspecialchars(trim($project['text2_ru'])); ?></textarea>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">File input</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="" name="uploadedFile" class="form-control-file">
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[187]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="mainpage" id="mainpage" class="form-control">
                                                        <option value="1" <?php if($project['mainpage'] == 1){ echo "selected";}; ?>><?php echo $l[188]; ?></option>
                                                        <option value="0" <?php if($project['mainpage'] == 0){ echo "selected";}; ?>><?php echo $l[189]; ?></option>
                                                    </select>
                                                    <small class="form-text text-muted"></small>
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