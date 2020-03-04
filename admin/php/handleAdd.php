<?php
$table = $_GET['table'];

require('../../php/lib/config.php');

$command = 'INSERT INTO ' . $table;

if ($table == 'product') {
  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $dir_img = $_POST['dir_img'];
  $idFamily = $_POST['idFamily'];
  $state = 1;

  echo $command .= ' (name, description, price, dir_img, idFamily, state) VALUES 
  ("' . $name . '", "' . $description . '", ' . $price . ', "' . $dir_img . '", ' . $idFamily . ', ' . $state . ');';
} else if ($table == 'family') {
  $name = $_POST['name'];

  $command .= ' (name) VALUES ("' . $name . '");';
}

if (query($command)) {
  header("Refresh:1; url=../pages/manage.php?table=" . $table);
} else {
  echo ('Error!');
}
