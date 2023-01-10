<?php
include 'ekran/header.php';
?>




          
            <!-- STATISTIC-->
            <section class="statistic">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">

                        	<?php  $sl = 1; while($sl <= 4){ ?>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item" style="background-image: url('../img/bannerx/homebanner<?= $sl; ?>.jpg'); background-size: cover;" onclick="location.href = 'backslayd.php?id=<?= $sl; ?>'">
                                    <h2 class="number">Slayd <?= $sl; ?></h2>
                                    <span class="desc"></span>
                                    <div class="icon">
                                      <i class="fa fa-plus"></i>
                                    </div>
                                </div>
                            </div>


                        <?php $sl++; } ?>
                      
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-8">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>

    <?php
    include 'ekran/footer.php';
    ?>