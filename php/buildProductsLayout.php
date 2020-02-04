<?php
require_once('lib/config.php');

$command = 'SELECT name, description, dir_img, dir_details FROM product WHERE state = 1;';
$result = query($command);

foreach ($result as $key => $line) {
  echo ('
    <li class="one-fourth">
      <p><a href="productDetails/' . $line['dir_details'] . '"><img src="images/' . $line['dir_img'] . '" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
      <h4><a href="">' . $line['name'] . '</a></h4>
      <p>' . $line['description'] . '</p>
    </li>
  ');
}
//TODO: Este formato
