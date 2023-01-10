<?php 
$pg_id = 8;
include 'ekran/header.php';

?>
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="banner_content text-center">
                        <h2><?php echo $pg['title_'.$lang.'']; ?></h2>
                        <div class="page_link">
                            <a href="<?= $siteurl ?>"><?php echo $l[2]; ?></a>
                            <a href="<?= xidmetler ?>"><?php echo $pg['title_'.$lang.'']; ?></a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="feature_area p_120">
                <div class="container">
    <div class="row feature_inner">
    <?php
    $services = mysqli_query($conn, "SELECT * FROM `services`");
    while($service = mysqli_fetch_array($services)){

 $sertext = $service['text_'.$lang.''];
 $sertext = substr($sertext,0,49);
 ?>
    
        <div class="col-lg-4 col-md-6">
            <a href="xidmet/<?= seo($service['name_'.$lang.''])."/".$service['id']; ?>">
                        <div class="feature_item" >
                         <center>  <h4><?php echo $service['name_'.$lang.'']; ?></h4> 
                            
                            <p><?php echo $sertext; ?>...</p></center><br/>
                        </div>
                        </a>
                        </div>
                    
                    <?php
    }
                    ?>
                    </div>
                    </div>

</section>

<br/>
<br/>


        <?php 
include 'ekran/footer.php';
?>