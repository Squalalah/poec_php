<html>
<head>

</head>


<body>

<form action="#" method="POST">
    <label for="proposition">Votre proposition:</label><br>
    <input type="text" id="proposition" name="proposition" value="lettres/mots"><br>
    <input type="submit" value="Submit">
    <input type="submit" value="Destroy Session" name="destroy" value="destroy">
</form>

</body>

</html>


<?php
session_start();


if(isset($_POST['destroy']))
{
    session_destroy();
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

echo nl2br('Bon allez, on retente mais en plus dur'.PHP_EOL);
$fileContent = file_get_contents('mots.txt');
$array = explode(',', $fileContent);

if(!isset($_SESSION['chance']))
    {
        $chance = 5;
        $_SESSION['chance'] = $chance;
    }
else $chance = $_SESSION['chance'];

if(!isset($_SESSION['answerAux'])) {
    $answerAux = $array[array_rand( $array, 1)];
    echo nl2br("answerAux NON SET". PHP_EOL);
    $_SESSION['answerAux'] = $answerAux;
}
else {
    $answerAux = $_SESSION['answerAux'];
    echo nl2br('answerAux SET'. PHP_EOL);
}

if(!isset($_SESSION['arrayLastLetters'])) {
    $arrayLastLetters = str_split($answerAux);
    $_SESSION['arrayLastLetters'] = $arrayLastLetters;
}
else $arrayLastLetters = $_SESSION['arrayLastLetters'];

$stringReponseFound= [];
if(!isset($_SESSION['lettersAlreadyUsed'])) {
    $lettersAlreadyUsed = '';
    $_SESSION['lettersAlreadyUsed'] = $lettersAlreadyUsed;
}
else $lettersAlreadyUsed = $_SESSION['lettersAlreadyUsed'];

if(!isset($_SESSION['stringReponseFound'])) {
    for ($i=0; $i<strlen($answerAux); $i++)
    {
        array_push($stringReponseFound, '_');
    }
    $_SESSION['stringReponseFound'] = $stringReponseFound;
} else $stringReponseFound = $_SESSION['stringReponseFound'];

/*
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
}*/

if(isset($_POST['proposition']) && $chance > 0)
{
        echo nl2br("Veuillez saisir le mot à trouver". PHP_EOL);
        //$resultAux = trim(fgets($handleAux));
        $resultAux = $_POST['proposition'];
        $isWord = false;
        $try = false;
        if (strlen($resultAux) > 1) $isWord = true;
        if (!preg_match("/[A-Za-z0-9]+/", $resultAux)) {
            echo nl2br('Merci d\'entrer une vraie valeur (a-z, A-Z)');
            return;
        }
        if ($resultAux === $answerAux) {
            $found = true;
            $try = true;
        } elseif (!$isWord) {
            $position = array_search($resultAux, $arrayLastLetters);
            if (array_search($resultAux, $stringReponseFound) !== false) {
                echo nl2br('Vous avez déjà proposé cette lettre');
                return;
            }
            if (strpos($lettersAlreadyUsed, $resultAux) === false) {
                $lettersAlreadyUsed .= $resultAux;
            }
            while ($position !== false) {
                $try = true;
                $stringReponseFound[$position] = $resultAux;
                unset($arrayLastLetters[$position]);
                echo nl2br('Vous avez trouvé une lettre');
                $position = array_search($resultAux, $arrayLastLetters);
            }
            if (implode($stringReponseFound) == $answerAux) {
                $found = true;
            }
        }
        if (!$try) {
            $chance--;
            echo nl2br('Vous n\'avez pas reussit à trouver de mots/lettres, reessayez !');
        }
        if ($found) {
            echo nl2br('Vous avez gagné, la réponse était bien ' . $answerAux . PHP_EOL);
        }

        echo nl2br('Reponse à trouver : ' . $answerAux . PHP_EOL);
        echo nl2br('Votre proposition : ' . $resultAux . PHP_EOL);
        echo nl2br('toutes les lettres tentés ' . $lettersAlreadyUsed . PHP_EOL);
        echo nl2br('Vos lettres déjà trouvés : ' . implode($stringReponseFound));
        $_SESSION['chance'] = $chance;
        if($chance == 0) echo nl2br('VOUS AVEZ PERDU LOLO');
        $_SESSION['lettersAlreadyUsed'] = $lettersAlreadyUsed;
        $_SESSION['stringReponseFound'] = $stringReponseFound;
        $_SESSION['arrayLastLetters'] = $arrayLastLetters;
}



/*
 *
 *
 */


?>

