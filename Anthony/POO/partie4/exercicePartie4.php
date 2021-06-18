<?php
//Exercice 1
//Question 1 : Car on stocke un individu en tant qu'auteur dans "Livre.php"

//Question 2
/*
require_once('modele/Livre.php');
$individu = new Individu('Hawking','Stephen','');
$livre = new Livre(162,7,'Petite Histoire de l\'Univers', $individu);
echo $livre->infosLivre().PHP_EOL;*/

//Exercice 2
/*require_once('modele/Voiture.php');
$Individu = new Individu('Montreuil', 'Anthony');
$Voiture = new Voiture(456,'ABV123', 'BMW', 'Bleu', 1990, $Individu);
echo $Voiture->getInfos().PHP_EOL;
*/

//Exercice 3
/*
require_once("modele/Intervenant.php");
require_once("modele/Mission.php");
require_once("modele/Projet.php");
$am= new Intervenant("Martineau",888.80);
$gb= new Intervenant("Block",2.18);
$mission=new Mission("Prog objet","C'est un truc de fou",35,$am);
$mission->ajoutReleve("10/12/2015",3);
$mission->ajoutReleve("11/12/2015",20);
$mission->ajoutReleve("12/12/2015",18);
$mission2=new Mission("Javascript","C'est un truc de fou",35,$gb);
$mission2->ajoutReleve("15/12/2015",30);
$mission2->ajoutReleve("16/12/2015",18);
$mission2->ajoutReleve("17/12/2015",12);
$tabMissions=array($mission,$mission2);
$formationDl=new Projet("Formation DL","5/12/2015","20/12/2015",3,$tabMissions);
echo "La marge brute courante du projet est de :".$formationDl->margeBruteCourante()."€";
*/

require_once("modele/Plan.php");
require_once("modele/Etalage.php");
require_once("modele/Terrasse.php");
$terrasseA=new Terrasse("blanche",12,24);
// affiche la terrasse A et ses informations
echo "Les informations de la terrasse A sont : ".$terrasseA->affiche().PHP_EOL;
$terrasseB=new Terrasse("jaune",8,204);
$terrasseC=new Terrasse("rouge",102,4);
$etalageA=new Etalage("blanche",120,204); // affiche l'etalage A et ses informations
echo "Les informations de l'&eacute;talage A sont : ".$etalageA->affiche().PHP_EOL;
$etalageB=new Etalage("violet",126,241);
$etalageC=new Etalage("bleu",812,214);
$plan=new plan("monPlan");
$plan->ajouteEmplacement($terrasseA);
$plan->ajouteEmplacement($terrasseB);
$plan->ajouteEmplacement($terrasseC);
$plan->ajouteEmplacement($etalageA);
$plan->ajouteEmplacement($etalageB);
$plan->ajouteEmplacement($etalageC);
$plan->supprimeEmplacement($etalageA);
echo $plan->affiche().PHP_EOL;
