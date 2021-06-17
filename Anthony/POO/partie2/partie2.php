<?php
require_once("Livre.php");
require_once("Individu.php");
require_once("Voiture.php");
$livre1 = new Livre(356,13,'Cendrillon et la mort des &eacute;toiles');
echo $livre1->infosLivre()."<br/>".PHP_EOL;
$livre1->setNbrePages(12);
echo 'le livre 1 a maintenant:'.$livre1->getNbrePages().' pages'.PHP_EOL;

$livre2 = new Livre(200, 15, 'Pas de titre');
$livre2->setTitreLivre('Une merveilleuse histoire du temps');
echo $livre2->getTitreLivre().PHP_EOL;
$livre2->setNbreChapitres(8);
echo $livre2->getNbreChapitres().PHP_EOL;
$livre2->setNbrePages(230);
echo $livre2->getTitreLivre(). " | " . $livre2->getNbrePages() . " | " . $livre2->getNbreChapitres().PHP_EOL;

$char = new Individu("Montreuil", "Anthony");
$char = null;


$voiture = new Voiture("Ford", "C-max", 2006, 154200, 'Diesel',  'Manuelle', 'Bleu');
$voiture2 = new Voiture('Renault', 'Espace', 1999, 309700, 'Diesel', 'Manuelle', 'Vert');
$voiture3 = new Voiture('Citroën', 'C5', 2012, 25000, 'Diesel', 'Automatique');

echo $voiture->getInfos().PHP_EOL;
echo $voiture2->getInfos().PHP_EOL;
echo $voiture3->getInfos().PHP_EOL;
