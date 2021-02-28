<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Nadia Heart - художник современник, рисую в стиле lineart">
  <link rel="stylesheet" href="./src/css/style.css">
  <!-- if page is gallery add slick slider library -->
  <?php if($_SERVER[REQUEST_URI] == "/gallery") {
    echo '<link rel="stylesheet" type="text/css" href="./src/slick/slick.css">
          <link rel="stylesheet" type="text/css" href="./src/slick/slick-theme.css">';
  } ?>  
  <title>Nadia Heart</title>
</head>

