<?php
$table = $_POST['table'];
if ($table == 'family') {
  $idFamily = $_POST['idFamily'];
  $name = $_POST['name'];

  $command = 'UPDATE ' . $table . ' SET name="' . $name . '" WHERE idFamily=' . $idFamily . ';';
} else if ($table == 'product') {
  $idProduct = $_POST['idProduct'];
  //TODO: Acabar isto
}


require_once '../../php/lib/config.php';

if (query($command)) {
  echo ('<h1>Event Updated successfully</h1>');
  header("Refresh:.5; url=../pages/manage.php?table=" . $table);
}
