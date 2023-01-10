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
$name_az = $_POST['name_az'];
$name_en = $_POST['name_en'];
$name_ru = $_POST['name_ru'];
$text_az = $_POST['text_az'];
$text_en = $_POST['text_en'];
$text_ru = $_POST['text_ru'];
$ytb = $_POST['ytb'];
$cat = $_POST['cat'];
$kod = md5(time().'9793');

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

$add = mysqli_query($conn, "INSERT INTO `services` set 
    `name_az` = '$name_az',
    `name_en` = '$name_en',
    `name_ru` = '$name_ru',
    `text_az` = '$text_az',
    `text_en` = '$text_en',
    `kod` = '$kod',
    `ytb` = '$ytb',
    `cat` = '$cat',
    `psay` = '$fayl_say',
    `text_ru` = '$text_ru'
 ");
?>

<div class="progress mb-2">
<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">LOADING...</div> </div>
<meta http-equiv="refresh" content="5; url=services.php"/>
<?php } ?>


                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Xidmət kateqoriyası</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select class='form-control' name='cat'>
<?php $brtap = mysqli_query($conn, "SELECT * FROM `service_cats`");
while($brw = mysqli_fetch_array($brtap)){ ?>
                                                        <option value='<?= $brw['id']; ?>'><?= $brw['name_az']; ?></option>
<?php } ?>
                                                    </select>
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[114]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value=""  class="form-control" name="name_az">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[115]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value=""  class="form-control" name="name_en">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[116]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value=""  class="form-control" name="name_ru">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[117]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text_az" id="textarea-input" rows="4" value="Content..." class="form-control"></textarea>
                                                </div>
                                            </div> 
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[118]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text_en" id="textarea-input" rows="4" value="Content..." class="form-control"></textarea>
                                                </div>
                                            </div> 
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[119]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text_ru" id="textarea-input" rows="4" value="Content..." class="form-control"></textarea>
                                                </div>
                                            </div>
                                               <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Youtube video</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value=""  class="form-control" name="ytb">
                                                   
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
                                        <input type="submit" name="add" value="<?php echo $l[54]; ?>" class="btn btn-primary btn-sm col-12 h50">
                                            
                                      
                                       
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
			       <script>
                pagetitle.innerHTML= "Yeni xidmət";
                addbtn.innerHTML = '<i class="fas fa-list"></i> Xidmətlər';
                addbtn.onclick = function() { window.location='services.php';};
            </script>
        <?php

include  'ekran/footer.php';
?>