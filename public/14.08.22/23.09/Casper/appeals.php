<?php
include  'ekran/header.php';

?>

    <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35"><?php echo$l[145];?></h3>
<?php 
if(isset($_POST['sil'])){
    $id = $_POST['id'];

    $sil = mysqli_query($conn, "DELETE FROM `contact` where id = $id");
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
                                            <th><?php echo$l[26];?></th>
                                            <th><?php echo$l[143];?></th>
                                            
                                       
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                       <?php 
                    $contact = mysqli_query($conn, "SELECT * FROM `contact` order by id DESC");
                    while($contac = mysqli_fetch_array($contact)){
                               
                             ?>
                                 <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            
                                           
                                            <td> <?php echo $contac['date']; ?> </td>
                                            <td> <?php echo $contac['name']; ?> </td>
                                            <td><?php echo substr($contac['subject'], 0, 15); ?>... </td>
                                            <td> <?php echo substr($contac['message'], 0, 15); ?>... </td>
                                            
                                            <td>
                                                <div class="table-data-feature">
                                                   
                                                   
                                                    <button class="item" type="button" 
data-toggle="modal" data-target="#largeModal<?php echo $contac['id']; ?>" title="INFO">
                                                        <i class="zmdi zmdi-info"></i>
                                                    </button>
                                                     <button class="item" type="button" 
data-toggle="modal" data-target="#staticModal<?php echo $contac['id']; ?>" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                            
                                                    
                                                </div>

                                            </td>
                                        </tr>
                                        <!-- modal static -->
            <div class="modal fade" id="staticModal<?php echo $contac['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
             data-backdrop="static">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel"><?php echo $contac['id']; ?></h5>
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
                                    <option value="<?php echo $contac['id']; ?>"><?php echo $contac['id']; ?></option>
                                </select>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $l[72]; ?></button>
                            <input type="submit" name="sil" class="btn btn-primary" value="<?php echo $l[71]; ?>">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

                <!-- modal large -->
            <div class="modal fade" id="largeModal<?php echo $contac['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="largeModalLabel"><?php echo $client['name']; ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <p>
                                
                            </p>
                            <div class="col-lg-12">
<?php echo$l[106].": ".$contac['date'];?> <br/>
<?php echo$l[55].": ".$contac['name'];?><br/>
<?php echo$l[107].": ".$contac['email'];?><br/>
<?php echo$l[26].": ".$contac['subject'];?><br/>
Mesaj: <br/>
                                <div class="card">
                                   
                                 <?php echo $contac['message'];?>
                                </div>
                            </div>
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