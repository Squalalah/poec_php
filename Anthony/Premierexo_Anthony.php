<?php

/*
 *
 *
 *
 * Exercice 1
 *
 *
 *
 */

echo 'EXERCICE 1'. PHP_EOL;

$a = 1;
if (is_numeric($a)) {
    echo "1 est Positif". PHP_EOL;
}
else {
    echo "1 est négatif". PHP_EOL;
}

/*
 *
 *
 *
 * Exercice 2
 *
 *
 *
 */

echo 'Exercice 2'. PHP_EOL;

$b = rand(-50,50);

if(is_numeric($b)) {
    printf("%d est positif". PHP_EOL, $b);
}
else printf("%d est négatif". PHP_EOL, $b);
if (!$b) printf("%d est une valeur nulle (0)". PHP_EOL, $b);


/*
 *
 *
 *
 * Exercice 3
 *
 *
 *
 */

echo "Exercice 3". PHP_EOL;

echo 'merci de saisir une valeur : ';

$handle = fopen('php://stdin', 'r');
$value = fgets($handle);

if(strlen($value) > 30) {
    echo "La phrase est trop grande". PHP_EOL;
}
else echo "Merci pour ce commentaire constructif". PHP_EOL;

/*
 *
 *
 *
 * Exercice 4
 *
 *
 *
 */

echo "Exercice 4". PHP_EOL;

echo 'Merci de saisir un entier positif : '. PHP_EOL;

$handle = fopen('php://stdin', 'r');
$result = trim(fgets($handle));
// ---
// $result = readline('Merci de saisir un entier positif : ');
// is_numeric('.4') => false donc pas besoin de se soucis du retour 0 possible par la fonction strpos.
if (is_numeric($result) && !strpos($result, '.')) { // Si c'est un numérique sans '.' (donc un entier).
    $intVal = intval($result);

    echo 'Merci de saisir un entier positif : ' . PHP_EOL;
    $handleAux = fopen('php://stdin', 'r');
    $resultAux = trim(fgets($handleAux));

    if (is_numeric($resultAux) && !strpos($resultAux, '.')) { // Si c'est un numérique sans '.' (donc un entier).
        $intValDeuxieme = intval($resultAux);

        printf("Le plus grand des deux est %d" . PHP_EOL, max($intVal, $intValDeuxieme));
        echo 'Merci de saisir un entier positif : ' . PHP_EOL;
        $handleAuxBis = fopen('php://stdin', 'r');
        $resultAuxBis = trim(fgets($handleAuxBis));

        if (is_numeric($resultAuxBis) && !strpos($resultAuxBis, '.')) { // Si c'est un numérique sans '.' (donc un entier).
            $intValTroisieme = intval($resultAuxBis);

            printf("Le plus grand des trois est %d" . PHP_EOL, max($intVal, $intValDeuxieme, $intValTroisieme));
        }
    }
}



?>