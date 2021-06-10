<?php

/*
La boucle foreach sert à parcours des éléments itérables (tableau). La syntaxe de base est :
foreach (<nom-de-l-iterable> : <nom-de-la-variable-locale>) {
    <Instructions à répéter>
}
*/

$prenoms = ['Jean', 'Jacques', 'Géraldine', 'Anne'];

// count($prenoms) = 4

echo 'Parcours avec une boucle while :'.PHP_EOL;

$i = 0;

while ($i < count($prenoms)) {
    echo $prenoms[$i].PHP_EOL;
    $i++;
}


echo PHP_EOL.'Parcours avec une boucle for :'.PHP_EOL;

for ($i = 0; $i < count($prenoms); $i++) {
    echo $prenoms[$i].PHP_EOL;
}


echo PHP_EOL.'Parcours avec une boucle foreach :'.PHP_EOL;

foreach ($prenoms as $p) {
    echo $p.PHP_EOL;
}

// Cette boucle foreach n'est pas un strict equivalent des boucles ci-dessus. Car cette boucle là parcours bien les valeurs du tableau et pas ses indices.
// On aurait une grosse différence avec un tableau comme: $tableau = ['clef' => 'valeur', 5, -6 => 4];

echo PHP_EOL.'Jouons maintenant avec un tableau associatif.'.PHP_EOL;

$tableau = [
    'clef' => 'valeur',
    5, // Si aucune clef fournit, PHP autogénère une clef (0)
    -6 => 4
];

var_dump($tableau);

echo PHP_EOL.'Parcours du tableau associatif avec un foreach :'.PHP_EOL;

foreach ($tableau as $valeur) {
    echo $valeur.PHP_EOL;
}


echo PHP_EOL.'Parcours du tableau associatif avec une boucle for :'.PHP_EOL;

for ($i = 0; $i < count($tableau); $i++) {
    $valeur = array_values($tableau)[$i]; // array_values permet de ne retourner que les valeur (génère de nouvelles clefs en numérique "auto increment").
    echo $valeur.PHP_EOL;
}

/*
Il existe une deuxième syntaxe pour la boucle foreach. Cette deuxième syntaxe permet d'avoir la clef en plus de la valeur.
 */

echo PHP_EOL.'Boucle foreach avec clef + valeur :'.PHP_EOL;

// Dans cet exemple on aura 2 variables locales dans la boucle :
// 1) clef => indice/clef permettant d'identifier la valeur dans le tableau associatif
// 2) valeur => valeur (comme avant)
foreach ($tableau as $clef => $valeur) {
    echo $clef.'='.$valeur.' ';
}

echo PHP_EOL.PHP_EOL.'Boucle for avec clef + valeur :'.PHP_EOL;

$toutesLesClefs = array_keys($tableau); // ['clef', 0, -6]

for ($i = 0; $i < count($toutesLesClefs); $i++) {
    $clef = $toutesLesClefs[$i];
    $valeur = $tableau[$clef];
    echo $clef.'='.$valeur.' ';
}

echo PHP_EOL;
