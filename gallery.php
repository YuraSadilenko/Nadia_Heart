<?php 
include("./src/includes/variables.php"); 
include("./src/includes/texts/gallery/gallery-texts.php"); 
include("./src/includes/head.php");
include("./src/includes/func.php");
?>

<body>

  <!--Navigation block-->
  <?php include("./src/includes/navigation.php"); ?>

  <main>
    <div class="gallery">
      <div class="container">
        <div class="btn__back">
          <a href="/">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 512.005 512.005" style="enable-background:new 0 0 512.005 512.005;" xml:space="preserve">
              <g>
                <g>
                  <path d="M501.339,245.328H10.672c-5.888,0-10.667,4.779-10.667,10.667s4.779,10.667,10.667,10.667h490.667
                    c5.888,0,10.667-4.779,10.667-10.667S507.227,245.328,501.339,245.328z"/>
                </g>
              </g>
              <g>
                <g>
                  <path d="M188.869,419.131L18.203,248.464c-4.16-4.16-10.923-4.16-15.083,0c-4.16,4.16-4.16,10.923,0,15.083l170.667,170.667
                    c2.091,2.069,4.821,3.115,7.552,3.115c2.731,0,5.461-1.045,7.531-3.115C193.029,430.053,193.029,423.291,188.869,419.131z"/>
                </g>
              </g>
              <g>
                <g>
                  <path d="M188.869,77.797c-4.16-4.16-10.923-4.16-15.083,0L3.12,248.464c-4.16,4.16-4.16,10.923,0,15.083
                    c2.091,2.069,4.821,3.115,7.552,3.115c2.731,0,5.461-1.045,7.531-3.115L188.869,92.88
                    C193.029,88.72,193.029,81.957,188.869,77.797z"/>
                </g>
              </g>
            </svg>
            <span>Back Home</span>
          </a>
        </div>

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
                    $textArray[$id]
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
  

