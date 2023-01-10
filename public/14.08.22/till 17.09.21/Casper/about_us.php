     <?php
include  'ekran/header.php';
$about_c = mysqli_query($conn, "SELECT * FROM `about_us` ");
$cp = mysqli_fetch_array($about_c);
?>

    <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35"><?php echo$l[138];?></h3>

                                                    <?php 


 if(isset($_POST['set'])){
$slogan_az = $_POST['slogan_az'];
$slogan_en = $_POST['slogan_en'];
$slogan_ru = $_POST['slogan_ru'];

$obrand_az = $_POST['obrand_az'];
$obrand_en = $_POST['obrand_en'];
$obrand_ru = $_POST['obrand_ru'];

$about_az = $_POST['about_az'];
$about_en = $_POST['about_en'];
$about_ru = $_POST['about_ru'];

$add = mysqli_query($conn, "UPDATE `about_us` set
`slogan_az` = '$slogan_az',
`slogan_en` = '$slogan_en',
`slogan_ru` = '$slogan_ru',

`obrand_az` = '$obrand_az',
`obrand_en` = '$obrand_en',
`obrand_ru` = '$obrand_ru',


`about_az` = '$about_az',
`about_en` = '$about_en',
`about_ru` = '$about_ru'
  WHERE `id` = '1';

 ");
?>

<div class="progress mb-2">
<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">LOADING...</div> </div>
<meta http-equiv="refresh" content="0; url=about_us.php"/>
<?php } ?>

     <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        
                                       <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[156]." ".$l[94]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="slogan_az" id="textarea-input" rows="4" value="Content..." class="form-control"><?php echo $cp['slogan_az']; ?></textarea>
                                                </div>
                                            </div> 

                                                   <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[156]." ".$l[95]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="slogan_en" id="textarea-input" rows="4" value="Content..." class="form-control"><?php echo $cp['slogan_en']; ?></textarea>
                                                </div>
                                            </div> 

                                                   <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[156]." ".$l[96]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="slogan_ru" id="textarea-input" rows="4" value="Content..." class="form-control"><?php echo $cp['slogan_ru']; ?></textarea>
                                                </div>
                                            </div> 

                                                 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[157]." ".$l[94]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="about_az" id="textarea-input" rows="4" value="Content..." class="form-control"><?php echo $cp['about_az']; ?></textarea>
                                                </div>
                                            </div> 

                                                   <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[157]." ".$l[95]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="about_en" id="textarea-input" rows="4" value="Content..." class="form-control"><?php echo $cp['about_en']; ?></textarea>
                                                </div>
                                            </div> 

                                                   <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[157]." ".$l[96]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="about_ru" id="textarea-input" rows="4" value="Content..." class="form-control"><?php echo $cp['about_ru']; ?></textarea>
                                                </div>
                                            </div> 

                                              
                                                <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[158]." ".$l[94]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="obrand_az" id="textarea-input" rows="4" value="Content..." class="form-control"><?php echo $cp['obrand_az']; ?></textarea>
                                                </div>
                                            </div> 

                                                   <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[158]." ".$l[95]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="obrand_en" id="textarea-input" rows="4" value="Content..." class="form-control"><?php echo $cp['obrand_en']; ?></textarea>
                                                </div>
                                            </div> 

                                                   <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[158]." ".$l[96]; ?></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="obrand_ru" id="textarea-input" rows="4" value="Content..." class="form-control"><?php echo $cp['obrand_ru']; ?></textarea>
                                                </div>
                                            </div> 

                                           
                                              
                                            
                                            
                                           <div class="card-footer">
                                        <input type="submit" name="set" value="<?php echo $l[68]; ?>" class="btn btn-primary btn-sm">
                                            
                                      
                                       
                                    </div> 
                                        </form>
                                    </div></div></div></section>    


<?php

include  'ekran/footer.php';
?>