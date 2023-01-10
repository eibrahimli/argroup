<?php
include  'ekran/header.php';

?>

    <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Məhsullar</h3>
<?php 

 if(isset($_POST['change'])){
$ppid = $_POST['id'];
$brand = $_POST['brand'];
$cat = $_POST['cat'];
$name_az = $_POST['name_az'];
$text_az = $_POST['text_az'];
$name_en = $_POST['name_en'];
$text_en = $_POST['text_en'];
$name_ru = $_POST['name_ru'];
$text_ru = $_POST['text_ru'];
$ytb = $_POST['ytb'];

$imgtap = mysqli_query($conn, "SELECT * FROM `products` where `id`=$ppid ");
$imgta = mysqli_fetch_array($imgtap);


$newFileName = $imgta['img'];
$psay = $imgta['psay'];

$qovluq="".$sitefolder."img/products-img";
$fayl_say=count($_FILES['fayl']['name']);
$kod = $imgta['kod'];
if($fayl_say =! 0){
$kod = md5(time().'3795');
$psay = $fayl_say;
for($i=0;$i<$fayl_say;$i++){
    if(!empty($_FILES['fayl']['name'][$i])){
        $faylname = $_FILES['fayl']['name'][$i];
        $faylad = explode(".", $faylname);
        $fayltip = strtolower(end($faylad));
        $yeniad = $kod .$i. '.' . $fayltip;
        move_uploaded_file($_FILES['fayl']['tmp_name'][$i], $qovluq."/".$yeniad);
    }
}
}


$update = mysqli_query($conn, "UPDATE `products` set
`name_az` = '$name_az', `text_az` = '$text_az', 
`name_en` = '$name_en', `text_en` = '$text_en', 
`psay` = '$psay', `kod` = '$kod', `ytb` = '$ytb',
`name_ru` = '$name_ru', `text_ru` = '$text_ru', `cat` = '$cat',
`brand` = '$brand' WHERE `id` = '$ppid';
 ");
?>
<div class="progress mb-2">
<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">LOADING...</div> </div>
<meta http-equiv="refresh" content="0">

<?php
}

if(isset($_POST['sil'])){
    $id = $_POST['id'];

    $sil = mysqli_query($conn, "DELETE FROM `products` where id = $id");
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
                    $partners = mysqli_query($conn, "SELECT * FROM `products` order by id DESC");
                    while($partner = mysqli_fetch_array($partners)){
                    ?>
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            
                                            <td><img class="img-fluid" style="max-width: 100px;" src="<?php echo $siteurl; ?>img/products-img/<?php echo $partner['kod'];?>0.jpg" alt=""></td>
                                            
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
                               Bu Məhsulu silmək istədiyinizdən əminsiniz?
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
                                                    <label for="text-input" class=" form-control-label">Məhsul kodu</label>
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
                                                    <label for="text-input" class=" form-control-label">Məhsul kateqoriyası</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select id='c<?= $partner['id']; ?>' class='form-control' name='cat'>
<?php $brtap = mysqli_query($conn, "SELECT * FROM `product_cats`");
while($brw = mysqli_fetch_array($brtap)){ ?>
                                                        <option value='<?= $brw['id']; ?>'><?= $brw['name_az']; ?></option>
<?php } ?>
                                                    </select>
                                                   <script>
document.getElementById('c<?= $partner['id']; ?>').value = "<?= $partner['cat']; ?>";
                                                   </script>
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>  
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Məhsul brendi</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select id='b<?= $partner['id']; ?>' class='form-control' name='brand'>
<?php $brtap = mysqli_query($conn, "SELECT * FROM `brands`");
while($brw = mysqli_fetch_array($brtap)){ ?>
                                                        <option value='<?= $brw['id']; ?>'><?= $brw['name_az']; ?></option>
<?php } ?>
                                                    </select>
                                                   <script>
document.getElementById('b<?= $partner['id']; ?>').value = "<?= $partner['brand']; ?>";
                                                   </script>
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                            
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Məhsul adı AZ</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $partner['name_az']; ?>"  class="form-control" name="name_az">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Məhsul açıqlaması AZ</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea rows='3'  class="form-control" name="text_az"><?php echo $partner['text_az']; ?></textarea>
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
<hr/>
                                               <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Məhsul adı EN</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $partner['name_en']; ?>"  class="form-control" name="name_en">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Məhsul açıqlaması EN</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea rows='3'  class="form-control" name="text_en"><?php echo $partner['text_en']; ?></textarea>
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
<hr/>                                       
                                               <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Məhsul adı RU</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $partner['name_ru']; ?>"  class="form-control" name="name_ru">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Məhsul açıqlaması RU</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea rows='3'  class="form-control" name="text_ru"><?php echo $partner['text_ru']; ?></textarea>
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>

                                             
                                            

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Məhsul şəkilləri</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="fayl[]" name="fayl[]" class="form-control-file" multiple="multiple">
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Məhsul videosu</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea rows='3'  class="form-control" name="ytb"><?php echo $partner['ytb']; ?></textarea>
                                                   
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