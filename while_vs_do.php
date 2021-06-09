<?php

$i = 0;

// while ($i < 10) {
//     echo $i.PHP_EOL;
//     // printf('%d%s', $i, PHP_EOL); // %d = digit (entier) ; %s = string (chaîne de caractère).
//     $i++;
// }

do {
    echo $i;
    $i++;
} while ($i < 10);

echo PHP_EOL.'à la fin i vaut '.$i.PHP_EOL;
