<?php
require_once('php/lib/config.php');
$id = $_GET['id'];
$command = 'SELECT idProduct, name, description, dir_img, price FROM product WHERE state = 1 AND idProduct=' . $id . ';';
$result = query($command);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
  <link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
  <title><?php
          foreach ($result as $key => $line) {
            echo $line['name'];
          }
          ?></title>
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

  <?php
  foreach ($result as $key => $line) {
    echo ('<div class="imageHolder">
            <img src="images/' . $line['dir_img'] . '"/>
          </div>
          <h1 class="productName">' . $line['name'] . '</h1>
          <h2 class="price">' . $line['price'] . '€</h2>
          <div class="lineDiv"></div>
          <span class="productDescription">' . $line['description'] . '</span>
          ');
  }
  ?>

  <div id="footer" style="margin-top: 10%">
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
