<?php

/*
for (<initialisation/parametrage de la boucle>) {
    <Bloc d'instructions a repeter.>
}

initialisation/parametrage => separe en trois parties :
1) declarative : initialiser la/es valeur(s)
2) cas d'arret : condition permettant de savoir si on continue la boucle (comme le param d'une boucle while)
3) incrémentale : changement des valeurs
Ces parties seront separes par un ';'.
*/

for ($i = 0; $i < 5; $i++) {
    echo $i.PHP_EOL;
}
// Attention $i est concerve apres la boucle (pas comme en Java/c++/...).

echo 'A la fin i vaut '.$i.PHP_EOL; // 5

echo 'Avec un while maintenant'.PHP_EOL;

// --- Code equivalent avec une while.

$i = 0;                 // 1)

while ($i < 5) {        // 2)
    echo $i.PHP_EOL;
    $i++;               // 3)
}

echo 'A la fin i vaut '.$i.PHP_EOL; // 5

// ## Autres syntaxes pour le for.

/*
On peut complexifier ou oumettre une/plusieurs parties de la boucles.
*/

for (; $i < 5; $i++) {
    echo $i.PHP_EOL;
}

// Si on enlève toutes les parties le code équivalent pourrait être :

$i = 0;

for (;;) {
    echo $i++.PHP_EOL;
    if ($i >= 5) break;
}

echo 'A la fin i vaut '.$i.PHP_EOL; // 5
// Ce code n'est pas bon. C'est juste pour montrer qu'on peut aller jusqu'à ne rien configurer (mais ça n'a pas de sens).

// Intéressons à une boucle for avec deux variables.

for ($i = 0, $j = 0 ; $i < 5; $i++, $j -= 2) {
    echo 'i = '.$i.' ; j = '.$j.PHP_EOL;
}




$i++;
++$i;

$i = 5;
echo $i++; // echo $i; $i++;
// Affiche 5.
// $i vaut 6.

$i = 5;
echo ++$i; // $i++; echo $i;
// Affiche 6.
// $i vaut 6.


$i = 9;

if ($i++ < 10) {
    // On rentre dans la condition car $i vaut 9 au moment du test (par contre il vaut 10 arrivé dans le if ; i est incrémenté après le test).
}

if (++$i < 10) {
    // On ne rentre pas dans ce code car i vaut 10 (incrémenté avant).
}
