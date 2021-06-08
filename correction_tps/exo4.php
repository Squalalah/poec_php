<?php

$patternEntier = '/^-?\d+\n?$/';

$entier1 = readline('Merci de saisir un entier');

if (preg_match($patternEntier, $entier1)) {
    $entier1 = intval($entier1);
} else {
    echo 'La valeur saisie n\'est pas un entier.'.PHP_EOL.'Fin du programme !'.PHP_EOL;
    exit -1;
}

$entier2 = readline('Merci de saisir un autre entier');

if (preg_match($patternEntier, $entier2)) {
    $entier2 = intval($entier2);
} else {
    echo 'La valeur saisie n\'est pas un entier.'.PHP_EOL.'Fin du programme !'.PHP_EOL;
    exit -1;
}


if ($entier1 >= $entier2) {
    echo $entier1;
} else {
    echo $entier2;
}
// Ou avec une ternaire.
// echo $entier1 >= $entier2 ? $entier1 : $entier2;
// Ou en utilisant la fonction déjà existante.
// echo max($entier1, $entier2);
