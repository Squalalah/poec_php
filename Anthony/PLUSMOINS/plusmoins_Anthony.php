<?php

$answer = rand(0, 100);
$file = fopen('php://stdin', 'r');
$numberChoice = null;
$foundAnswer = false;
echo 'Bienvenue au jeu du plus ou moins'. PHP_EOL;
echo '(Bon on va tricher, voici la réponse : ' . $answer . ')'. PHP_EOL;

while(!$foundAnswer)
{
    echo 'Veuillez choisir un nombre'. PHP_EOL;
    $numberChoice = trim(fgets($file));
    if(!is_numeric($numberChoice) || !in_array($numberChoice, range(1,100)))
    {
        echo 'Merci d\'entrer une valeure correcte entre 1 et 100'. PHP_EOL;
        continue;
    }

    switch($numberChoice <=> $answer)
    {
        case 0: {
            echo 'Bravo, vous avez trouvé';
            $foundAnswer = true;
            break;
        }
        case -1: {
            echo 'Pas bon, le nombre à trouver est supérieur au votre'. PHP_EOL;
            break;
        }
        case 1: {
            echo 'Pas bon, le nombre à trouver est inférieur au votre'. PHP_EOL;
        }
    }

}
?>