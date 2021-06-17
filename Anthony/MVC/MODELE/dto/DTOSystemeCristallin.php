<?php
//require 'modele/bo/charge.php';
class DTOSystemeCristallin extends Bd implements DTO{
public function __construct()
{

}
public function update($data)
{
  $req="UPDATE `lithotherapie`.`systeme_cristallin` SET `synom` = ?, `syaxea1` = ?, `syaxea2` = ?, `syaxea3` = ?, `syanglealpha` = ?, `syanglebeta` = ?, `syanglegamma` = ?, `image` = ? WHERE `systeme_cristallin`.`syid` = ?";
	$param[]=$data->getSynom();
	$param[]=$data->getSyaxea1();
	$param[]=$data->getSyaxea2();
	$param[]=$data->getSyaxea3();
	$param[]=$data->getSyanglealpha();
	$param[]=$data->getSyanglebeta();
	$param[]=$data->getSyanglegamma();
	$param[]=$data->getImage();
  $param[]=$data->getSyid();
return parent::executerRequete($req, $param);
}
public function insert($data)
{
  $req="INSERT INTO `lithotherapie`.`systeme_cristallin` (`syid`, `synom`, `syaxea1`, `syaxea2`, `syaxea3`, `syanglealpha`, `syanglebeta`, `syanglegamma`, `image`)"
  ." VALUES ('', ?, ?, ?, ?, ?, ?, ?, ?)";
    $param[]=$data->getSynom();
  	$param[]=$data->getSyaxea1();
  	$param[]=$data->getSyaxea2();
  	$param[]=$data->getSyaxea3();
  	$param[]=$data->getSyanglealpha();
  	$param[]=$data->getSyanglebeta();
  	$param[]=$data->getSyanglegamma();
  	$param[]=$data->getImage();
return parent::executerRequete($req, $param);
}
public function delete($data)
{
  $req="delete from systeme_cristallin where syid=?";
  if (is_numeric($data)){
      $param[]=$data;
  }
  else {
      $param[]=$data->getSyid();
  }
  return parent::executerRequete($req, $param);
}
public function selectById($id)
{
  $req="select * from systeme_cristallin where syid=?";
  $param[]=$id;
  $res=parent::executerRequete($req,$param);
  $leSys="non trouvé";
  foreach($res as $ligne)
  {
    $leSys=new SystemeCristallin($ligne[0],$ligne[1],$ligne[2],$ligne[3],$ligne[4],$ligne[5],$ligne[6],$ligne[7],$ligne[8]);
  }
  return $leSys;
}
public function selectAll()
{
$req="select * from systeme_cristallin";

  $res=parent::executerRequete($req);
  foreach($res as $ligne)
  {
    $mesSys[]=new SystemeCristallin($ligne[0],$ligne[1],$ligne[2],$ligne[3],$ligne[4],$ligne[5],$ligne[6],$ligne[7],$ligne[8]);
  }
return $mesSys;
}
}
