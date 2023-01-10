
<?php 
$pg_id = 8;
include 'ekran/header.php';
@$id = $_GET['id'];
if(!$id){
    ?>
   
    <meta http-equiv="refresh" content="0; url=services.php"/>

    <?php
}
@$services = mysqli_query($conn, "SELECT * FROM `services` where `id` = $id");
 @$service = mysqli_fetch_array($services);

?>
  <link rel="stylesheet" href="servicesx/src/css/lightslider.css">

<script>
         $(document).ready(function() {
            $("#content-slider").lightSlider({
                loop:true,
                keyPress:true
            });
            $('#image-gallery').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                auto:true,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }  
            });
        });
    </script>
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="banner_content text-center">
                        <h2><?php echo $service['name_'.$lang.'']; ?></h2>
                        <div class="page_link">
                            <a href="index.php"><?php echo $l[2]; ?></a>
                            <a href="<?php echo $pg['url']; ?>"><?php echo $pg['title_'.$lang.'']; ?></a>
                            <a href="service.php?id=<?php echo $service['id']; ?>"><?php echo $service['name_'.$lang.'']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<section class="contact_area p_120">
            <div class="container">
             
                <div class="row">
                    <div class="col-lg-6">
<?php echo $service['text_'.$lang.'']; ?>
<br/><br/>
    <div class="demo">
        <div class="item">            
            <div class="clearfix" style="max-width:474px;">
                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                    <?php
                    $fayl_say = $service['psay'];
                    for($i=0;$i<$fayl_say;$i++){
    
  ?>
                    <li data-thumb="<?= $siteurl; ?>img/services/<?php echo $service['kod'].$i; ?>.jpg"> 
                        <img style="height: 350px; width: 500px; " src="<?= $siteurl; ?>img/services/<?php echo $service['kod'].$i; ?>.jpg" />
                         </li>
<?php  } ?>
                    
                </ul>
            </div>
        </div> 
    </div>  </div>  <div class="col-lg-6">
      <?php if($service['ytb']){ ?> <?php echo $service['ytb']; ?><?php } ?>
</div>
</div></div></section>
   <script src="servicesx/src/js/lightslider.js"></script> 

    
<br/>
<br/>


<?php
include 'ekran/footer.php';
?>