 <?php
include  'ekran/header.php';

?>

    <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35"><?php echo$l[186];?></h3>
<?php 

 if(isset($_POST['change'])){
$ppid = $_POST['id'];
$header_az = $_POST['header_az'];
$header_en = $_POST['header_en'];
$header_ru = $_POST['header_ru'];
$url = $_POST['url'];
$text_az = $_POST['text_az'];
$text_en = $_POST['text_en'];
$text_ru = $_POST['text_ru'];

$update = mysqli_query($conn, "UPDATE `red` set
`header_az` = '$header_az',
`header_en` = '$header_en',
`header_ru` = '$header_ru',
`url` = '$url',
`text_ru` = '$text_ru',
`text_az` = '$text_az',
`text_en` = '$text_en'
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

    $sil = mysqli_query($conn, "DELETE FROM `red` where id = $id");
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
                                            <th><?php echo$l[80];?></th>
                                            <th>QR URL</th>
                                              <th>QR</th>
                                       
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                       <?php 
                    $redx = mysqli_query($conn, "SELECT * FROM `red` order by id DESC");
                    while($red = mysqli_fetch_array($redx)){
                               
                             ?>
                                 <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            
                                           
                                            
                                            <td> <?php echo $red['header_'.$lang.'']; ?> </td>
                                            
                                            <td> <?php echo $siteurl."r.php?q=7&r=".$red['code']; ?> </td>
                                            <td> <iframe src="https://chart.apis.google.com/chart?cht=qr&chs=100x100&chl=<?php echo $siteurl; ?>r.php?r=<?php echo $red['code']; ?>&choe=UTF-8&c" width="104" height="104" allowfullscreen></iframe></td>
                                            <td>
                                                <div class="table-data-feature">
                                                   
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit" data-toggle="modal" data-target="#largeModal<?php echo $red['id']; ?>"></i>
                                                    </button>
                                                    <button class="item" type="button" 
data-toggle="modal" data-target="#staticModal<?php echo $red['id']; ?>" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                    <button class="item" type="button" 
data-toggle="modal" data-target="#staticModalinfo<?php echo $red['id']; ?>" title="Info">
                                                        <i class="zmdi zmdi-info"></i>
                                                    </button>
                                                   
                                            
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                                                       <!-- modal static -->
            <div class="modal fade" id="staticModalinfo<?php echo $red['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
             data-backdrop="static">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel">RED<?php echo $red['id']; ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                URL açılma sayı: <?= $red['seen']; ?><br/>
                           URL açılmada linkə keçid sayı: <?= $red['clicktourl']; ?><br/><hr/>
                           QR oxunma sayı: <?= $red['qrseen']; ?><br/>
                           QR oxunmada linkə keçid sayı: <?= $red['qrclicktourl']; ?><br/>
                            </p>
                        </div>
                        <div class="modal-footer">
                          

                        </div>
                    </div>
                </div>
            </div>
                                        <!-- modal static -->
            <div class="modal fade" id="staticModal<?php echo $red['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
             data-backdrop="static">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel"><?php echo $red['id']; ?></h5>
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
                                    <option value="<?php echo $red['id']; ?>"><?php echo $red['id']; ?></option>
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
            <div class="modal fade" id="largeModal<?php echo $red['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="largeModalLabel"><?php echo $red['id']; ?></h5>
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
                                        <form action="" method="post" class="form-horizontal">
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">ID</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="id" class="form-control">
                                                        <option value="<?php echo $red['id']; ?>"><?php echo $red['id']; ?></option>
                                                    </select>
                                                   
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                             
                                            
                                            

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label"><?php echo $l[80]; ?> AZ</label></div>
<div class="col-12 col-md-9"><input type="text" value="<?php echo $red['header_az']; ?>"  class="form-control" name="header_az">
<small class="form-text text-muted"></small></div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label"><?php echo $l[80]; ?> EN</label></div>
<div class="col-12 col-md-9"><input type="text" value="<?php echo $red['header_en']; ?>"  class="form-control" name="header_en">
<small class="form-text text-muted"></small></div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label"><?php echo $l[80]; ?> RU</label></div>
<div class="col-12 col-md-9"><input type="text" value="<?php echo $red['header_ru']; ?>"  class="form-control" name="header_ru">
<small class="form-text text-muted"></small></div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label"><?php echo $l[140]; ?></label></div>
<div class="col-12 col-md-9"><input type="text" value="<?php echo $red['url']; ?>"  class="form-control" name="url">
<small class="form-text text-muted"></small></div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label"><?php echo $l[185]; ?> AZ</label></div>
<div class="col-12 col-md-9"><textarea rows="3" class="form-control" name="text_az"><?php echo $red['text_az']; ?></textarea>
<small class="form-text text-muted"></small></div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label"><?php echo $l[185]; ?> EN</label></div>
<div class="col-12 col-md-9"><textarea rows="3" class="form-control" name="text_en"><?php echo $red['text_en']; ?></textarea>
<small class="form-text text-muted"></small></div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label"><?php echo $l[185]; ?> RU</label></div>
<div class="col-12 col-md-9"><textarea rows="3" class="form-control" name="text_ru"><?php echo $red['text_ru']; ?></textarea>
<small class="form-text text-muted"></small></div>
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