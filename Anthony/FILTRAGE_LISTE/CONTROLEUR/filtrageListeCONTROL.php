<?php
$tableau = array();
$order = false;
$tabResult = array();
if(isset($_SESSION['tabResult'])) $tabResult = $_SESSION['tabResult'];
if(!isset($_SESSION['order']))
{
    $_SESSION['order'] = false;
} else $order = $_SESSION['order'];

$file = fopen("mots.txt", "r");
if ($file) {
    while (($line = fgets($file)) !== false) {
        array_push($tableau, $line);
    }
    fclose($file);
} else {
    echo 'ERREUR lors de l\'ouverture du fichier';
}

session_start();
if(isset($_POST['destroy'])) {
    session_destroy();
}

if(isset($_POST['submitForm']) && isset($_POST['proposition'])) {
    $name = $_POST['proposition'];
    $tabResult = array();
    $count = 0;
    foreach($tableau as $value)
    {
        if(stripos($value, $name) !== false)
        {
            array_push($tabResult, $value);
        }
    }
    if(count($tabResult) > 0)
    {
        $_SESSION['tabResult'] = $tabResult;
        echo nl2br('Voici la liste des Films/Romans trouvés selon votre recherche : '.PHP_EOL);
        foreach($tabResult as $value)
        {
            echo nl2br($value.PHP_EOL);
        }
    }
    else echo nl2br('Aucun film/roman n\a été trouvé.'.PHP_EOL);
}
else if(isset($_POST['submitAsc']))
{
    $tabResult = $_SESSION['tabResult'];
    $order = $_SESSION['order'];
    echo 'count de tabresult : ' . count($tabResult);
    if(count($tabResult) > 0)
    {
        echo nl2br('Voici la liste des Films/Romans trouvés selon votre recherche : '.PHP_EOL);
        if($order === false) sort($tabResult);
        else rsort($tabResult);
        $order = !$order;
        foreach($tabResult as $value)
        {
            echo nl2br($value.PHP_EOL);
        }
        $_SESSION['order'] = $order;
        $_SESSION['tabResult'] = $tabResult;
    }

}
else if(isset($_POST['submitAdd']))
{
    $fileO = fopen("mots.txt", 'a');
    if($fileO)
    {
        if(strlen($_POST['wordAdd']) > 1)
        {
            fwrite($fileO, $_POST['wordAdd'].PHP_EOL);
            fclose($fileO);
            echo nl2br('Le mot '. $_POST['wordAdd']. ' a été ajouté avec succès');
        }
        else echo nl2br('Merci d\'entrer un vrai nom');

    }
    else echo nl2br('ERREUR lors de l\'ouverture du fichier.');
}
