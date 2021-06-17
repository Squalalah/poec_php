<?php
class DTOGroupe extends Bd implements DTO
{
public function __construct(){}
public function update($data)
{
    $req="UPDATE groupe SET grnom=?,grcommentaire=? where grid=?";
    $param[]=$data->getGrnom();
    $param[]=$data->getGrcommentaire();
    $param[]=$data->getGrid();
    return parent::executerRequete($req, $param);
}
public function insert($data)
{
    $req="INSERT INTO groupe(grid,grnom,grcommentaire)VALUES('',?,?)";
    $param[]=$data->getGrnom();
    $param[]=$data->getGrcommentaire();
    return parent::executerRequete($req, $param);
}
public function delete($data)
{
    $req="delete from mineral where grid=?";
    if( is_numeric($data)){
    $param[]=$data;
}
else {
    $param[]=$data->getGrid();
}
    return parent::executerRequete($req, $param);
}
public function selectById($id)
{
    $req="select * from groupe where grid=?";
    $param[]=$id;
    $res=parent::executerRequete($req,$param);
    foreach($res as $ligne)
    {
        $leGroupe=new Groupe($ligne[0],$ligne[1],$ligne[2]);
    }
    return $leGroupe;
}
public function selectAll()
{
    $req="select * from groupe";
    $res=parent::executerRequete($req,$param);
    foreach($res as $ligne)
    {
        $lesGroupe=new Groupe($ligne[0],$ligne[1],$ligne[2]);
    }
    return $lesGroupe;
}

}
?>
