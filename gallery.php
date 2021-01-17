<!-- Variables with img --> 
<?php
  $srcImg = "./src/images/gallery/";
  $setIncognitoOne = [
    "incognitoOne" => "./src/images/gallery/setIncognito/incognito1/nadiaheart_incognito.jpg",
    "incognitoTwo" => "./src/images/gallery/setIncognito/incognito2/nadiaheart_incognito2.jpg"
  ];
  $setHands = [
    "books" => "./src/images/gallery/setHands/books/bookmarket1.jpg",
    "cell" => "./src/images/gallery/setHands/cell/hands1.jpg",
    "silliage" => "./src/images/gallery/setHands/silliage/nadiaheart_sillage.jpg",
    "vera" => "./src/images/gallery/setHands/vera/nadiaheart_vera.jpg",
    "wine" => "./src/images/gallery/setHands/wine/nadiaheart_wine.jpg"
  ];
  $setEsteticsSimple = [
    "dryRoses" => "./src/images/gallery/setEsteticsSimple/dry-roses/mokup-roses.jpg",
    "flowers" => "./src/images/gallery/setEsteticsSimple/flowers/nadiaheart_incognito2.jpg",
    "pigeons" => "./src/images/gallery/setEsteticsSimple/pigeons/residents-mockup.jpg"
  ];
  $setMemory = [
    "memoryOne" => "./src/images/gallery/setEsteticsSimple/memory1/nadiaheart_memory1.jpg",
    "memoryTwo" => "./src/images/gallery/setEsteticsSimple/memory2/nadiaheart_memory2.jpg"
  ];

  $dir1 = "./src/images/gallery/setIncognito/incognito2/";

  $incognitoOneScan = scandir($dir1);

  echo "<pre>";
  print_r(scandir("{$srcImg}setHands/books/"));
?>

<?php include("./src/includes/head.php"); ?>

<body>

  <!--Navigation block-->
  <?php include("./src/includes/navigation.php"); ?>

  <main>
    <div class="gallery">
      <div class="container">
        <div class="row">
          <h1 class="gallery__title title">Gallery</h1>
        </div>

        <!-- Incognito Set -->
        <div class="gallery-incognito">
          <div class="row">
            <h2 class="gallery__sub-title">Set Incognito</h2>
          </div>
          <div class="gallery__set-box">
          <?php
          foreach($setIncognitoOne as $key => $value) {
            echo "<img class='gallery__img' src='{$value}' alt=''>";
          }
          ?>

          <div class="gallery__modal">
            <?php 
              foreach($incognitoOneScan as $key => $value) {
                if($value != '.' && $value != '..') {
                  echo "<img class='gallery__img' src='{$dir1}{$value}' alt=''>";
                };
              };
            ?>
          </div>

          </div>
        </div>

      </div>
    </div> 
  </main>

  <?php include("./src/includes/footer.php"); ?>

  <!-- <script src="./src/scripts/gallery.js"></script> -->
  <script src="./src/scripts/scripts.js"></script>
</body>

</html>