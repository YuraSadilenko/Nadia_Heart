<?php include("./src/includes/head.php"); ?>
<body>

  <!--Navigation block-->
  <?php include("./src/includes/navigation.php"); ?>

  <div class="gallery__back-button">
    <a href="./gallery.php">
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
    </a>
  </div>

  <main>
    <div class="gallery">
      <div class="cont">
        <h1 class="gallery__title title">Series "Other Art"</h1>
      </div>
      <div class="gallery-box" id="gallery-box"></div>
    </div> 

    <!-- <div class="popup" id="popup">
      <div class="popup__bg">
        <div class="cont">
          <div class="popup__window">
            <div class="popup__close-box">
              <div class="popup__close">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                	viewBox="0 0 409.806 409.806" style="enable-background:new 0 0 409.806 409.806;" xml:space="preserve">
                	<g>
                		<g>
                			<path d="M228.929,205.01L404.596,29.343c6.78-6.548,6.968-17.352,0.42-24.132c-6.548-6.78-17.352-6.968-24.132-0.42
                				c-0.142,0.137-0.282,0.277-0.42,0.42L204.796,180.878L29.129,5.21c-6.78-6.548-17.584-6.36-24.132,0.42
                				c-6.388,6.614-6.388,17.099,0,23.713L180.664,205.01L4.997,380.677c-6.663,6.664-6.663,17.468,0,24.132
                				c6.664,6.662,17.468,6.662,24.132,0l175.667-175.667l175.667,175.667c6.78,6.548,17.584,6.36,24.132-0.42
                				c6.387-6.614,6.387-17.099,0-23.712L228.929,205.01z"/>
                		</g>
                	</g>
                </svg>
              </div>
            </div>
            <div class="viewed__img-box">
              <img class="viewed__img" src="./src/images/residents_of_the_city_nadia heart.jpg" alt="" title="">
            </div>

            <div class="stock__img-box">
              <img src="" alt="" class="stock__img">
            </div>
          </div>
        </div>
      </div>
    </div> -->

  </main>

  <?php include("./src/includes/footer.php"); ?>

  <script src="./src/scripts/gallery.js"></script>
  <script src="./src/scripts/scripts.js"></script>
</body>

</html>