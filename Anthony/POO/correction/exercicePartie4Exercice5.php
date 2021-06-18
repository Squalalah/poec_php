<?php
require_once("modele/Etape.php");
require_once("modele/PlanningJournee.php");
require_once("modele/MiniExcursionPlanifiee.php");
require_once("modele/MiniExcursion.php");
require_once("modele/MiniExcursionPayante.php");

/*
 *
 * Ceci est un C/C du test unitaire d'Aurelien
 *
 */

$testDuneEtapeSeule=new Etape("Le chemin du PHP",128);

echo "L'étape ".$testDuneEtapeSeule->getDescription()." a une durée égale à ; ".$testDuneEtapeSeule->donneDureePrevueHHMM();
$maMiniExc=new MiniExcursion("le parcours PHP objet", 15,[new Etape("Le chemin du Auteur: Aurélien MARTINEAUPage 10/14PHP",128),new Etape("Le sentier objet",112),new Etape("Le ravin UML",28)]);
echo "<br/>";
echo "La mini excursion nommée ".$maMiniExc->getLibelleMiniExcursion()." a une durée égale à ".$maMiniExc->donneDureePrevueHHMM();
$maMiniExcPay=new MiniExcursionPayante("le parcours PHP objet extraordinaire", 15,[new Etape("Le chemin du PHP tres beau",30),new Etape("Le merveilleux sentier objet",30),new Etape("Le canyon UML ",30)],1240);
echo "<br/>";
echo "La mini excursion payante nommée ".$maMiniExcPay->getLibelleMiniExcursion()."a une durée égale à ".$maMiniExcPay->donneDureePrevueHHMM(). " et coute: ".$maMiniExcPay->getTarif()." euros";
$maMiniExcPlanifA=new MiniExcursionPlanifiee("8h15",15,$maMiniExcPay);
echo "<br/>";
if ($maMiniExcPlanifA->estComplete()==true)
{
    echo "La mini excursion planifiee est complète";
}
else
{
    echo "Il reste des places pour la mini excursion planifiee";
}
$maMiniExcPlanifB=new MiniExcursionPlanifiee("8h15",14,$maMiniExc);
$monPlanningJournee=new PlanningJournee(date("d/m/y"),[$maMiniExcPlanifA,$maMiniExcPlanifB]);
echo "<br/>";
echo "Le planning de la journee :".$monPlanningJournee->getDate()." aura pour excursion(s):";
echo "<ul>";
/* @var $miniExc MiniExcursionPlanifiee */
foreach($monPlanningJournee->getLesMiniExcursionsPlanifiees() as $miniExc) {
    echo"<li>".$miniExc->getExcursion()->getLibelleMiniExcursion()." a une duree egale a ".$miniExc->getExcursion()->donneDureePrevueHHMM()."</li>";
}
echo "</ul>";