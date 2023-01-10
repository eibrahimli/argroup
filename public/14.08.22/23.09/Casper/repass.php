<?php
include  'ekran/header.php';
?>

    <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35"><?php echo$l[170];?></h3>
<?php
if(isset($_POST['change'])){
  $passa = $_POST['passa'];
  $passb = $_POST['passb'];
  $passc = $_POST['passc'];
if($adminpass != $passa){
?>
<div class="alert alert-danger" role="alert">
 <?php echo$l[176];?>!
</div>
<?php
}
if(empty($passa) or empty($passb) or empty($passc)){
?>
<div class="alert alert-danger" role="alert">
 <?php echo$l[30];?>!
</div>
<?php
}
if($passc != $passb){
?>
<div class="alert alert-danger" role="alert">
 <?php echo$l[175];?>!
</div>
<?php
} 

if($passc == $passb and $adminpass == $passa){
  ?>
<div class="alert alert-success" role="alert">
 <?php echo$l[177];?>!
</div>
<?php
$update = mysqli_query($conn, "UPDATE `admin` set
  `pass` = '$passc'
  WHERE `id` = '1';
 ");
$_SESSION['pass'] = $passc;
 }
}
?>

                            <form action="" method="post">

  <div class="form-group">
    <label for="exampleInputPassword1"><?php echo$l[171];?></label>
    <input name="passa" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword2"><?php echo$l[172];?></label>
    <input name="passb" type="password" class="form-control" id="exampleInputPassword2">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword3"><?php echo$l[173];?></label>
    <input name="passc" type="password" class="form-control" id="exampleInputPassword3">
  </div>
 
  <button type="submit" name="change" class="btn btn-primary"><?php echo$l[174];?></button>
</form>

                          </div>
                        </div>
                      </div>
                    </section>

                            <?php
include  'ekran/footer.php';
?>