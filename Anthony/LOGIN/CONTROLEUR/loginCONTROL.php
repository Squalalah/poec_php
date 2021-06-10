<?php

$emailtest = 'salut@bonjour.fr';
$passwordtest = 'salut';

if(isset($_POST['email']) && isset($_POST['password']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $recover = file_get_contents('pass.txt');
    $data = explode(',', $recover);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo nl2br('Merci entrer une adresse mail valide.'). PHP_EOL;
    }
    else
    {
        $searchMail = array_search($email, $data);
        $searchPswd = array_search($password, $data);
        if($searchMail === false || $searchPswd === false) {
            echo nl2br('Identifiants incorrectes') . PHP_EOL;
        }
        else {
            echo 'soustraction';
            if($searchPswd-$searchMail !== 1) echo nl2br('Identifiants incorrectes') . PHP_EOL;
            else echo nl2br('Vous êtes connecté !') . PHP_EOL;
            header("Location: ../VUE/success.php", TRUE, 301);
        }
    }
}

if(isset($_POST['emailAdd']) && isset($_POST['passwordAdd']))
{
    $emailAdd = $_POST['emailAdd'];
    $passwordAdd = $_POST['passwordAdd'];
    if (!filter_var($emailAdd, FILTER_VALIDATE_EMAIL)) {
        echo nl2br('Merci entrer une adresse mail valide.'). PHP_EOL;
    }
    else {
        $recover = file_get_contents('pass.txt');
        $data = explode(',', $recover);
        file_put_contents('pass.txt', $emailAdd.','.$passwordAdd.',',  FILE_APPEND);
    }
}



?>
