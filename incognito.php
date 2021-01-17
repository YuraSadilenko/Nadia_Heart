<?php include("./src/includes/head.php"); ?>
<body>

  <!--Navigation block-->
  <?php include("./src/includes/navigation.php"); ?>

  <div class="gallery__back-button">
    <a class="gallery__back-button--full" href="./gallery.php">
      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
        <g>
        	<g>
        		<path d="M379.644,477.872l-207.299-207.73c-7.798-7.798-7.798-20.486,0.015-28.299L379.643,34.128
        			c7.803-7.819,7.789-20.482-0.029-28.284c-7.819-7.803-20.482-7.79-28.284,0.029L144.061,213.574
        			c-23.394,23.394-23.394,61.459-0.015,84.838L351.33,506.127c3.907,3.915,9.031,5.873,14.157,5.873
        			c5.111,0,10.224-1.948,14.128-5.844C387.433,498.354,387.446,485.691,379.644,477.872z"/>
        	</g>
        </g>
      </svg>
      <span class="gallery__back-button--back">Back</span>
    </a>
  </div>


  <main>
    <div class="gallery">
      <div class="container">
        <div class="row">
          <h1 class="gallery__title title">Gallery</h1>
          <div class="gallery-box" id="gallery-box"></div>
        </div>
      </div>
    </div> 
  </main>

  <?php include("./src/includes/footer.php"); ?>

  <script src="./src/scripts/gallery.js"></script>
  <script src="./src/scripts/scripts.js"></script>
</body>

</html>