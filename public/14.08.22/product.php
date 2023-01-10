<?php 
$pg_id = 13;
include 'ekran/header.php';
@$id = $_GET['id'];
@$brands = mysqli_query($conn, "SELECT * FROM `products` where `id` = $id");
 @$brand = mysqli_fetch_array($brands);
 @$servicesay = mysqli_num_rows($brands);


if(!$id or $servicesay==0){
    ?>
   
    <meta http-equiv="refresh" content="0; url=<?= $siteurl ?>brands"/>

    <?php
}

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
                        <h2><?php echo $brand['name_'.$lang.'']; ?></h2>
                        <div class="page_link">
                            <a href="<?= $siteurl ?>"><?php echo $l[2]; ?></a>
                            <a href="<?php echo $pg['url']; ?>"><?php echo $pg['title_'.$lang.'']; ?></a>
                            <a href="mehsul/<?= seo($brand['name_'.$lang.''])."/".$brand['id']; ?>"><?php echo $brand['name_'.$lang.'']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<section class="contact_area p_120">
            <div class="container">
             
                <div class="row">
                    <div class="col-lg-6">
<?php echo "<b>".$brand['name_'.$lang.'']."</b>"; ?>
<br/><br/>
    <div class="demo">
        <div class="item">            
            <div class="clearfix" style="max-width:474px;">
                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                    <?php
                    $fayl_say = $brand['psay'];
                    for($i=0;$i<$fayl_say;$i++){
    
  ?>
                    <li data-thumb="<?= $siteurl; ?>img/products-img/<?php echo $brand['kod'].$i; ?>.jpg"> 
                        <img style="height: 350px; width: 500px; " src="<?= $siteurl; ?>img/products-img/<?php echo $brand['kod'].$i; ?>.jpg" />
                         </li>
<?php  } ?>
                    
                </ul>
            </div>
        </div> 
    </div>
    </div>  <div class="col-lg-6">
      <?php if($brand['text_'.$lang.'']){ ?> <?php echo $brand['text_'.$lang.'']; ?><?php } ?>
      <br/><hr/>
       <?php if($brand['ytb']){ ?> <?php echo $brand['ytb']; ?><?php } ?>
</div>
</div>
<hr/>
<?php
$brandid = $brand['brand'];
$brandsz = mysqli_query($conn, "SELECT * FROM `brands` WHERE `id` = $brandid");
$brandz = mysqli_fetch_array($brandsz);
?>
<h4>Brend: <a href='<?= $siteurl.'brend/'.$brandz['name_'.$lang.''].'/'.$brandz['id']; ?>'><img style='width: 150px;' src="<?= $siteurl.'img/brands-logo/'.$brandz['logo']; ?>"></h4>
</div></section>
   <script src="servicesx/src/js/lightslider.js"></script> 

    
<br/>
<br/>


<?php
include 'ekran/footer.php';
?>