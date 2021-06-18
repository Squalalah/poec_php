<?php
require_once('modele/IFormatage.php');
require_once('modele/VilleIF.php');
require_once('modele/PersonneIF.php');

$ville = new VilleIF(49000, "YoLoLSeE");
$personne = new PersonneIF('BoNjoUr', '12/12/1222', 4949.90);

echo $ville->getInfos().PHP_EOL;
echo $personne->getInfos().PHP_EOL;