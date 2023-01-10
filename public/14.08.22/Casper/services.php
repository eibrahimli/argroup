<?php
include  'ekran/header.php';

?>

    <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35"><?php echo$l[120];?></h3>
<?php 

 if(isset($_POST['change'])){
$ppid = $_POST['id'];


$cat = $_POST['cat'];
$name_az = $_POST['name_az'];
$name_en = $_POST['name_en'];
$name_ru = $_POST['name_ru'];
$text_az = $_POST['text_az'];
$text_en = $_POST['text_en'];
$text_ru = $_POST['text_ru'];
$ytb = $_POST['ytb'];
$kod = md5(time().'9793');
$psay=count($_FILES['fayl']['name']);

$qovluq="".$sitefolder."img/services";
$fayl_say=count($_FILES['fayl']['name']);

for($i=0;$i<$fayl_say;$i++){
    if(!empty($_FILES['fayl']['name'][$i])){
        $faylname = $_FILES['fayl']['name'][$i];
        $faylad = explode(".", $faylname);
        $fayltip = strtolower(end($faylad));
        $yeniad = $kod .$i. '.' . $fayltip;
        move_uploaded_file($_FILES['fayl']['tmp_name'][$i], $qovluq."/".$yeniad);
    }
}


$update = mysqli_query($conn, "UPDATE `services` set
`name_az` = '$name_az',
`name_en` = '$name_en',
`name_ru` = '$name_ru',
`text_az` = '$text_az',
`text_en` = '$text_en',
`cat` = '$cat',
`ytb` = '$ytb',
`kod` = '$kod',
`psay` = '$psay',
`text_ru` = '$text_ru'
  WHERE `id` = '$ppid';
 ");
?>
<div class="progress mb-2">
<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">LOADING...</div> </div>
<meta http-equiv="refresh" content="0; url=services.php"/>
<?php
}
if(@$_GET['act'] == "vsil"){
    $vid = $_GET['vid'];
    $sil = mysqli_query($conn, "DELETE FROM `service_video` where id = $vid");
}
if(isset($_POST['sil'])){
    $id = $_POST['id'];

    $sil = mysqli_query($conn, "DELETE FROM `services` where id = $id");
     ?>

    <div class="progress mb-2">
<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">LOADING...</div> </div>
<meta http-equiv="refresh" content="0">

<?php
}

if(isset($_POST['addv'])){
    $id = $_POST['id'];
    $yvideo = $_POST['yvideo'];
    
    $sil = mysqli_query($conn, "INSERT INTO `service_video` set `service` = '$id', `video` = '$yvideo'");
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
                                            <th><?php echo$l[114];?></th>
                                           <th><?php echo$l[115];?></th>
                                            <th><?php echo$l[116];?></th>
                                            <th><?php echo$l[117];?></th>
                                            <th><?php echo$l[118];?></th>
                                            
                                       
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                       <?php 
                    $services = mysqli_query($conn, "SELECT * FROM `services` order by id DESC");
                    while($service = mysqli_fetch_array($services)){
                        $servicid = $service['id'];
                               
                             ?>
                                 <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            
                                           
                                            
                                            <td> <?php echo $service['id']; ?> </td>
                                            <td> <?php echo $service['name_az']; ?> </td>
                                            <td> <?php echo $service['name_en']; ?> </td>
                                            <td> <?php echo $service['name_ru']; ?> </td>
                                            <td> <?php echo $service['text_az']; ?> </td>
                                            <td> <?php echo $service['text_en']; ?> </td>
                                            
                                            <td>
                                                <div class="table-data-feature">
                                                   
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit" data-toggle="modal" data-target="#largeModal<?php echo $service['id']; ?>"></i>
                                                    </button>
                                                    <button class="item" type="button" 
data-toggle="modal" data-target="#staticModal<?php echo $service['id']; ?>" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                       <button class="item" type="button" 
data-toggle="modal" data-target="#ytbmdl<?php echo $service['id']; ?>" title="Youtube">
                                                        <i class="fab fa-youtube"></i>
                                                    </button>
                                                   
                                            
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- modal static -->
            <div class="modal fade" id="staticModal<?php echo $service['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
             data-backdrop="static">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel"><?php echo $service['id']; ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                <?php echo $l[121]; ?>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <form method="post" action="">
                                <select name="id">
                                    <option value="<?php echo $service['id']; ?>"><?php echo $service['id']; ?></option>
                                </select>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $l[72]; ?></button>
                            <input type="submit" name="sil" class="btn btn-primary" value="<?php echo $l[71]; ?>">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal static -->
            
            <div class="modal fade" id="ytbmdl<?php echo $service['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
             data-backdrop="static">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel"><?php echo $service['id']; ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="">
                        <div class="modal-body">
                            <p>
                                Yeni youtube videosu: <br/>
                                <input name='yvideo' class='form-control'><br/>
                                 <button name='addv' class='btn btn-primary w-100'>Əlavə et</button>
                                 <hr/>
                             Əlavə Youtube videolar<hr/>
<?php $videolar = mysqli_query($conn, "SELECT * FROM `service_video` WHERE `service` = '$servicid'");
$iv = 1; while($sv = mysqli_fetch_array($videolar)){
    echo $iv.'. '.$sv['video'].''; echo "<div style='float:right;'><a href='?act=vsil&vid=".$sv['id']."'>Sil</a></div><hr/>";
$iv++; }
                              ?>
                            </p>
                        </div>
                        <div class="modal-footer">
                                <select name="id">
                                    <option value="<?php echo $service['id']; ?>"><?php echo $service['id']; ?></option>
                                </select>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
                        </div>
                         </form>
                    </div>
                </div>
            </div>

            <!-- modal large -->
            <div class="modal fade" id="largeModal<?php echo $service['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="largeModalLabel"><?php echo $service['id']; ?></h5>
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
                                        <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Kod</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="id" class="form-control">
                                                        <option value="<?php echo $service['id']; ?>"><?php echo $service['id']; ?></option>
                                                    </select>
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                               <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Xidmət kateqoriyası</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select id='b<?= $service['id']; ?>' class='form-control' name='cat'>
<?php $brtap = mysqli_query($conn, "SELECT * FROM `service_cats`");
while($brw = mysqli_fetch_array($brtap)){ ?>
                                                        <option value='<?= $brw['id']; ?>'><?= $brw['name_az']; ?></option>
<?php } ?>
                                                    </select>
                                                   <script>
document.getElementById('b<?= $service['id']; ?>').value = "<?= $service['cat']; ?>";
                                                   </script>
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[114]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $service['name_az']; ?>"  class="form-control" name="name_az">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[115]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $service['name_en']; ?>"  class="form-control" name="name_en">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[116]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $service['name_ru']; ?>"  class="form-control" name="name_ru">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[117]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text_az" id="textarea-input" rows="4" value="Content..." class="form-control"><?php echo $service['text_az']; ?></textarea>
                                                </div>
                                            </div> 
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[118]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text_en" id="textarea-input" rows="4" value="Content..." class="form-control"><?php echo $service['text_en']; ?></textarea>
                                                </div>
                                            </div> 
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[119]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text_ru" id="textarea-input" rows="4" value="Content..." class="form-control"><?php echo $service['text_ru']; ?></textarea>
                                                </div>
                                            </div> 
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Youtube video</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                   <textarea name="ytb[]" rows="4" value="Content..." class="form-control"><?php echo $service['ytb']; ?></textarea>
                                                </div>
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                                       
                                            </div>
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Photos</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="fayl[]" name="fayl[]" class="form-control-file" multiple="multiple">
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