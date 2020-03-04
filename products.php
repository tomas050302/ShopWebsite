<!DOCTYPE HTML>

<head>
  <title>Muito barato | Gallery</title>
  <meta charset="utf-8">
  <!-- CSS Files -->
  <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
  <link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu.css">
  <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen">
  <link rel="stylesheet" href="./css/main.css">
  <!-- JS Files -->
  <script src="js/jquery.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/slides/slides.min.jquery.js"></script>
  <script src="js/cycle-slider/cycle.js"></script>
  <script src="js/nivo-slider/jquery.nivo.slider.js"></script>
  <script src="js/tabify/jquery.tabify.js"></script>
  <script src="js/prettyPhoto/jquery.prettyPhoto.js"></script>
  <script src="js/twitter/jquery.tweet.js"></script>
  <script src="js/scrolltop/scrolltopcontrol.js"></script>
  <script src="js/portfolio/filterable.js"></script>
  <script src="js/modernizr/modernizr-2.0.3.js"></script>
  <script src="js/easing/jquery.easing.1.3.js"></script>
  <script src="js/kwicks/jquery.kwicks-1.5.1.pack.js"></script>
  <script src="js/swfobject/swfobject.js"></script>
  <!-- FancyBox -->
  <link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css" media="all">
  <script src="js/fancybox/jquery.fancybox-1.2.1.js"></script>
</head>

<body>
  <div class="header">
    <!-- Logo/Title -->
    <div id="site_title"><a href="index.html"> <img src="img/logo.png" alt=""></a> </div>
    <!-- Main Menu -->
    <ol id="menu">
      <li><a href="index.html">Home</a></li>
      <li><a href="products.php">Products</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ol>
  </div>
  <div class="familiesContainer">
    <?php require('./php/buildFamilySelect.php'); ?>
  </div>
  </form>
  <div id="container">
    <div id="portfolio">
      <ul id="filterable">
        <li class="first">
        </li>
      </ul>
      <!--END filtering-nav-->
      <div class="portfolio-container" id="columns">
        <ul>
          <?php include('php/buildProductsLayout.php'); ?>
        </ul>
        <!--END ul-->
      </div>
      <!--END portfolio-wrap-->
    </div>
    <div style="clear:both; height: 40px"></div>
  </div>
  <!-- close container -->
  <div id="footer">
    <!-- First Column -->
    <div class="one-fourth">
      <h3>Useful Links</h3>
      <ul class="footer_links">
        <li><a href="#">Lorem Ipsum</a></li>
        <li><a href="#">Ellem Ciet</a></li>
        <li><a href="#">Currivitas</a></li>
        <li><a href="#">Salim Aritu</a></li>
      </ul>
    </div>
    <!-- Second Column -->
    <div class="one-fourth">
      <h3>Terms</h3>
      <ul class="footer_links">
        <li><a href="#">Lorem Ipsum</a></li>
        <li><a href="#">Ellem Ciet</a></li>
        <li><a href="#">Currivitas</a></li>
        <li><a href="#">Salim Aritu</a></li>
      </ul>
    </div>
    <!-- Third Column -->
    <div class="one-fourth">
      <h3>Information</h3>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet enim id dui tincidunt vestibulum
      rhoncus a felis.
      <div id="social_icons"> Theme by <a href="http://www.csstemplateheaven.com">CssTemplateHeaven</a><br>
        Photos © <a href="http://dieterschneider.net">Dieter Schneider</a> </div>
    </div>
    <!-- Fourth Column -->
    <div class="one-fourth last">
      <h3>Socialize</h3>
      <img src="img/icon_fb.png" alt=""> <img src="img/icon_twitter.png" alt=""> <img src="img/icon_in.png" alt="">
    </div>
    <div style="clear:both"></div>
  </div>
  <!-- END footer -->
</body>

</html>
