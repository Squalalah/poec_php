<?php

$wordChoice = null;

if(isset($_POST['proposition']))
{
    $wordChoice = $_POST['proposition'];
    if(strlen($wordChoice) > 1 && !is_numeric($wordChoice)) {
        $wordArray = str_split($_POST['proposition']);
        if($wordArray == array_reverse($wordArray)) echo 'Ce mot est bien un palindrome'. PHP_EOL;
        else echo 'Ce mot n\'est pas un palindrome'. PHP_EOL;
    }
    else echo 'Merci d\'entrer un vrai mot'. PHP_EOL;
}
?>