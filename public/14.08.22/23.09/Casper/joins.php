<?php
include  'ekran/header.php';

?>

    <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35"><?php echo$l[169];?></h3>
<?php 
if(isset($_POST['sil'])){
    $id = $_POST['id'];

    $sil = mysqli_query($conn, "DELETE FROM `join_us` where id = $id");
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
                                            <th><?php echo$l[106];?></th>
                                           <th><?php echo$l[55];?></th>
                                            <th><?php echo$l[107];?></th>
                                            <th><?php echo$l[125];?></th>
                                           
                                            
                                       
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                       <?php 
                    $joinss = mysqli_query($conn, "SELECT * FROM `join_us` order by id DESC");
                    while($stff = mysqli_fetch_array($joinss)){
                               
                             ?>
                                 <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            
                                           
                                            <td> <?php echo $stff['date']; ?> </td>
                                            <td> <?php echo $stff['name']; ?> </td>
                                            <td> <?php echo $stff['email']; ?> </td>
                                            <td> <?php echo $stff['phone']; ?> </td>
                                           
                                            
                                            <td>
                                                <div class="table-data-feature">
                                                   
                                                   
                                                    <button class="item" type="button" 
data-toggle="modal" data-target="#staticModala<?php echo $stff['id']; ?>" title="INFORMATION">
                                                       ?
                                                    </button>
                                                    <button class="item" type="button" 
data-toggle="modal" data-target="#staticModal<?php echo $stff['id']; ?>" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                            
                                                    
                                                </div>

                                            </td>
                                        </tr>
                                        <!-- modal static -->
            <div class="modal fade" id="staticModal<?php echo $stff['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
             data-backdrop="static">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel"><?php echo $stff['id']; ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                <?php echo $l[144]; ?>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <form method="post" action="">
                                <select name="id">
                                    <option value="<?php echo $stff['id']; ?>"><?php echo $stff['id']; ?></option>
                                </select>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $l[72]; ?></button>
                            <input type="submit" name="sil" class="btn btn-primary" value="<?php echo $l[71]; ?>">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal static -->

        <!-- 333 modal static -->
            <div class="modal fade" id="staticModala<?php echo $stff['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
             data-backdrop="static">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel">INFORMATION <?php echo $stff['id']; ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                <?php echo $l[55]; ?>:  <?php echo $stff['name']; ?>      <?php echo $stff['lastname']; ?> <br/>
                                  <?php echo $l[162]; ?>: <u><?php echo $stff['birthday']; ?></u> <br/>
                                  <?php echo $l[163]; ?>:  <u><?php echo $stff['vezife']; ?></u> <br/>
                                   <?php echo $l[161]; ?>: <u><?php echo $stff['staj']; ?></u> <br/>
                                  <?php echo $l[103]; ?>:  <u><?php echo $stff['phone']; ?></u> <br/>
                                   <?php echo $l[165]; ?>: <u><?php echo $stff['email']; ?></u> <br/>
                                   <?php echo $l[164]; ?>: <u><?php echo $stff['note']; ?></u> <br/>
                            </p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- end modal static -->

          
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