<?php

// Écrire une boucle « for » qui affiche en console tous les nombres de 1 à 10 (compris) ainsi que leur valeur au carré.

/*
for ($i = 1; $i <= 10; $i++) {
    // On rappel que l'on peut faire le calcul du carre de nombreuses façons differentes, dont :
    // $i * $i
    // pow($i, 2)
    // $i ** 2
    $square = $i ** 2;

    // Concatenation.
    // echo $i.'² = '.$square.PHP_EOL;

    // Interpolation.
    // echo "${i}² = ${square}\n";

    // Printf
    printf('%2d² = %3d%s', $i, $square, PHP_EOL);
}
*/

for ($i = 1, $square = 1; $i <= 10; $i++, $square = $i ** 2) {
    printf('%2d² = %3d%s', $i, $square, PHP_EOL);
}
