<?php
echo 'merci de saisir une valeur : ';

$handle = fopen('php://stdin', 'r');
$value = fgets($handle);

echo 'La valeur saisie est '.$value.PHP_EOL;
