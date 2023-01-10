     <?php
include  'ekran/header.php';
$cp_c = mysqli_query($conn, "SELECT * FROM `settings` ");
$cp = mysqli_fetch_array($cp_c);
?>

    <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35"><?php echo$l[123];?></h3>

                                                    <?php 


 if(isset($_POST['set'])){
$email = $_POST['email'];
$phone = $_POST['phone'];
$phone2 = $_POST['phone2'];
$location = $_POST['location'];
$location2 = $_POST['location2'];
$call_time = $_POST['call_time'];
$insta = $_POST['insta'];
$fb = $_POST['fb'];
$whatsapp = $_POST['whatsapp'];
$youtube = $_POST['youtube'];

$add = mysqli_query($conn, "UPDATE `settings` set
`email` = '$email',
`phone` = '$phone',
`phone2` = '$phone2',
`location2` = '$location2',
`call_time` = '$call_time',
`insta` = '$insta',
`fb` = '$fb',
`whatsapp` = '$whatsapp',
`youtube` = '$youtube',
`location` = '$location'
  WHERE `id` = '1';

 ");
?>

<div class="progress mb-2">
<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">LOADING...</div> </div>
<meta http-equiv="refresh" content="0; url=cp_config.php"/>
<?php } ?>

     <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        
                                      
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[124]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $cp['location']; ?>"  class="form-control" name="location">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                               <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[127]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $cp['location2']; ?>"  class="form-control" name="location2">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>

                                                <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[125]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $cp['phone']; ?>"  class="form-control" name="phone">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[125]; ?> 2</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $cp['phone2']; ?>"  class="form-control" name="phone2">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[128]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $cp['call_time']; ?>"  class="form-control" name="call_time">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                                 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label"><?php echo $l[126]; ?></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $cp['email']; ?>"  class="form-control" name="email">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>

                                                 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Instagram</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $cp['insta']; ?>"  class="form-control" name="insta">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                                 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Facebook</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $cp['fb']; ?>"  class="form-control" name="fb">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                                 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Whatsapp</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $cp['whatsapp']; ?>"  class="form-control" name="whatsapp">
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">YouTube (ALL URL)</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $cp['youtube']; ?>"  class="form-control" name="youtube">
                                                   
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