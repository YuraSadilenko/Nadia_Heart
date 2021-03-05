<?php 
  function setGalleryBlock($id, $path, $dir, $description) {
      echo "
      <div id='popup-$id' class='slick-box'>
        <span class='slick-box__close'>&#10006;</span>
        <div class='sl__block'>
          <div class='sl'>";
          foreach($dir as $key => $value) {
            if($value !== '.' && $value !== '..') {
              echo "<div><img src='$path/$value' alt=''></div>";
            }
          };
      echo "</div>
      <div class='sl__nav'>";
      foreach($dir as $key => $value) {
        if($value !== '.' && $value !== '..') {
          echo "<div><img src='$path/$value' alt=''></div>";
        }
      }
      echo "
        </div>
      </div>
      <div class='sl__desr'>";
      foreach($description as $key => $value) {
            echo 
              "<p class='sl__desr--text'>$description[$key]</p>";
        }
      echo "</div>
    </div>";
  }
?>
