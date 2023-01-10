  <?php
        session_start();
        include 'ekran/connect.php';
        @$lang = $_SESSION['lang'];
        include 'ekran/lang.php'; 
        $abouts = mysqli_query($conn, "SELECT * FROM `about_us`");
        $about = mysqli_fetch_array($abouts);         
        ?>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="ekran/scroll/highlight-js/highlightjs.css">
        <link rel="stylesheet" href="ekran/scroll/ScrollSpy.min.css">
        <link rel="stylesheet" href="ekran/scroll/style.css">
        <script src="ekran/scroll/ScrollSpy.min.js"></script>
        <script src="ekran/scroll/highlight-js/highlight.pack.js"></script>

 
        <div class="content">

            <section class="scrollspy" spy-title="<?php echo $l[156]; ?>">
                <h2><?php echo $l[156]; ?></h2>
<p><?php echo $about['slogan_'.$lang.''] ?></p>
<p><br/></p>
            </section>

            <section class="scrollspy" spy-title="<?php echo $l[157]; ?>">
                <h2><?php echo $l[157]; ?></h2>

                <p><?php echo $about['about_'.$lang.''] ?></p>
<p><br/></p>       
            </section>

            <section class="scrollspy" spy-title="<?php echo $l[158]; ?>">
                <h2><?php echo $l[158]; ?></h2>

                <p><?php echo $about['obrand_'.$lang.''] ?></p>

        
<p><br/></p> 
            </section>
<style type="text/css">
    
.ml{
margin-left: 60px;
      }

</style>
            <section class="scrollspy" spy-title="<?php echo $l[159]; ?>">
                <h2><?php echo $l[159]; ?></h2>
<?php 
$komandas = mysqli_query($conn, "SELECT * FROM komanda");
while($komanda = mysqli_fetch_array($komandas)){
?>
<p><?php if($komanda['photo']){ ?><img style="position: absolute; border-radius: 5px;" width="50px" src="<?= $siteurl ?>img/staff/<?= $komanda['photo'] ?>"><?php } ?>
<font class="ml"><?php echo $komanda['full_name']." - ".$komanda['vezife']; ?></font>
<br/>
 <font class="ml" size="2.5px;"><?php echo $komanda['email'];
                if ($komanda['phone']){
                    echo " / ".$komanda['phone'];
                }
                ?></font></p>
<?php } ?>

                
<p><br/></p> 
            </section>


            <section class="scrollspy" spy-title="<?php echo $l[198]; ?>">
                <h2><?php echo $l[198]; ?></h2>
<?php 
$komandas = mysqli_query($conn, "SELECT * FROM locations");
while($komanda = mysqli_fetch_array($komandas)){
?>
<p>
<?php echo $komanda['country']." <br/>
 ".$komanda['address']; ?>
<br/>
 <font class="" style="display: block" size="2.5px;"><?php echo $komanda['phone'];
                ?></font>
 <font class="" style="display: block" size="2.5px;"><?php echo $komanda['phone2'];
                ?></font></p>
<?php } ?>

                
<p><br/></p> 
            </section>
         

        </div>

        <div id="indicator"></div>

      

        <script>
            var indicator = document.getElementById('indicator');

            var spy = new ScrollSpy(
                {
                    contexts_class: 'scrollspy'
                }
            );

            spy.Indicator({
                element: indicator
            });

            indicator.style.top = 'calc(50vh - ' + (indicator.offsetHeight / 2) + 'px)';
        </script>

        <script>hljs.initHighlightingOnLoad();</script>