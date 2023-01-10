	<?php

include  'ekran/header.php';
?>
<section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35"><?php echo$l[129];?></h3>
  
 
<?php
$url = $ekrandocs1;
@$documents = file_get_contents($url);
echo $documents;
?>


                          </div>
                        </div>
                     </div></section>
              	<?php

include  'ekran/footer.php';
?>
