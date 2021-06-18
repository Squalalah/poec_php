<?php
require_once("classes/DTOIndividu.php");
//recuperation des individus de la base de données
$lesGensDansLaBD=DTOIndividu::selectAll();
echo "---------------------------------------------------------------<br>";
foreach($lesGensDansLaBD as $pers)
{
echo $pers->getInfos()."<br>";
}
$maFille=DTOIndividu::selectById(2);
echo "Ma fille est :".$maFille->getInfos()."<br>";


$am =new Individu("Martineau","Aurelien");
DTOIndividu::insert($am);
echo $am->getInfos()."<br>";

$am->setPrenom("Aurélien");
DTOIndividu::update($am);
echo "---------------------------------------------------------------<br>";
foreach($lesGensDansLaBD as $pers)
{
echo $pers->getInfos()."<br>";
}
DTOIndividu::delete($am); 
echo "---------------------------------------------------------------<br>";
foreach($lesGensDansLaBD as $pers)
{
echo $pers->getInfos()."<br>";
}
?>

