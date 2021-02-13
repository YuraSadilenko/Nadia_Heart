<?php include("./src/includes/variables.php"); ?>



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


        <!-- Start Test Slick -->



        <div class="col-md-4">
          <img class="main__img" style="width:100%" src="./src/images/gallery/setEsteticsSimple/flowers/nadiaheart_beauty.jpg" alt="">
        </div>

            <div class="slick-box">

              <div class="sl__block">
                <div class="sl">
                    <div><img src="./src/images/gallery/setEsteticsSimple/flowers/nadiaheart_beauty.jpg" alt=""></div>
                    <div><img src="./src/images/gallery/setEsteticsSimple/flowers/nadiaheart_beauty1.jpg" alt=""></div>
                    <div><img src="./src/images/gallery/setEsteticsSimple/flowers/nadiaheart_beauty2.jpg" alt=""></div>
                    <div><img src="./src/images/gallery/setEsteticsSimple/flowers/nadiaheart_beauty3.jpg" alt=""></div>
                    <div><img src="./src/images/gallery/setEsteticsSimple/flowers/flowersmockup.jpg" alt=""></div>
                </div> 

                <div class="sl__nav">
                  <div><img src="./src/images/gallery/setEsteticsSimple/flowers/nadiaheart_beauty.jpg" alt=""></div>
                  <div><img src="./src/images/gallery/setEsteticsSimple/flowers/nadiaheart_beauty1.jpg" alt=""></div>
                  <div><img src="./src/images/gallery/setEsteticsSimple/flowers/nadiaheart_beauty2.jpg" alt=""></div>
                  <div><img src="./src/images/gallery/setEsteticsSimple/flowers/nadiaheart_beauty3.jpg" alt=""></div>
                  <div><img src="./src/images/gallery/setEsteticsSimple/flowers/flowersmockup.jpg" alt=""></div>
                </div>
              </div>

              <div class="sl__desr">
                <p class="sl__desr--title">Title</p>
                <p class="sl__desr--text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque cupiditate, libero explicabo nam non vitae earum nihil, architecto aspernatur fuga beatae eligendi ducimus. Pariatur, eos blanditiis ab sint voluptatem iste?</p>
              </div>
            </div>





        <script>
        (() => {
          var mainImg = document.querySelector('.main__img');
          var slImg = document.querySelectorAll('.sl div img');
          var slickTest = document.querySelectorAll('.slick-box');

          // for( var i = 0; i < slImg.length; i++ ) {
          //   slImg[i].onclick = function() {
          //     for( var j = 0; j < slickTest.length; j++) {
          //       slickTest[j].classList.add('activeted');
          //     }
          // }
          // }

          // mainImg.onclick = () => {
          //   for( var j = 0; j < slickTest.length; j++) {
          //       slickTest[j].classList.add('activated');
          //     }
          // }

        })();
        </script>

        <?php 
        $dir = scandir($incognitoOne);

        foreach($dir as $key => $value) {
          if($value !== '.' && $value !== '..') {
            echo "$value <br>";
          }
        }
        ?>

      


        <!-- End Test Slick --> 







        <!-- Start Incognito Set -->
        <div class="gallery-incognito">
          <div class="row">
            <h2 class="gallery__sub-title title__sub">Set Incognito</h2>
          </div>
          <div class="gallery__set-box">
            <?php
            foreach($setIncognito as $key => $value) {
              echo "<div class='col-md-4'><img class='gallery__img' src='{$value}' alt=''></div>";
            }
            ?>


          </div>
        </div>
        <!-- End Incognito Set -->

        <!-- Start Hands Set -->
        <div class="gallery-incognito">
          <div class="row">
            <h2 class="gallery__sub-title title__sub">Set Hands</h2>
          </div>
          <div class="gallery__set-box">
            <?php
            foreach($setHands as $key => $value) {
              echo "<div class='col-md-4'><img class='gallery__img' src='{$value}' alt=''></div>";
            }
            ?>
          </div>
        </div>
        <!-- End Hands Set -->

        <!-- Start Simple Estetics Set -->
        <div class="gallery-incognito">
          <div class="row">
            <h2 class="gallery__sub-title title__sub">Set Simple Estetics</h2>
          </div>
          <div class="gallery__set-box">
            <?php
            foreach($setEsteticsSimple as $key => $value) {
              echo "<div class='col-md-4'><img class='gallery__img' src='{$value}' alt=''></div>";
            }
            ?>
          </div>
        </div>
        <!-- End Simple Estetics Set -->

        <!-- Start Memory Set -->
        <div class="gallery-incognito">
          <div class="row">
            <h2 class="gallery__sub-title title__sub">Set Memories</h2>
          </div>
          <div class="gallery__set-box">
            <?php
            foreach($setMemory as $key => $value) {
              echo "<div class='col-md-4'><img class='gallery__img' src='{$value}' alt=''></div>";
            }
            ?>
          </div>
        </div>
        <!-- End Memory Set -->


      </div>
    </div> 
  </main>

  <?php include("./src/includes/footer.php"); ?>

