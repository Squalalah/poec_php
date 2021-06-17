<?php
require_once('classes/Formateur.php');
require_once('classes/Stagiaire.php');

$formateur = new Formateur("Montreuil", "Anthony", "0101010101", 0110, "01/01/1000");
$stagiaire = new Stagiaire('NOM', 'Gaetant', '0606060606', '11/10/1993', 'Sur nantes', 49100, 'Angers');
echo $formateur->infos().PHP_EOL;
echo '------------------------------------------------------'.PHP_EOL;
echo $stagiaire->infos().PHP_EOL;
echo '------------------------------------------------------'.PHP_EOL;