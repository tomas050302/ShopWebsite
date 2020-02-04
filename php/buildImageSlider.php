<?php
require_once('lib/config.php');

$command = 'SELECT name, description, dir_img FROM product WHERE state=1;';

$result = query($command);

foreach ($result as $key => $line) {
  echo ('
        <li> 
          <img src="images/' . $line['dir_img'] . '" alt="">
          <div class="ei-title">
            <h2>' . $line['name'] . '</h2>
            <h3>' . $line['description'] . '</h3>
          </div>
        </li>
  ');
}
