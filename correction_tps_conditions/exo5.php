<?php

$patternEntier = '/^-?\d+\n?$/';

$entier1 = readline('Merci de saisir un entier : ');

if (preg_match($patternEntier, $entier1)) {
    $entier1 = intval($entier1);
} else {
    echo 'La valeur saisie n\'est pas un entier.'.PHP_EOL.'Fin du programme !'.PHP_EOL;
    exit -1;
}

$entier2 = readline('Merci de saisir un autre entier : ');

if (preg_match($patternEntier, $entier2)) {
    $entier2 = intval($entier2);
} else {
    echo 'La valeur saisie n\'est pas un entier.'.PHP_EOL.'Fin du programme !'.PHP_EOL;
    exit -1;
}

$entier3 = readline('Merci de saisir un troisième entier : ');

if (preg_match($patternEntier, $entier3)) {
    $entier3 = intval($entier3);
} else {
    echo 'La valeur saisie n\'est pas un entier.'.PHP_EOL.'Fin du programme !'.PHP_EOL;
    exit -1;
}

// Valeurs :
// entier1 = 4
// entier2 = 2
// entier3 = 10

// VRAI ET FAUX
// FAUX
// => 4 operations avec le IF

if ($entier1 >= $entier2 && $entier1 >= $entier3) {
    echo $entier1;
} elseif ($entier2 >= $entier1 && $entier2 >= $entier3) {
    echo $entier2;
// } elseif ($entier3 >= $entier1 && $entier3 >= $entier2) {
} else {
    echo $entier3;
}

// VRAI
// FAUX
// => 2 operations

if ($entier1 >= $entier2) {
    if ($entier1 >= $entier3) {
        echo $entier1;
    } else {
        echo $entier3;
    }
} elseif ($entier1 < $entier2) {
    if ($entier2 >= $entier3) {
        echo $entier2;
    } else {
        echo $entier3;
    }
// } else { // entier1 === entier2
}

// -- Logique "boucle"

$result = $entier1;

if ($entier2 > $result) {
    $result = $entier2;
}
if ($entier3 > $result) {
    $result = $entier3;
}

echo $result;

// Ou en utilisant la fonction déjà existante.
// echo max($entier1, $entier2, $entier3);
