<?php

// EXERCICE 1
require_once('classes/exercice1-3Model.php');
$livre1 = new Livre(356,13,'Cendrillon et la mort des &eacute;toiles');
echo $livre1->infosLivre().PHP_EOL; // utilisation de l'objet $livre1


// manque deux commentaires dans la fonction
$livre2 = new Livre(400, 8, 'Une merveilleuse histoire du temps');

// EXERCICE 2
$char1 = new Individu('Montreuil', 'Anthony');
$char2 = new Individu('Zigman', 'Aurélia');
$char3 = new Individu('Nguyen', 'Vincent');

// EXERCICE 3
$formation = new TFormation(1, "2/12/2015", "3/12/2015", 14, "Modèle Objet", "BAC+4", 12371528, "Alternance");
$formation2 = new TFormation(2,'4/12/2015','10/12/2015',70,'Modèle Objet','Bac +2',12323417,'Initial');
echo $formation->infosTFormation().PHP_EOL;
echo $formation2->infosTFormation().PHP_EOL;
