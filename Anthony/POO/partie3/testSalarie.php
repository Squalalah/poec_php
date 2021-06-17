<?php
//header("Content-Type: text/html; charset=UTF-8");
require_once("classes/Individu.php");
require_once("classes/Salarie.php");
// --- Instantiation d'un objet et utilisation
$am = new Individu("Martineau","Aurélien");
echo "Cet individu est ".$am->getNom()." ".$am->getPrenom().PHP_EOL;
$nm = new Salarie("Martineau","Noémie",78000);
echo "Cet individu est ".$nm->getNom()." ".$nm->getPrenom()." et gagne ".$nm->getSalaire()." euros".PHP_EOL;