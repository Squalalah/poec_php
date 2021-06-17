<?php
//require 'modele/bo/charge.php';
class DTOSpecimen extends Bd implements DTO{
public function __construct()
{

}
public function update($data)
{
  $req="UPDATE `lithotherapie`.`specimen` SET `splongueur` = ?, `splargeur` = ?, `sphauteur` = ?, `sppoids` = ?, `spcommentaire` = ?, `spurlimage` = ?, `giid` = ?, `midid` = ? WHERE `specimen`.`spid` = ?";
	$param[]=$data->getSplongueur();
	$param[]=$data->getSplargeur();
	$param[]=$data->getSphauteur();
	$param[]=$data->getSppoids();
	$param[]=$data->getSpcommentaire();
	$param[]=$data->getSpurlimage();
	$param[]=$data->getLeGite();
	$param[]=$data->getMineral();
  $param[]=$data->getSpid();
return parent::executerRequete($req, $param);
}
public function insert($data)
{
  $req="INSERT INTO `lithotherapie`.`specimen` (`spid`, `splongueur`, `splargeur`, `sphauteur`, `sppoids`, `spcommentaire`, `spurlimage`, `giid`, `midid`)"
  ." VALUES ('', ?, ?, ?, ?, ?, ?, ?, ?)";
  $param[]=$data->getSplongueur();
	$param[]=$data->getSplargeur();
	$param[]=$data->getSphauteur();
	$param[]=$data->getSppoids();
	$param[]=$data->getSpcommentaire();
	$param[]=$data->getSpurlimage();
	$param[]=$data->getLeGite();
	$param[]=$data->getmineral();
return parent::executerRequete($req, $param);
}
public function delete($data)
{
  $req="delete from specimen where spid=?";
  $param[]=$data->getSpid();
  return parent::executerRequete($req, $param);
}
public function selectById($id)
{
  $req="select * from specimen where spid=?";
  $param[]=$id;
  $res=parent::executerRequete($req,$param);
  $leSpecimen="non trouvé";
  foreach($res as $ligne)
  {
    $leSpecimen=new Specimen($ligne[0],$ligne[1],$ligne[2],$ligne[3],$ligne[4],$ligne[5],$ligne[6],$ligne[7],$ligne[8]);
  }
  return $leSpecimen;
}
public function selectAll()
{
$req="select * from specimen";

  $res=parent::executerRequete($req);
  foreach($res as $ligne)
  {
    $mesSpecimens[]=new Specimen($ligne[0],$ligne[1],$ligne[2],$ligne[3],$ligne[4],$ligne[5],$ligne[6],$ligne[7],$ligne[8]);
  }
return $mesSpecimens;
}
public function selectByMidid($id)
{
  $req="select * from specimen where midid=?";
  $param[]=$id;
  $res=parent::executerRequete($req,$param);
  foreach($res as $ligne)
  {
    $mesSpecimens[]=new Specimen($ligne[0],$ligne[1],$ligne[2],$ligne[3],$ligne[4],$ligne[5],$ligne[6],$ligne[7],$ligne[8]);
  }
if (!isset($mesSpecimens)){$mesSpecimens="";}
return $mesSpecimens;
}
}
