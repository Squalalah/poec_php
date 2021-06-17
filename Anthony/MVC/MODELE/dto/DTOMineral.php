<?php
//require 'modele/bo/charge.php';
class DTOMineral extends Bd implements DTO{
public function __construct()
{

}
public function update($data)
{
  $req="UPDATE `lithotherapie`.`mineral` SET `minom` = ?, `miduretedeb` = ?, `miduretefin` = ?, `midensitedeb` = ?, `midensitefin` = ?, `miclivage` = ?, `micassure` = ?, `mitrace` = ?, `mieclat` = ?, `micompositionchimique` = ?, `syid` = ?, `grid` = ? WHERE `mineral`.`midid` = ?";
  $param[]=$data->getMinom();
  $param[]=$data->getMiduretedeb();
  $param[]=$data->getMiduretefin();
  $param[]=$data->getMidensitedeb();
  $param[]=$data->getMidensitefin();
  $param[]=$data->getMiclivage();
  $param[]=$data->getMicassure();
  $param[]=$data->getMitrace();
  $param[]=$data->getMieclat();
  $param[]=$data->getMicompositionchimique();
  $param[]=$data->getLeSysCris()->getSyid();
  $param[]=$data->getLeGite()->getGiid();
  $param[]=$data->getMidid();
return parent::executerRequete($req, $param);
}
public function insert($data)
{
  $req="INSERT INTO `lithotherapie`.`mineral` (`midid`, `minom`, `miduretedeb`, `miduretefin`, `midensitedeb`, `midensitefin`, `miclivage`, `micassure`, `mitrace`, `mieclat`, `micompositionchimique`, `syid`, `grid`)"
  ." VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$param[]=$data->getMinom();
$param[]=$data->getMiduretedeb();
$param[]=$data->getMiduretefin();
$param[]=$data->getMidensitedeb();
$param[]=$data->getMidensitefin();
$param[]=$data->getMiclivage();
$param[]=$data->getMicassure();
$param[]=$data->getMitrace();
$param[]=$data->getMieclat();
$param[]=$data->getMicompositionchimique();
$param[]=$data->getLeSysCris()->getSyid();
$param[]=$data->getLeGite()->getGiid();
return parent::executerRequete($req, $param);
}
public function delete($data)
{
  $req="delete from mineral where midid=?";
  if (is_numeric($data)){
      $param[]=$data;
  }
  else {
      $param[]=$data->getMidid();
  }

  return parent::executerRequete($req, $param);
}
public function selectById($id)
{
  $req="select * from mineral where midid=?";
  $param[]=$id;
  $res=parent::executerRequete($req,$param);
  foreach($res as $ligne)
  {
    $bdSys= new DTOSystemeCristallin();
    $leSystemeCristallin=$bdSys->selectById($ligne[11]);
    $bdGrp= new DTOGroupe();
    $leGroupe=$bdGrp->selectById($ligne[12]);
    $leMineral=new Mineral($ligne[0],$ligne[1],$ligne[2],$ligne[3],$ligne[4],$ligne[5],$ligne[6],$ligne[7],$ligne[8],$ligne[9],$ligne[10],$leSystemeCristallin,$leGroupe);
  }
if(!isset($leMineral)){$leMineral="";}
  return $leMineral;
}
public function selectAll()
{
$req="select * from mineral";

  $res=parent::executerRequete($req);
  foreach($res as $ligne)
  {
    $bdSys= new DTOSystemeCristallin();
    $leSystemeCristallin=$bdSys->selectById($ligne[11]);
    $bdGrp= new DTOGroupe();
    $leGroupe=$bdGrp->selectById($ligne[12]);
    $mesMineraux[]=new Mineral($ligne[0],$ligne[1],$ligne[2],$ligne[3],$ligne[4],$ligne[5],$ligne[6],$ligne[7],$ligne[8],$ligne[9],$ligne[10],$leSystemeCristallin,$leGroupe);
  }
return $mesMineraux;
}
}
