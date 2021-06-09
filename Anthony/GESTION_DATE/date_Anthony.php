<?php

$format = 'd/m/Y';
$date = new DateTime('24-08-1986');
echo $date->format($format);
echo PHP_EOL;

$now = new DateTime('NOW');
echo $now->format($format);
echo PHP_EOL;

$weekAgo = new DateTime('-1 week');
echo $weekAgo->format($format);
echo PHP_EOL;

$previousSunday = new DateTime('NOW');
$previousSunday->modify('previous sunday');
echo $previousSunday->format($format);
echo PHP_EOL

?>