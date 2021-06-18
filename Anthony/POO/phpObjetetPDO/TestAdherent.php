<?php
require_once("classes/dto/DTOadherent.php");
//recuperation des individus de la base de données
$lesAdherentsDansLaBD=DTOAdherent::selectAll();
echo "---------------------------------------------------------------<br>";
foreach($lesAdherentsDansLaBD as $adh)
{
    echo $adh->getInfos()."<br>";
}
$maFille=DTOAdherent::selectById(2);
echo "Ma fille est :".$maFille->getInfos()."<br>";


$am =new Adherent("Montreuil", "Anthony", "5 avenue des charmes", "49124", "Angers", "0101010101");
DTOAdherent::insert($am);
echo $am->getInfos()."<br>";

$am->setNomAdherent("Yolosse");
$am->setTelAdherent("0606060606");
DTOAdherent::update($am);
$lesAdherentsDansLaBD[] = $am;
echo "---------------------------------------------------------------<br>";
foreach($lesAdherentsDansLaBD as $adh)
{
echo $adh->getInfos()."<br>";
}
DTOAdherent::delete($am);
if (($key = array_search($am, $lesAdherentsDansLaBD)) !== false) {
    unset($lesAdherentsDansLaBD[$key]);
}
echo "---------------------------------------------------------------<br>";
foreach($lesAdherentsDansLaBD as $adh)
{
echo $adh->getInfos()."<br>";
}
?>

