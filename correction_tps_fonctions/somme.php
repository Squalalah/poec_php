<?php

/**
 * Prends un tableau d'entier en paramètre.
 * La fonction retournera la somme de toutes les valeurs du tableau.
 *
 * @param array|integer[] $tab
 * @return integer La somme.
 */
function somme1(array $tab): int
{
    $somme = 0;

    foreach ($tab as $entier) {
        $somme += $entier;
    }

    return $somme;
}

/*
$t = [3, 4, 2];

echo somme1($t).PHP_EOL;
echo somme1([4, 2]).PHP_EOL;
*/

function somme2(int ...$valeurs): int
{
    $somme = 0;

    foreach ($valeurs as $entier) {
        $somme += $entier;
    }

    return $somme;
}
