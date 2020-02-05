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
      <li><a href="products.html">Products</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ol>
  </div>

  <?php
  foreach ($result as $key => $line) {
    //TODO Colocar a foto, descriçao, preço e essas cenas aqui bonitas
  }
  ?>
</body>

</html>
