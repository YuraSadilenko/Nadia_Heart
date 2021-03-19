<?php include("./src/includes/head.php"); ?>
<?php include("./src/includes/variables.php"); ?>
<?php include("./src/includes/texts/cv/cv.php"); ?>


<body>
  <header class="header" id="home">
    <video id="header_video" class="video" autoplay="autoplay" muted>
      <source src="./src/video/header.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
    </video>

    <div class="header__wrap"></div>

    <!--Navigation block-->
    <?php include("./src/includes/navigation.php"); ?>

    <a href="/">
      <img class="header__logo" src="./src/images/logo.jpg" alt="logo" title="Nadia Heart">
    </a>
    <h1 class="header__title title">Nadia Heart</h1>
    <p class="header__descr">Graphic Artist</p>
  </header>

  <main>
    <!--About me block start-->
    <section class="about-me" id="aboutMe">
      <div class="container">
      <h2 class="title title__sub about-me__title">About Me</h2>

      <div class="row">
        <div class="col-12">
        <!--About me photo-->
        <div class="sl">
          <div class="about-me__img-box">
            <img class="about-me__photo" src="./src/images/about-me.png" alt="my photo" title="about me">
          </div>
          
          <div class="about-me__img-box">
            <img class="about-me__photo" src="./src/images/about-me-2.jpg" alt="my photo" title="about me">
          </div>
          
          <div class="about-me__img-box">
            <img class="about-me__photo" src="./src/images/about-me-3.jpg" alt="my photo" title="about me">
          </div>
          
          <div class="about-me__img-box">
            <img class="about-me__photo" src="./src/images/about-me-4.jpg" alt="my photo" title="about me">
          </div>
          
        </div>

        <p class="text">
          <?php echo nl2br($aboutUsEn); ?>
        </p>

        <h2 class="title title__sub about-me__title">Statement</h2>
        <p class="text">
          <?php echo nl2br($statementEn); ?>
        </p>

        </div>
      </div>

      </div>
    </section>
    <!--About me block end-->

    <!--CV block start-->
    <section class="cv" id="myCv">
      <div class="container">
        <h2 class="title title__sub cv__title">My CV</h2>
      </div>

      <div class="container">

      <h2 class="cv__title--sub">Education</h2>
        <div class="cv__box">

          <?php 
          foreach($education as $educationKey => $educationEven) {
            $year = $educationEven['year'];
            $event = $educationEven['action'];
            echo "          
            <div class='cv__item'>
              <p class='cv__date'>$year</p>
              <ul class='cv__descr'>
                $event
              </ul>
            </div>";
          }
          ?>
        </div>

        <h2 class="cv__title--sub">Personal Exhibitions</h2>
        <div class="cv__box">

          <?php 
          foreach($ExhibitionPersonal as $educationKey => $educationEven) {
            $year = $educationEven['year'];
            $event = $educationEven['action'];
            echo "          
            <div class='cv__item'>
              <p class='cv__date'>$year</p>
              <ul class='cv__descr'>
                $event
              </ul>
            </div>";
          }
          ?>
        </div>

        <h2 class="cv__title--sub">Group Exhibitions</h2>
        <div class="cv__box">
        <?php 
          foreach($ExhibitionGroup as $educationKey => $educationEven) {
            $year = $educationEven['year'];
            $event = $educationEven['action'];
            echo "          
            <div class='cv__item'>
              <p class='cv__date'>$year</p>
              <ul class='cv__descr'>
                $event
              </ul>
            </div>";
          }
          ?>
        </div>

        
        <h2 class="cv__title--sub">Awards</h2>
        <div class="cv__box">

          <?php 
          foreach($awards as $educationKey => $educationEven) {
            $year = $educationEven['year'];
            $event = $educationEven['action'];
            echo "          
            <div class='cv__item'>
              <p class='cv__date'>$year</p>
              <ul class='cv__descr'>
                $event
              </ul>
            </div>";
          }
          ?>
        </div>

      </div>

      <div class="btn__box btn__box--center">
        <a href="/gallery" class="btn btn__link btn__link--transparent">To Gallery</a>
      </div>
    </section>
    <!--CV block end-->

    <!-- Portfolio block start -->
    <section class="portfolio">
      <div class="container-fluid">
        <div class="portfolio__box">
          <div class="portfolio__item">
            <div class="portfolio__wrap"></div>
            <img src="./src/images/front-gallery/s1.jpg" alt="image for portfolio 1">
          </div>
          <div class="portfolio__item">
            <div class="portfolio__wrap"></div>
            <img src="./src/images/front-gallery/s2.jpg" alt="image for portfolio 1">
          </div>
          <div class="portfolio__item">
            <div class="portfolio__wrap"></div>
            <img src="./src/images/front-gallery/s10.jpg" alt="image for portfolio 1">
          </div>
          <div class="portfolio__item">
            <div class="portfolio__wrap"></div>
            <img src="./src/images/front-gallery/s4.jpg" alt="image for portfolio 1">
          </div>
          <div class="portfolio__item">
            <div class="portfolio__wrap"></div>
            <img src="./src/images/front-gallery/s7.jpg" alt="image for portfolio 1">
          </div>
          <div class="portfolio__item">
            <div class="portfolio__wrap"></div>
            <img src="./src/images/front-gallery/s6.jpg" alt="image for portfolio 1">
          </div>
        </div>

        <div class="portfolio__box">
          <div class="portfolio__item">
            <div class="portfolio__wrap"></div>
            <img src="./src/images/front-gallery/s5.jpg" alt="image for portfolio 1">
          </div>

          <div class="portfolio__item">
            <div class="portfolio__wrap"></div>
            <img src="./src/images/front-gallery/s8.jpg" alt="image for portfolio 1">
          </div>

          <div class="portfolio__item">
            <div class="portfolio__wrap"></div>
            <img src="./src/images/front-gallery/s9.jpg" alt="image for portfolio 1">
          </div>
          <div class="portfolio__item">
            <div class="portfolio__wrap"></div>
            <img src="./src/images/front-gallery/s3.jpg" alt="image for portfolio 1">
          </div>

          <div class="portfolio__item">
            <div class="portfolio__wrap"></div>
            <img src="./src/images/front-gallery/s11.jpg" alt="image for portfolio 1">
          </div>
          <div class="portfolio__item">
            <div class="portfolio__wrap"></div>
            <img src="./src/images/front-gallery/s12.jpg" alt="image for portfolio 1">
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio block end -->
  </main>

  <?php include("./src/includes/footer.php"); ?>