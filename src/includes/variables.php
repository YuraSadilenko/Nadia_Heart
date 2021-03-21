<!-- Texts -->

<?php  
/* English */
  $aboutUsEn = file_get_contents('./src/includes/texts/articles/en/about.txt'); 
  $statementEn = file_get_contents('./src/includes/texts/articles/en/statement.txt'); 
?>

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
    "./src/images/gallery/january/nadiaheart_january.jpg",
    "./src/images/gallery/setEsteticsSimple/pigeons/residents of the city_nadia heart.jpg",
    "./src/images/gallery/setEsteticsSimple/flowers/nadiaheart_beauty.jpg",
    "./src/images/gallery/at-last/nadiaheart_at last.jpg",
    "./src/images/gallery/book-lover/nadiaheart_book lover.jpg",
    "./src/images/gallery/heroine/nadiaheart_heroine.jpg",
    "./src/images/gallery/kyiv-woman/nadiaheart_kyiv woman.jpg",
    "./src/images/gallery/seventeen/nadiaheart_seventeen.jpg",
    "./src/images/gallery/setMamoryError/memory1/nadiaheart_memory1.jpg",
    "./src/images/gallery/setMamoryError/memory2/nadiaheart_memory2.jpg",
  ];
?>



<!-- folders with works -->
<?php
  /* Incognito */
  $incognitoOne = "./src/images/gallery/setIncognito/incognito1";
  $incognitoTwo = "./src/images/gallery/setIncognito/incognito2";

  /* Hands */
  $books = "./src/images/gallery/setHands/books";
  $cell = "./src/images/gallery/setHands/cell";
  $silliage = "./src/images/gallery/setHands/silliage";
  $vera = "./src/images/gallery/setHands/vera";
  $wine = "./src/images/gallery/setHands/wine";

  /* january */
  $january = "./src/images/gallery/january";  

  /* Simple Estetics */
  $pigeons = "./src/images/gallery/setEsteticsSimple/pigeons";


  /* Flowers */
  $flowers = "./src/images/gallery/setEsteticsSimple/flowers";

  /* at last */
  $atLast = "./src/images/gallery/at-last";

  /* book lover */
  $bookLover = "./src/images/gallery/book-lover";

  /* heroine */
  $heroine = "./src/images/gallery/heroine";

  /* kuiv woman */
  $kyivWoman = "./src/images/gallery/kyiv-woman";

  /* seventeen */
  $seventeen = "./src/images/gallery/seventeen";
  
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
    $january,
    $pigeons,
    $flowers,
    $atLast,
    $bookLover,
    $heroine,
    $kyivWoman,
    $seventeen,
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
  $flowersFolder = scandir($flowers);
  $pigeonsFolder = scandir($pigeons);

  /* January Folder */
  $januaryFolder = scandir($january);

  /* At Last Folder */
  $atLastFolder = scandir($atLast);

  /* Book Lover Folder */
  $bookLoverFolder = scandir($bookLover);

  /* Heroine Folder */
  $heroineFolder = scandir($heroine);

  /* Kyiv Woman Folder */
  $kyivWomanFolder = scandir($kyivWoman);

  /* Seventeen Folder */
  $seventeenFolder = scandir($seventeen);

  /* Memory Set */
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
    $januaryFolder,
    $pigeonsFolder,   
    $flowersFolder,
    $atLastFolder,
    $bookLoverFolder,
    $heroineFolder,
    $kyivWomanFolder,
    $seventeenFolder,
    $memoryFirst,
    $memorySecond
  ];

?>