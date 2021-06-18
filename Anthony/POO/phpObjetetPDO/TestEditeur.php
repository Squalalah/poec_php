<?php
require_once("classes/dto/DTOauteur.php");
//recuperation des individus de la base de données
$lesAuteursDansLaBD=DTOAuteur::selectAll();
echo "---------------------------------------------------------------<br>";
foreach($lesAuteursDansLaBD as $aut)
{
echo $aut->getInfos()."<br>";
}
$maFille=DTOAuteur::selectById(2);
echo "Ma fille est :".$maFille->getInfos()."<br>";


$am =new Editeur("Martineau","Aurelien");
DTOAuteur::insert($am);
echo $am->getInfos()."<br>";

$am->setPrenomAuteur("Aurélien");
DTOAuteur::update($am);
$lesAuteursDansLaBD[] = $am;
echo "---------------------------------------------------------------<br>";
foreach($lesAuteursDansLaBD as $aut)
{
echo $aut->getInfos()."<br>";
}
DTOAuteur::delete($am);
if (($key = array_search($am, $lesAuteursDansLaBD)) !== false) {
    unset($lesAuteursDansLaBD[$key]);
}
echo "---------------------------------------------------------------<br>";
foreach($lesAuteursDansLaBD as $aut)
{
echo $aut->getInfos()."<br>";
}
?>

