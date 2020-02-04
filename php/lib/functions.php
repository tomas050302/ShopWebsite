<?php
function printLine($array)
{
  foreach ($array as $key => $line) {
    echo '<pre>';
    print_r($line);
    echo '</pre>';
  }
}

function query($command)
{
  require('config.php');
  require($dir_site . '/php/lib/connection.php');

  $result = $connection->query($command);

  return $result;
}

function numRows($query)
{
  return mysqli_num_rows($query);
}
