<footer class="footer">
  <div class="cont">
    <h2 class="title title__sub footer__title">Contacts</h2>  
  </div>

  <div class="footer__downside-box">
    <div class="cont">

      <div class="footer__downside">
        <p class="text">
          Website was made for artist Nadia Heart.
        </p>

        <p class="text">
          <a href="#">Payment & Shipping</a>
        </p>
      </div>
      
    </div>
  </div>
  
</footer>

  <script src="./src/scripts/video.js"></script>
  <script src="./src/scripts/scripts.js"></script>
  <?php if($_SERVER[REQUEST_URI] == "/") {
    echo '<script src="./src/scripts/jquery.min.js"></script>
          <script src="./src/slick/slick.min.js"></script>
          <script src="./src/scripts/frontpage.js"></script>';
  } ?>   
  <?php if($_SERVER[REQUEST_URI] == "/gallery") {
    echo '<script src="./src/scripts/jquery.min.js"></script>
          <script src="./src/slick/slick.min.js"></script>
          <script src="./src/scripts/gallery.js"></script>';
  } ?>    
 
</body>

</html>