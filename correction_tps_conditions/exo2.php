<?php

$valeur = rand(-50, 50);


// Avec un if.

if ($valeur > 0) {
    $etat = 'strictement positive';
} elseif ($valeur < 0) { // $valeur < 0
    $etat = 'strictement negative';
} else { // $valeur === 0
    $etat = 'nulle';
}

echo 'la valeur '.$valeur.' est '.$etat.PHP_EOL;


// Avec une ternaite - V1.

$etat = $valeur > 0
    ? 'strictement positive'
    : ($valeur < 0 ? 'strictement negative' : 'nulle');
// -- ou
$etat = $valeur === 0 ? 'nulle' : 'strictement '.($valeur > 0 ? 'positive' : 'negative');

echo 'la valeur '.$valeur.' est '.$etat.PHP_EOL;

// Avec une ternaire - V2.

echo 'la valeur '.$valeur.' est '.($valeur > 0
    ? 'strictement positive'
    : ($valeur < 0 ? 'strictement negative' : 'nulle')).PHP_EOL;


// Avec un switch (un peu plus étrange dans le cas présent).

switch ($valeur <=> 0) { // Utilisation de l'opérateur de comparaison.
    case -1: // La comparaison donne -1 si valeur < 0
        $etat = 'strictement negative';
        break;
    case 0: // La comparaison donne 0 si valeur == 0
        $etat = 'nulle';
        break;
    case 1: // La comparaison donne 1 si valeur > 0
        $etat = 'strictement positive';
        break;
}

echo 'la valeur '.$valeur.' est '.$etat.PHP_EOL;
