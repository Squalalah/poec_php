<?php

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
$fileContent = file_get_contents('mots.txt');
$array = explode(',', $fileContent);
$chance = 5;
$answerAux = $array[array_rand( $array, 1)];
$arrayLastLetters = str_split($answerAux);
$stringReponseFound= [];
$letttersAlreadyUsed = '';

for ($i=0; $i<strlen($answerAux); $i++)
{
    array_push($stringReponseFound, '_');
}
$found = false;
$handleAux = fopen('php://stdin', 'r');
echo 'Voulez vous ajouter un mot au fichier ? y pour oui';
$fileChoice = trim(fgets($handleAux));

if($fileChoice == 'y')
{
    $stop = false;
    echo 'Quel mot voulez vous ajouter ? STOP pour arrêter'. PHP_EOL;
    $wordChoice = trim(fgets($handleAux));
    while(!$stop)
    {
        if(!preg_match("/[A-Za-z0-9]+/", $wordChoice))
        {
            echo 'Merci d\'entrer un mot valide';
            continue;
        }
        file_put_contents('mots.txt', ','.$wordChoice, FILE_APPEND);
        echo 'Fichier ajouté, voulez vous continuer ? STOP pour arrêter';
        $wordChoice = trim(fgets($handleAux));
        if($wordChoice == "STOP") $stop = true;

    }
}



while(!$found)
{
    echo "Veuillez saisir le mot à trouver";
    $resultAux = trim(fgets($handleAux));
    $isWord = false;
    $try = false;
    if(strlen($resultAux) > 1) $isWord = true;
    if(!preg_match("/[A-Za-z0-9]+/", $resultAux))
    {
        echo 'Merci d\'entrer une vraie valeur (a-z, A-Z)';
        continue;
    }
    if($resultAux === $answerAux) {
        $found = true;
        $try = true;
    }
    elseif(!$isWord)  {
        $position = array_search($resultAux, $arrayLastLetters);
        if(array_search($resultAux, $stringReponseFound) !== false)
        {
            echo 'Vous avez déjà proposé cette lettre';
            continue;
        }
        if(strpos($letttersAlreadyUsed, $resultAux) === false)
        {
            $letttersAlreadyUsed .= $resultAux;
        }
        while($position !== false) {
            $try = true;
            $stringReponseFound[$position] = $resultAux;
            unset($arrayLastLetters[$position]);
            echo 'Vous avez trouvé une lettre';
            $position = array_search($resultAux, $arrayLastLetters);
        }
        if(implode($stringReponseFound) == $answerAux)
        {
            $found = true;
        }
    }
    if(!$try){
    $chance--;
    echo 'Vous n\'avez pas reussit à trouver de mots/lettres, reessayez !';
    }
    if($found) {
        echo 'Vous avez gagné, la réponse était bien '. $answerAux . PHP_EOL;
    }
    echo 'Reponse à trouver : '. $answerAux. PHP_EOL;
    echo 'Votre proposition : '. $resultAux. PHP_EOL;
    echo 'toutes les lettres tentés ' . $letttersAlreadyUsed. PHP_EOL;
    echo 'Vos lettres déjà trouvés : '. implode($stringReponseFound);
}



/*
 *
 *
 */


?>

