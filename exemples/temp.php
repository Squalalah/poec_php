<?php
$f = fopen('php://stdin', 'r');
$v = fgets($f);

printf('Filled value is "%s"', trim($v));

fclose($f);
