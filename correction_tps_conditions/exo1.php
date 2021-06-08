<?php

$maVariable = 42;


// Avec un if.

if ($maVariable >= 0) {
    $etat = 'positive';
} else { // $maVariable < 0
    $etat = 'negative';
}

echo 'valeur '.$etat.PHP_EOL;


// Avec une ternaite - V1.

$etat = $maVariable >= 0 ? 'positive' : 'negative';

echo 'valeur '.$etat.PHP_EOL;

// Avec une ternaire - V2.

echo 'valeur '.($maVariable >= 0 ? 'positive' : 'negative').PHP_EOL;


// Avec un switch (un peu plus étrange dans le cas présent).

switch ($maVariable <=> 0) { // Utilisation de l'opérateur de comparaison.
    case -1: // La comparaison donne -1 si maVariable < 0
        $etat = 'negative';
        break;
    case 0: // La comparaison donne 0 si maVariable == 0
    case 1: // La comparaison donne 1 si maVariable > 0
        $etat = 'positive';
        break;
}

echo 'valeur '.$etat.PHP_EOL;
