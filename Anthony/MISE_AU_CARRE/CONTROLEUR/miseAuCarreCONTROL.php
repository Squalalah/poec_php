<?php
session_start();
if(isset($_POST['destroy'])) {
    session_destroy();
}

if(isset($_POST['proposition'])) {
    $number = $_POST['proposition'];
    if(is_numeric($number))
    {
        $number = strval($number);
        echo nl2br('Valeur saisie : '.$number);
        echo nl2br('Valeur saisie au carré : '. $number*$number);

    }
    else echo nl2br('Merci d\'entrer une vraie valeur').PHP_EOL;
}