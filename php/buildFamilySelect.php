<?php
require('lib/config.php');

$command = 'SELECT idFamily, name FROM family;';
$result = query($command);

foreach ($result as $key => $line) {
  echo ('<option value=' . $line['idFamily'] . '>' . $line['name'] . '</option>');
}
