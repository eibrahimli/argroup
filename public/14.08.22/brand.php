<?php 
$pg_id = 12;
include 'ekran/header.php';
@$id = $_GET['id'];
@$brands = mysqli_query($conn, "SELECT * FROM `brands` where `id` = $id");
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
                            <a href="brend/<?= seo($brand['name_'.$lang.''])."/".$brand['id']; ?>"><?php echo $brand['name_'.$lang.'']; ?></a>
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
                    for($i=0;$i<1;$i++){
    
  ?>
                    <li data-thumb="<?= $siteurl; ?>img/brands-logo/<?php echo $brand['logo']; ?>"> 
                        <img style="height: 350px; width: 500px; " src="<?= $siteurl; ?>img/brands-logo/<?php echo $brand['logo']; ?>" />
                         </li>
<?php  } ?>
                    
                </ul>
            </div>
        </div> 
    </div>  </div>  
    <div class="col-lg-6">
      <?php if($brand['text_'.$lang.'']){ ?> <?php echo $brand['text_'.$lang.'']; ?><?php } ?>
</div>

</div>
<hr/>
   <h2 class='text-center'><img style='width: 170px;' src="<?= $siteurl.'img/brands-logo/'.$brand['logo']; ?>"> məhsulları</h2>
	<div class="furniture_inner row">
                    <?php 
                    $brands = mysqli_query($conn, "SELECT * FROM `products` WHERE `brand` = $id");
                    $brandsay = mysqli_num_rows($brands);
                    if($brandsay == 0){
                        echo '<h4>Bu brendə aid məhsul tapılmadı</h4>';
                    }else{
                    while($brand = mysqli_fetch_array($brands)){
                    ?>
        			<div class="col-lg-4">
        				<a href="mehsul/<?= seo($brand['name_'.$lang.'']).'/'.$brand['id']; ?>">
        				<div class="furniture_item">
        					<img class="img-fluid" src="img/products-img/<?php echo $brand['img'];?>" alt="">
        					<h4 class='text-center'><?php echo $brand['name_'.$lang.''];?></h4>
        				</div>
        			</a>
        			</div>
        			 
<?php } }?>
        		</div>
</div></section>
   <script src="servicesx/src/js/lightslider.js"></script> 

    
<br/>
<br/>


<?php
include 'ekran/footer.php';
?>