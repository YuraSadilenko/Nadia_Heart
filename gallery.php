<?php 
include("./src/includes/variables.php"); 
include("./src/includes/head.php");
include("./src/includes/func.php");
?>

<body>

  <!--Navigation block-->
  <?php include("./src/includes/navigation.php"); ?>

  <main>
    <div class="gallery">
      <div class="container">
        <div class="row">
          <h1 class="gallery__title title">Gallery</h1>
        </div>      
   





        <!-- Start Gellary Set -->
        <div class="gallery-incognito">
          <div class="gallery__set-box">
            <?php 
              foreach($galleryFirst as $id => $galleryImg) {
                echo "<img onclick='openPicture(\"#popup-$id\")' class='gallery__img' src='$galleryImg' alt=''>";

                if($galleryImg !== '.' && $galleryImg !== '..') {
                  setGalleryBlock(
                    $id,
                    $dirPathes[$id], 
                    $imgPathes[$id], 
                    'Incognito',
                    'Text for Incognito'
                  );
                }

              } 
            ?>
          </div>
        </div>
        <!-- End Gellary Set -->


      </div>
    </div> 
  </main>   

  <?php include("./src/includes/footer.php"); ?>
  

