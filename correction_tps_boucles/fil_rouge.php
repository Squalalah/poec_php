<?php

// Ensemble de mots disponibles.
$dico = ['kayak', 'rouge', 'trois'];
// Choix du mot a trouver.
$aTrouver = $dico[array_rand($dico)];

// --- Premiere proposition.

$jeuEnCours = true;

do {
    $proposition = trim(readline('Merci de saisir un mot pour tenter de trouver le mot mystere : '));

    if ($proposition === $aTrouver) {
        echo 'Bravo !!';
        $jeuEnCours = false;
    } else {
        echo $proposition.' n\'est pas le mot à trouver, vous pouvez tenter de nouveau';
    }

    echo PHP_EOL;
} while ($jeuEnCours);

// --- Autre proposition.

$proposition = trim(readline('Merci de saisir un mot pour tenter de trouver le mot mystere : '));

while ($proposition !== $aTrouver) {
    echo $proposition.' n\'est pas le mot à trouver, vous pouvez tenter de nouveau'.PHP_EOL;
    $proposition = trim(readline('Nouvelle tentative : '));
}

echo 'Bravo !!'.PHP_EOL;
