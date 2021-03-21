<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />

  <?php if($_SERVER[REQUEST_URI] == "/") {
    echo '<meta name="description" content="Nadia Heart - artist, graphic artist, work in inkart, lineart and grisaille techniques. Achromatic colors. Ukraine artist.">';
  } elseif($_SERVER[REQUEST_URI] == "/gallery") {
    echo '<meta name="description" content="Art Gallery, Nadia`s Heart Gellery, graphic artworks, lineart, grisaille techniques">';
  } 
  ?>

  <link rel="stylesheet" href="./src/css/style.css">

  <?php if($_SERVER[REQUEST_URI] == "/") {
    echo '
      <link rel="stylesheet" type="text/css" href="./src/slick/slick.css">
      <link rel="stylesheet" type="text/css" href="./src/slick/slick-theme.css">';
  } ?> 
  
  <!-- if page is gallery add slick slider library -->
  <?php if($_SERVER[REQUEST_URI] == "/gallery") {
    echo '
      <link rel="stylesheet" href="./src/css/blazy.css">
      <link rel="stylesheet" type="text/css" href="./src/slick/slick.css">
      <link rel="stylesheet" type="text/css" href="./src/slick/slick-theme.css">';
  } ?>  

  <link rel="preload" href="./src/fonts/CormorantGaramond-Light.ttf" as="font" type="font/ttf" crossorigin="anonymous">
  <link rel="preload" href="./src/fonts/PlayfairDisplay-Italic-VariableFont_wght.ttf" as="font" type="font/ttf" crossorigin="anonymous">

  <!-- Preload for Each Page -->
  <?php if($_SERVER[REQUEST_URI] == "/") {
    echo '
      <link rel="preload" href="./src/video/header.mp4" as="video" type="video/mp4">

      <link rel="preload" href="./src/images/about-me.png" as="image">
      <link rel="preload" href="./src/images/about-me-2.jpg" as="image">
      <link rel="preload" href="./src/images/about-me-3.jpg" as="image">
      <link rel="preload" href="./src/images/about-me-4.jpg" as="image">

      <link rel="preload" href="./src/images/front-gallery/s1.jpg" as="image">
      <link rel="preload" href="./src/images/front-gallery/s2.jpg" as="image">
      <link rel="preload" href="./src/images/front-gallery/s3.jpg" as="image">
      <link rel="preload" href="./src/images/front-gallery/s4.jpg" as="image">
      <link rel="preload" href="./src/images/front-gallery/s5.jpg" as="image">
      <link rel="preload" href="./src/images/front-gallery/s6.jpg" as="image">
      <link rel="preload" href="./src/images/front-gallery/s7.jpg" as="image">
      <link rel="preload" href="./src/images/front-gallery/s8.jpg" as="image">
      <link rel="preload" href="./src/images/front-gallery/s9.jpg" as="image">
      <link rel="preload" href="./src/images/front-gallery/s10.jpg" as="image">
      <link rel="preload" href="./src/images/front-gallery/s11.jpg" as="image">
      <link rel="preload" href="./src/images/front-gallery/s12.jpg" as="image">
    ';

  } elseif($_SERVER[REQUEST_URI] == "/gallery") {
    echo '    
      <link rel="preload" href="./src/images/gallery/setIncognito/incognito1/nadiaheart_incognito.jpg" as="image">
      <link rel="preload" href="./src/images/gallery/setIncognito/incognito2/nadiaheart_incognito2.jpg" as="image">
      <link rel="preload" href="./src/images/gallery/setHands/books/nadiaherat_bookmarket.jpg" as="image">
      <link rel="preload" href="./src/images/gallery/setHands/cell/nadiahearthands.jpg" as="image">
      <link rel="preload" href="./src/images/gallery/setHands/silliage/nadiaheart_sillage.jpg" as="image">
      <link rel="preload" href="./src/images/gallery/setHands/vera/nadiaheart_vera.jpg" as="image">
      <link rel="preload" href="./src/images/gallery/setHands/wine/nadiaheart_wine.jpg" as="image">
      <link rel="preload" href="./src/images/gallery/january/nadiaheart_january.jpg" as="image">
      <link rel="preload" href="./src/images/gallery/setEsteticsSimple/pigeons/residents of the city_nadia heart.jpg" as="image">
      <link rel="preload" href="./src/images/gallery/setEsteticsSimple/flowers/nadiaheart_beauty.jpg" as="image">
      <link rel="preload" href="./src/images/gallery/at-last/nadiaheart_at last.jpg" as="image">
      <link rel="preload" href="./src/images/gallery/book-lover/nadiaheart_book lover.jpg" as="image">
      <link rel="preload" href="./src/images/gallery/heroine/nadiaheart_heroine.jpg" as="image">
      <link rel="preload" href="./src/images/gallery/kyiv-woman/nadiaheart_kyiv woman.jpg" as="image">
      <link rel="preload" href="./src/images/gallery/seventeen/nadiaheart_seventeen.jpg" as="image">
      <link rel="preload" href="./src/images/gallery/setMamoryError/memory1/nadiaheart_memory1.jpg" as="image">
      <link rel="preload" href="./src/images/gallery/setMamoryError/memory2/nadiaheart_memory2.jpg" as="image">
    ';
  } 
  ?>




  <!-- Title for Each Page -->
  <?php if($_SERVER[REQUEST_URI] == "/") {
    echo '<title>Nadia Heart - Home</title>';
  } elseif($_SERVER[REQUEST_URI] == "/gallery") {
    echo '<title>Nadia Heart - Gallery</title>';
  } 
  ?>


</head>

