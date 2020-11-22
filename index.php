<?php include("./src/includes/head.php"); ?>

<body>
  <header class="header">
    <video id="header_video" class="video" autoplay="autoplay" muted>
      <source src="./src/video/header.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
    </video>

    <div class="header__wrap"></div>

    <div class="header__music-btn">
      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.991 511.991" style="enable-background:new 0 0 511.991 511.991;" xml:space="preserve">
        <g>
          <g>
            <path d="M362.677,125.949c-54.653-52.945-55.54-116.791-55.54-117.414c0-4.712-3.824-8.535-8.535-8.535
      			c-4.712,0-8.535,3.824-8.535,8.535v94.71v261.552c-25.777-26.144-76.409-31.3-123.611-9.867
      			c-32.648,14.835-58.101,40.006-68.096,67.345c-6.521,17.848-6.137,35.32,1.093,50.53c12.052,25.342,41.286,39.186,75.394,39.186
      			c19.06,0,39.647-4.327,59.595-13.384c32.648-14.835,58.109-40.006,68.096-67.345c4.114-11.267,4.609-22.662,4.609-34.466
      			c0-6.402,0-12.795,0-19.196c0-9.141,0-18.283,0-27.416c0-10.917,0-21.825,0-32.742c0-11.719,0-23.438,0-35.166
      			c0-11.566,0-23.123,0-34.688c0-10.439,0-20.869,0-31.308c0-8.348,0-16.687,0-25.035c0-5.283,0-10.567,0-15.859
      			c0-1.374,0-2.757,0-4.131c8.988,19.666,22.628,41.278,43.667,61.66c43.335,41.977,49.583,66.449,50.257,75.027
      			c0.35,4.456,4.071,7.861,8.501,7.861c0.111,0,0.222,0,0.341-0.008c4.584-0.179,8.194-3.943,8.194-8.527v-84.825
      			C418.815,215.811,419.344,180.841,362.677,125.949z" />
          </g>
        </g>
      </svg>
    </div>

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
    <section class="about-me">
      <div class="cont">
        <h2 class="title title__sub about-me__title">About Me</h2>

        <!--About me photo-->
        <img class="about-me__photo" src="./src/images/about-me.png" alt="my photo" title="about me">

        <p class="text">
          <?php include("./src/texts/articles/en/about.txt"); ?>
        </p>

      </div>
    </section>
    <!--About me block end-->

    <!--CV block start-->
    <section class="cv">
      <div class="cont">
        <h2 class="title title__sub cv__title">My CV</h2>
      </div>

      <div class="cont">
        <div class="cv__item">
          <p class="cv__date">2020</p>
          <div class="cv__descr">
            <h3 class="cv__descr-title title">Title</h3>
            <p class="cv__descr-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad libero quibusdam temporibus odit blanditiis. Itaque harum voluptatem ratione voluptatum deserunt laboriosam ducimus fugiat ab, recusandae reiciendis maiores ullam incidunt sequi.</p>
          </div>
        </div>

        <div class="cv__item">
          <p class="cv__date">2020</p>
          <div class="cv__descr">
            <h3 class="cv__descr-title title">Title</h3>
            <p class="cv__descr-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad libero quibusdam temporibus odit blanditiis. Itaque harum voluptatem ratione voluptatum deserunt laboriosam ducimus fugiat ab, recusandae reiciendis maiores ullam incidunt sequi.</p>
          </div>
        </div>

        <div class="cv__item">
          <p class="cv__date">2020</p>
          <div class="cv__descr">
            <h3 class="cv__descr-title title">Title</h3>
            <p class="cv__descr-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad libero quibusdam temporibus odit blanditiis. Itaque harum voluptatem ratione voluptatum deserunt laboriosam ducimus fugiat ab, recusandae reiciendis maiores ullam incidunt sequi.</p>
          </div>
        </div>

        <div class="cv__item">
          <p class="cv__date">2020</p>
          <div class="cv__descr">
            <h3 class="cv__descr-title title">Title</h3>
            <p class="cv__descr-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad libero quibusdam temporibus odit blanditiis. Itaque harum voluptatem ratione voluptatum deserunt laboriosam ducimus fugiat ab, recusandae reiciendis maiores ullam incidunt sequi.</p>
          </div>
        </div>
      </div>
    </section>
    <!--CV block end-->

    <!--Portfolio block start-->
    <section class="portfolio">
      <div class="cont">

      </div>
    </section>
    <!--Portfolio block end-->

    <!--Payment block start-->
    <section class="payment">
      <div class="cont">

      </div>
    </section>
    <!--Payment block end-->

  </main>

  <?php include("./src/includes/footer.php"); ?>

  <script src="./src/scripts/video.js"></script>
  <script src="./src/scripts/scripts.js"></script>
</body>

</html>