<!DOCTYPE html>
<html lang="en" >
<head>
    <?php

include  'ekran/connect.php';
?>

  <style type="text/css">
    HTML, BODY {
  height: 100%;
  font-size: 16px;
  line-height: 1.5;
  font-family: Trebuchet MS, Helvetica, Arial, sans-serif;
}

BODY {
  overflow: hidden;
  background-color: #222;
  background: white;
  background-size: 0.75em 100%, 100% 100%;
  background-attachment: fixed;
  display: flex;
  align-items: center;
}

.wrapper {
  position: relative;
  flex-grow: 1;
  margin: auto;
  max-width: 1200px;
  max-height: 1200px;
  display: grid;
  grid-template-columns: repeat(8, 1fr);
  grid-template-rows: repeat(4, 1fr);
  grid-gap: 2vmin;
  justify-items: center;
  align-items: center;
}

IMG {
  z-index: 1;
  grid-column: span 2;
  max-width: 100%;
  margin-bottom: -52%;
  -webkit-clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
          clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
  transform: scale(1);
  transition: all 0.25s;
}
IMG:nth-child(7n+1) {
  grid-column: 2/span 2;
}
IMG:hover {
  z-index: 2;
  transform: scale(2);
}
  </style>
  <meta charset="UTF-8">
  <title>CodePen - Rhomb gallery on grids + clip-path</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
<?php 
$gallery = mysqli_query($conn, "SELECT * FROM `gallery`");
while($photo = mysqli_fetch_array($gallery)){ ?>

  <img src="<?= $siteurl ?>img/gallery/<?= $photo['photo']; ?>" alt="" title="<?= $photo['title']; ?>">

<?php } ?>
</div>
<!-- partial -->
  
</body>
</html>
