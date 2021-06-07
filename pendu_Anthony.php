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
$answer = "mystere";

echo "Veuillez saisir le mot à trouver";

$handle = fopen('php://stdin', 'r');
$result = trim(fgets($handle));

if(is_numeric($result))
{
    echo 'Qu\'est ce que vous ne comprennez pas dans "saisir un MOT" ?'. PHP_EOL;
}
else {
    printf('Mot choisi : %s', $result);
    echo'Mot à deviner : mystere'.PHP_EOL;
    if($result === 'mystere')
    {
        echo 'Bravo, vous avez gagné !'. PHP_EOL;
    }
    else {
        echo 'Perdu ! (franchement, ca craint un peu vu que vous connaissez la réponse)'. PHP_EOL;
    }
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

echo 'Bon allez, on retente mais en plus dur'.PHP_EOL;
$array = array('mystere', 'boule', 'enfant', 'demenagement');
$answerAux = array_rand( $array, 1);
echo "Veuillez saisir le mot à trouver";
$handleAux = fopen('php://stdin', 'r');
$resultAux = trim(fgets($handleAux));


if(is_numeric($resultAux))
{
    echo 'Qu\'est ce que vous ne comprennez pas dans "saisir un MOT" ?'. PHP_EOL;
}
else {
    printf('Mot choisi : %s', $resultAux);
    printf('Mot à deviner : %s'.PHP_EOL, $array[$answerAux]);
    if($resultAux === $array[$answerAux])
    {
        echo 'Bravo, vous avez gagné !'. PHP_EOL;
    }
    else {
        echo 'Perdu ! (bon ca craint moins car on ne peut connaitre la réponse à l\'avance )'. PHP_EOL;
    }
}


/*
 *
 *
 */


?>

