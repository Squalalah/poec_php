<?php
require_once("modele/Etape.php");
require_once("modele/PlanningJournee.php");
require_once("modele/MiniExcursionPlanifiee.php");
require_once("modele/MiniExcursion.php");
require_once("modele/MiniExcursionPayante.php");
$testDuneEtapeSeule=new Etape("Le chemin du PHP",128);
echo "L'&eacute;tape nomm&eacute;e ".$testDuneEtapeSeule->getDescription()." a une dur&eacute;e &eacute;gale &agrave; ".$testDuneEtapeSeule->donneDureePrevueHHMM();
$maMiniExc=new MiniExcursion("le parcours PHP objet", 15,[new Etape("Le chemin du Auteur: Aurélien MARTINEAUPage 10/14PHP",128),new Etape("Le sentier objet",112),new Etape("Le ravin UML",28)]);
echo "<br/>";
echo "La mini excursion nomm&eacute;e ".$maMiniExc->getLibelleMiniExcursion()." a une dur&eacute;e &eacute;gale &agrave; ".$maMiniExc->donneDureePrevueHHMM();
$maMiniExcPay=new MiniExcursionPayante("le parcours PHP objet extraordinaire", 15,[new Etape("Le chemin du PHP tres beau",30),new Etape("Le merveilleux sentier objet",30),new Etape("Le canyon UML ",30)],1240);
echo "<br/>";
echo "La mini excursion payante nomm&eacute;e ".$maMiniExcPay->getLibelleMiniExcursion()."a une dur&eacute;e &eacute;gale &agrave; ".$maMiniExcPay->donneDureePrevueHHMM(). " et coute: ".$maMiniExcPay->getTarif()." euros";
$maMiniExcPlanifA=new MiniExcursionPlanifiee("8h15",15,$maMiniExcPay);
echo "<br/>";
if ($maMiniExcPlanifA->estComplete()==true)
{
    echo "La mini excursion planifiee est compl&egrave;te";
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
echo count($monPlanningJournee->getLesMiniExcursionsPlanifiees());
/* @var $miniExc MiniExcursionPlanifiee */
foreach($monPlanningJournee->getLesMiniExcursionsPlanifiees() as $miniExc) {
    echo"<li>".$miniExc->getExcursion()->getLibelleMiniExcursion()." a une duree egale a ".$miniExc->getExcursion()->donneDureePrevueHHMM()."</li>";
}
echo "</ul>";