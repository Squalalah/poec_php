<?php
require_once('../MODELE/localData.php');
$id=htmlentities($_POST['id']);
$lib=htmlentities($_POST['lib']);
$qte=htmlentities($_POST['qte']);
try {
    $maConnexion = new PDO($dns, $user, $mdp);
    $req='insert into matiere(id,libelle,qte) values (?,?,?);';
    $prep =$maConnexion->prepare($req);
    $prep->bindParam(1,$id);
    $prep->bindParam(2,$lib);
    $prep->bindParam(3,$qte);
    $prep->execute();
}
catch (PDOException $e)
{
    echo 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
    die();
}

header('Location: ../formInsert.php?message=1');
