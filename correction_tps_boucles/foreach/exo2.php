<?php
$tableau = [
    'clef' => 'valeur',
    -1 => 111,
    5,
    'salut'
];

// Possible mais mauvaise idee.
// foreach (array_keys($tableau) as $clef) {
//     $valeur = $tableau[$clef];
// }

foreach ($tableau as $clef => $valeur) {
    printf('%4s => %s%s', $clef, $valeur, PHP_EOL);
}
