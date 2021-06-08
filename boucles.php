<?php

$number = trim(readline('Merci de saisir un nombre : '));

while (!is_numeric($number)) {
    echo 'La valeur saisie n\'est un nombre !'.PHP_EOL;
    $number = trim(readline('Merci de saisir un nombre (entier ou réel) : '));
}

echo 'Le nombre saisie est '.$number.PHP_EOL;



$i = 0;

while ($i < 10) {
    echo $i;
    $i++;
}

// Demander la saisie d'un entier (vérifier la saisie).
$id = readline('Merci de saisir l\'id du produit à afficher');

if (!preg_match('/^\d+$/', $id)) {
    echo 'Fin du programme';
}
