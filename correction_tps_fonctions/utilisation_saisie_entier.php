<?php
// Ce code reprend la correction de l'exercice 5 sur les conditions.

require_once 'saisie_entier.php';

$patternEntier = '/^-?\d+\n?$/';

$entier1 = saisieEntier();
$entier2 = saisieEntier('Merci de saisir un autre entier : ');
$entier3 = saisieEntier('Merci de saisir un troisième entier : ');

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
