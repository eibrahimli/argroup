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
$text_az = $_POST['text_az'];
$name_en = $_POST['name_en'];
$text_en = $_POST['text_en'];
$name_ru = $_POST['name_ru'];
$text_ru = $_POST['text_ru'];
$brand = $_POST['brand'];
$cat = $_POST['cat'];
$kod = md5(time().'3379');
$ytb = $_POST['ytb'];

$qovluq="".$sitefolder."img/products-img";
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


$add = mysqli_query($conn, "INSERT INTO `products` set 
`name_az` = '$name_az', `text_az` = '$text_az', 
`name_en` = '$name_en', `text_en` = '$text_en',  `ytb` = '$ytb',
`name_ru` = '$name_ru', `text_ru` = '$text_ru', `cat` = '$cat',
`kod` = '$kod', `psay` = '$fayl_say',
`brand` = '$brand',  `img` = '$newFileName' ");
?>

<div class="progress mb-2">
<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">LOADING...</div> </div>
<meta http-equiv="refresh" content="0; url=products.php"/>
<?php } ?>


                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Məhsul kateqoriyası</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select id='b<?= $partner['id']; ?>' class='form-control' name='cat'>
<?php $brtap = mysqli_query($conn, "SELECT * FROM `product_cats`");
while($brw = mysqli_fetch_array($brtap)){ ?>
                                                        <option value='<?= $brw['id']; ?>'><?= $brw['name_az']; ?></option>
<?php } ?>
                                                    </select>
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Məhsul brendi</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name='brand' class='form-control'>
<?php $brtap = mysqli_query($conn, "SELECT * FROM `brands`");
while($brw = mysqli_fetch_array($brtap)){ ?>
                                                        <option value='<?= $brw['id']; ?>'><?= $brw['name_az']; ?></option>
<?php } ?>
                                                    </select>
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                            
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Məhsul adı AZ</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value=""  class="form-control" name="name_az">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Məhsul açıqlaması AZ</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                 <textarea name="text_az" row='3' class='form-control'></textarea>
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                            <hr/>

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Məhsul adı EN</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value=""  class="form-control" name="name_en">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Məhsul açıqlaması EN</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                 <textarea name="text_en" row='3' class='form-control'></textarea>
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                            <hr/>

                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Məhsul adı RU</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value=""  class="form-control" name="name_ru">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Məhsul açıqlaması RU</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                 <textarea name="text_ru" row='3' class='form-control'></textarea>
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                            
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Məhsul videosu</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea rows='3'  class="form-control" name="ytb"></textarea>
                                                   
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
                pagetitle.innerHTML= "Yeni məhsul";
                addbtn.innerHTML = '<i class="fas fa-cubes"></i> Məhsullar';
                addbtn.onclick = function() { window.location='products.php';};
            </script>
            
            
        <?php

include  'ekran/footer.php';
?>