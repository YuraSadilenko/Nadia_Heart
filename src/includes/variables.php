<!-- Gallery first images -->
<?php 
  $galleryFirst = [
    "./src/images/gallery/setIncognito/incognito1/nadiaheart_incognito.jpg",
    "./src/images/gallery/setIncognito/incognito2/nadiaheart_incognito2.jpg",
    "./src/images/gallery/setHands/books/nadiaherat_bookmarket.jpg",
    "./src/images/gallery/setHands/cell/nadiahearthands.jpg",
    "./src/images/gallery/setHands/silliage/nadiaheart_sillage.jpg",
    "./src/images/gallery/setHands/vera/nadiaheart_vera.jpg",
    "./src/images/gallery/setHands/wine/nadiaheart_wine.jpg",
    "./src/images/gallery/setEsteticsSimple/dry-roses/mokup-roses.jpg",
    "./src/images/gallery/setEsteticsSimple/flowers/nadiaheart_beauty.jpg",
    "./src/images/gallery/setEsteticsSimple/pigeons/residents of the city_nadia heart.jpg",
    "./src/images/gallery/setMamoryError/memory1/nadiaheart_memory1.jpg",
    "./src/images/gallery/setMamoryError/memory2/nadiaheart_memory2.jpg"
  ];
?>



<!-- folders with works -->
<?php
  /* Incognito */
  $incognitoOne = "./src/images/gallery/setIncognito/incognito1/";
  $incognitoTwo = "./src/images/gallery/setIncognito/incognito2/";

  /* Hands */
  $books = "./src/images/gallery/setHands/books/";
  $cell = "./src/images/gallery/setHands/cell/";
  $silliage = "./src/images/gallery/setHands/silliage/";
  $vera = "./src/images/gallery/setHands/vera/";
  $wine = "./src/images/gallery/setHands/wine/";

  /* Simple Estetics */
  $dryRoses = "./src/images/gallery/setEsteticsSimple/dry-roses/";
  $flowers = "./src/images/gallery/setEsteticsSimple/flowers/";
  $pigeons = "./src/images/gallery/setEsteticsSimple/pigeons/";

  /* Memory */
  $memoryOne = "./src/images/gallery/setMamoryError/memory1";
  $memoryTwo = "./src/images/gallery/setMamoryError/memory2";

  $dirPathes = [
    $incognitoOne,
    $incognitoTwo,
    $books,
    $cell,
    $silliage,
    $vera,
    $wine,
    $dryRoses,
    $flowers,
    $pigeons,
    $memoryOne,
    $memoryTwo
  ];
?>


<!-- Variables for images files -->
<?php 
  /* Incognito */
  $incognitoFirst = scandir($incognitoOne);
  $incognitoSecond = scandir($incognitoTwo);

  /* Hands */
  $booksFolder = scandir($books);
  $cellFolder = scandir($cell);
  $silliageFolder = scandir($silliage);
  $veraFolder = scandir($vera);
  $wineFolder = scandir($wine);

  /* Simple Estetics */
  $dryRosesFolder = scandir($dryRoses);
  $flowersFolder = scandir($flowers);
  $pigeonsFolder = scandir($pigeons);

  /* Memory */
  $memoryFirst = scandir($memoryOne);
  $memorySecond = scandir($memoryTwo);

  $imgPathes = [
    $incognitoFirst,
    $incognitoSecond,
    $booksFolder,
    $cellFolder,
    $silliageFolder,
    $veraFolder,
    $wineFolder,
    $dryRosesFolder,
    $flowersFolder,
    $pigeonsFolder,
    $memoryFirst,
    $memorySecond
  ];

?>