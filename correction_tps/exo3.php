<?php

// --- Methode "bas niveau" pour recuperer une saisie de l'utilisateur.
echo 'Merci de saisir une phrase (de moins de 30 caracteres) : ';
// fopen(<protocole>://<chemin-de-la-ressource>, <mode-d'ouverture>);
$input = fopen('php://stdin', 'r');
// Recuperation d'une valeur (file-get-string).
$phrase = fgets($input);
// On doit toujours fermer l'accès à une ressource extérieur.
fclose($input);

// --- Dans notre cas, on peut se contenter de readline.
// $phrase = readline('Merci de saisir une phrase (de moins de 30 caracteres) : ');

$taillePhrase = mb_strlen($phrase);

if ($taillePhrase > 30) { // Si la phrase est trop longue
    echo 'La phrase saisie est trop grande'.PHP_EOL;
} else {
    echo 'Merci pour votre saisie'.PHP_EOL;
}
