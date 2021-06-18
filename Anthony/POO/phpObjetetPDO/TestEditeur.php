<?php
require_once("classes/dto/DTOediteur.php");
//recuperation des individus de la base de données
$lesEditeursDansLaBD=DTOEditeur::selectAll();
echo "---------------------------------------------------------------<br>";
foreach($lesEditeursDansLaBD as $edit)
{
echo $edit->getInfos()."<br>";
}
$maFille=DTOEditeur::selectById(2);
echo "Ma fille est :".$maFille->getInfos()."<br>";


$am =new Editeur("Richer");
DTOEditeur::insert($am);
echo $am->getInfos()."<br>";

$am->setNomEditeur("Larousse");
DTOEditeur::update($am);
$lesEditeursDansLaBD[] = $am;
echo "---------------------------------------------------------------<br>";
foreach($lesEditeursDansLaBD as $edit)
{
echo $edit->getInfos()."<br>";
}
DTOEditeur::delete($am);
if (($key = array_search($am, $lesEditeursDansLaBD)) !== false) {
    unset($lesEditeursDansLaBD[$key]);
}
echo "---------------------------------------------------------------<br>";
foreach($lesEditeursDansLaBD as $edit)
{
echo $edit->getInfos()."<br>";
}
?>

