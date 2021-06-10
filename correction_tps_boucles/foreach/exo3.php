<?php
$tableau = [
    'clef' => 'valeur',
    -1 => 111,
    5,
    'salut'
];

$somme = 0;

foreach ($tableau as $valeur) {
    if (is_numeric($valeur)) {
        // $somme += intval($valeur);
        $somme += $valeur;
    } else {
        echo "Valeur '$valeur' ignorée pour le calcul\n";
    }
}

echo "La somme des valeurs numériques du tableau est : ${somme}\n";
