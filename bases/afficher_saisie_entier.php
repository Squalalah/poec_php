<?php
echo 'Merci de saisir un entier positif : ';

$handle = fopen('php://stdin', 'r');
$line = trim(fgets($handle));
// ---
// $line = readline('Merci de saisir un entier positif : ');

printf('La valeur est : "%s"%s', $line, PHP_EOL);

// is_numeric('.4') => false donc pas besoin de se soucis du retour 0 possible par la fonction strpos.
if (is_numeric($line) && !strpos($line, '.')) { // Si c'est un numérique sans '.' (donc un entier).
    echo 'Est un entier'.PHP_EOL;

    $intVal = intval($line);

    if ($intVal >= 0) {
        printf('La valeur saisie (%d) est bien un entier positif', $intVal);
    } else {
        echo 'L\'entier saisie n\'est pas positif'.PHP_EOL;
    }
} else {
    echo 'N\'est PAS un entier'.PHP_EOL;
}

// --- Avec une Regex

// if (preg_match('/^\d+$/', $line)) {
//     printf('La valeur saisie (%s) est bien un entier positif', $line);
// } else {
//     echo 'La valeur saisie n\'est pas un entier positif';
// }

// echo PHP_EOL;

/*
 * Quelques fonctions sur les strings:
 * strlen : taille de la chaîne
 * strpos : recherche d'une chaîne
 * strtolower : mise en minuscule
 * strtoupper : mise en majuscule
 * str_replace : remplacement d'une chaîne
 */
