<?php

function saisieEntier(string $question = 'Merci de saisir un entier : '): int
{
    $saisie = readline($question);

    while (!\preg_match('/^-?\d+\n?$/', $saisie)) {
        echo $saisie.' n\'est pas un entier !'.PHP_EOL;
        $saisie = readline('Merci de saisir un entier : ');
    }

    return \intval($saisie);
}

function saisieEntierSansRegex(): int
{
    $saisie = trim(readline('Merci de saisir un entier : '));

    // while (!is_numeric($saisie) || mb_strpos($saisie, '.') !== false) {
    // Re-ecriture possible avec la règle de De Morgan : !a && !b <=> !(a || b)
    while (!(is_numeric($saisie) && mb_strpos($saisie, '.') === false)) {
        echo $saisie.' n\'est pas un entier !'.PHP_EOL;
        $saisie = readline('Merci de saisir un entier : ');
    }

    return \intval($saisie);
}

/*
$entier = saisieEntier();
echo 'Vous avez choisi '.$entier.PHP_EOL;
*/
