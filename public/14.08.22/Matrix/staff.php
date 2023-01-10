 <?php
include  'ekran/header.php';

?>

    <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35"><?php echo$l[146];?></h3>
<?php 

 if(isset($_POST['change'])){
$ppid = $_POST['id'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$vezife = $_POST['vezife']; 
$full_name = $_POST['full_name'];
$pkod = md5(time().'9793');

@$fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
@$fileName = $_FILES['uploadedFile']['name'];
@$fileSize = $_FILES['uploadedFile']['size'];
@$fileType = $_FILES['uploadedFile']['type'];
$fileNameCmps = explode(".", $fileName);
$fileExtension = strtolower(end($fileNameCmps));
$newFileName = $pkod.'.'.$fileExtension;

if ($fileTmpPath){
    $update = mysqli_query($conn, "UPDATE `komanda` set `photo` = '$newFileName'  WHERE `id` = '$ppid'");
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

$update = mysqli_query($conn, "UPDATE `komanda` set
`email` = '$email',
`phone` = '$phone',
`vezife` = '$vezife',
`full_name` = '$full_name'
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

    $sil = mysqli_query($conn, "DELETE FROM `komanda` where id = $id");
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
                                            <th>ID</th> 
                                           <th><?php echo$l[147];?></th>
                                            <th><?php echo$l[148];?></th>
                                            <th><?php echo$l[125];?></th>
                                            <th><?php echo$l[126];?></th>
                                            
                                       
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                       <?php 
                    $staffx = mysqli_query($conn, "SELECT * FROM `komanda` order by id DESC");
                    while($staff = mysqli_fetch_array($staffx)){
                               
                             ?>
                                 <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            
                                           
                                            
                                            <td> <?php echo $staff['id']; ?> </td>
                                            <td> <?php echo $staff['full_name']; ?> </td>
                                            <td> <?php echo $staff['vezife']; ?> </td>
                                            <td> <?php echo $staff['phone']; ?> </td>
                                            <td> <?php echo $staff['email']; ?> </td>
                                            
                                            <td>
                                                <div class="table-data-feature">
                                                   
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit" data-toggle="modal" data-target="#largeModal<?php echo $staff['id']; ?>"></i>
                                                    </button>
                                                    <button class="item" type="button" 
data-toggle="modal" data-target="#staticModal<?php echo $staff['id']; ?>" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                   
                                            
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- modal static -->
            <div class="modal fade" id="staticModal<?php echo $staff['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
             data-backdrop="static">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel"><?php echo $staff['id']; ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                <?php echo $l[153]; ?>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <form method="post" action="">
                                <select name="id">
                                    <option value="<?php echo $staff['id']; ?>"><?php echo $staff['id']; ?></option>
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
            <div class="modal fade" id="largeModal<?php echo $staff['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="largeModalLabel"><?php echo $staff['id']; ?></h5>
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
                                                    <label for="text-input" class=" form-control-label">ID</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="id" class="form-control">
                                                        <option value="<?php echo $staff['id']; ?>"><?php echo $staff['id']; ?></option>
                                                    </select>
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[147]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $staff['full_name']; ?>"  class="form-control" name="full_name">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[148]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $staff['vezife']; ?>"  class="form-control" name="vezife">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[125]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $staff['phone']; ?>"  class="form-control" name="phone">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>

                                               <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[126]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $staff['email']; ?>"  class="form-control" name="email">
                                                   
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