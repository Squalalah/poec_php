<?php


echo 'Bienvenue dans le jeu du palindrome'. PHP_EOL;
$file = fopen('php://stdin', 'r');
$wordChoice = null;
while(1 < 2)
{
    echo 'Veuillez écrire un mot à tester'. PHP_EOL;
    $wordChoice = trim(fgets($file));
    if(strlen($wordChoice) > 1) break;
    echo 'Merci d\'entrer un vrai mot'. PHP_EOL;
}

$wordArray = str_split($wordChoice);
if($wordArray == array_reverse($wordArray)) echo 'Ce mot est bien un palindrome'. PHP_EOL;
else echo 'Ce mot n\'est pas un palindrome'. PHP_EOL;

?>