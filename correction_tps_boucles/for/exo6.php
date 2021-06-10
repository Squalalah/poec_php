<?php

// --- Recuperation des valeurs :
$phrase = trim(readline('Quel sera la phrase à répéter ? '));
$nb = intval(readline('Combien de fois voulez-vous répéter cette phrase ? '));

// Ou avec fgets :
// $handle = fopen('php://stdin', 'r');

// echo 'Quel sera la phrase à répéter ? ';
// $phrase = trim(fgets($handle));

// echo 'Combien de fois voulez-vous répéter cette phrase ? ';
// $nb = intval(fgets($handle));

// fclose($handle);
// --- Fin recuperation des valeurs

$msg = '';

for ($i = 0; $i < $nb; $i++) {
    // $msg .= $phrase.' ';
    // $msg = $msg.$phrase.' ';
    // $msg .= "$phrase ";
    $msg = "$msg $phrase";
}

echo $msg.PHP_EOL;
