     <?php
include  'ekran/header.php';
$mp_c = mysqli_query($conn, "SELECT * FROM `mp_config` ");
$mp = mysqli_fetch_array($mp_c);
?>

    <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35"><?php echo$l[122];?></h3>

                                                    <?php 

 if(isset($_POST['set'])){
$title1_az = $_POST['title1_az'];
$text1_az = $_POST['text1_az'];
$title1_en = $_POST['title1_en'];
$text1_en = $_POST['text1_en'];
$title1_ru = $_POST['title1_ru'];
$text1_ru = $_POST['text1_ru'];
$btn1_az = $_POST['btn1_az'];
$btn1_en = $_POST['btn1_en'];
$btn1_ru = $_POST['btn1_ru'];
$btn1 = $_POST['btn1'];
$title2_az = $_POST['title2_az'];
$text2_az = $_POST['text2_az'];
$title2_en = $_POST['title2_en'];
$text2_en = $_POST['text2_en'];
$title2_ru = $_POST['title2_ru'];
$text2_ru = $_POST['text2_ru'];
$btn2_az = $_POST['btn2_az'];
$btn2_en = $_POST['btn2_en'];
$btn2_ru = $_POST['btn2_ru'];
$btn2 = $_POST['btn2'];

$add = mysqli_query($conn, "UPDATE `mp_config` set
`title1_az` = '$title1_az',
`text1_az` = '$text1_az',
`title1_en` = '$title1_en',
`text1_en` = '$text1_en',
`title1_ru` = '$title1_ru',
`text1_ru` = '$text1_ru',
`btn1_az` = '$btn1_az',
`btn1_en` = '$btn1_en',
`btn1_ru` = '$btn1_ru',
`btn1` = '$btn1',
`title2_az` = '$title2_az',
`text2_az` = '$text2_az',
`title2_en` = '$title2_en',
`text2_en` = '$text2_en',
`title2_ru` = '$title2_ru',
`text2_ru` = '$text2_ru',
`btn2_az` = '$btn2_az',
`btn2_en` = '$btn2_en',
`btn2_ru` = '$btn2_ru',
`btn2` = '$btn2'
  WHERE `id` = '0';

 ");
?>

<div class="progress mb-2">
<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">LOADING...</div> </div>
<meta http-equiv="refresh" content="0; url=mp_config.php"/>
<?php } ?>

     <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Title 1 AZ</label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="title1_az" id="textarea-input" rows="2" value="Content..." class="form-control"><?php echo $mp['title1_az']; ?></textarea>
                                                </div>
                                            </div> 
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Text 1 AZ</label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text1_az" id="textarea-input" rows="4" value="Content..." class="form-control"><?php echo $mp['text1_az']; ?></textarea>
                                                </div>
                                            </div> 
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Title 1 EN</label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="title1_en" id="textarea-input" rows="2" value="Content..." class="form-control"><?php echo $mp['title1_en']; ?></textarea>
                                                </div>
                                            </div>
                                          
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Text 1 EN</label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text1_en" id="textarea-input" rows="4" value="Content..." class="form-control"><?php echo $mp['text1_en']; ?></textarea>
                                                </div>
                                            </div> 
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Title 1 RU</label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="title1_ru" id="textarea-input" rows="2" value="Content..." class="form-control"><?php echo $mp['title1_ru']; ?></textarea>
                                                </div>
                                            </div> 
                                         <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Text 1 RU</label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text1_ru" id="textarea-input" rows="4" value="Content..." class="form-control"><?php echo $mp['text1_ru']; ?></textarea>
                                                </div>
                                            </div> 
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">BUTTON 1 AZ</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $mp['btn1_az']; ?>"  class="form-control" name="btn1_az">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">BUTTON 1 EN</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $mp['btn1_en']; ?>"  class="form-control" name="btn1_en">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">BUTTON 1 RU</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $mp['btn1_ru']; ?>"  class="form-control" name="btn1_ru">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">BUTTON 1 URL</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $mp['btn1']; ?>"  class="form-control" name="btn1">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>

                                <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Title 2 AZ</label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="title2_az" id="textarea-input" rows="2" value="Content..." class="form-control"><?php echo $mp['title2_az']; ?></textarea>
                                                </div>
                                            </div> 
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Text 2 AZ</label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text2_az" id="textarea-input" rows="4" value="Content..." class="form-control"><?php echo $mp['text2_az']; ?></textarea>
                                                </div>
                                            </div> 
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Title 2 EN</label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="title2_en" id="textarea-input" rows="2" value="Content..." class="form-control"><?php echo $mp['title2_en']; ?></textarea>
                                                </div>
                                            </div>
                                          
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Text 2 EN</label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text2_en" id="textarea-input" rows="4" value="Content..." class="form-control"><?php echo $mp['text2_en']; ?></textarea>
                                                </div>
                                            </div> 
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Title 2 RU</label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="title2_ru" id="textarea-input" rows="2" value="Content..." class="form-control"><?php echo $mp['title2_ru']; ?></textarea>
                                                </div>
                                            </div> 
                                         <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Text 2 RU</label>
                                                </div>
                                                 <div class="col-12 col-md-9">
                                                    <textarea name="text2_ru" id="textarea-input" rows="4" value="Content..." class="form-control"><?php echo $mp['text2_ru']; ?></textarea>
                                                </div>
                                            </div> 
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">BUTTON 2 AZ</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $mp['btn2_az']; ?>"  class="form-control" name="btn2_az">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">BUTTON 2 EN</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $mp['btn2_en']; ?>"  class="form-control" name="btn2_en">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">BUTTON 2 RU</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $mp['btn2_ru']; ?>"  class="form-control" name="btn2_ru">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>

                                                <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">BUTTON 2 URL</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $mp['btn2']; ?>"  class="form-control" name="btn2">
                                                   
                                                    <small class="form-text text-muted"></small>
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