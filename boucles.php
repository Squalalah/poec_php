<?php

$number = trim(readline('Merci de saisir un nombre : '));

while (!is_numeric($number)) {
    echo 'La valeur saisie n\'est un nombre !'.PHP_EOL;
    $number = trim(readline('Merci de saisir un nombre (entier ou réel) : '));
}

echo 'Le nombre saisie est '.$number.PHP_EOL;
