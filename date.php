<?php 

$date = new DateTime();

$my_timezone = new DateTime('America/Chicago');

echo $date->format('l, F j, Y, g:ia') . '<br>';
?>
