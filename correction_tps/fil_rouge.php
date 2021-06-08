<?php

// $aTrouver = 'mystere';
$dico = ['kayak', 'rouge', 'trois'];

// $nbWords = count($dico); // 3.
//// $nb = rand(0, $nbWords - 1);
// $nb = rand(1, $nbWords) - 1;
// $aTrouver = $dico[$nb];

// $aTrouver = shuffle($dico)[0];
$aTrouver = $dico[array_rand($dico)];

echo 'Indice, le mot à trouver est '.$aTrouver.PHP_EOL;

$proposition = readline('Merci de saisir un mot pour tenter de trouver le mot mystere : ');
$proposition = trim($proposition); // Suppression du saut de ligne final (plus les trailing spaces).

if ($proposition === $aTrouver) {
    echo 'Bravo !!';
} else {
    echo 'Mauvaise réponse !';
}

echo PHP_EOL;
