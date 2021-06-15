<?php
require_once('../MODELE/localData.php');
$id=htmlentities($_POST['id']);
$lib=htmlentities($_POST['lib']);
$qte=htmlentities($_POST['qte']);
try {
    $maConnexion = new PDO($dns, $user, $mdp);
    $req='update matiere set libelle=?,qte=? where id=?;';
    $prep =$maConnexion->prepare($req);
    $prep->bindParam(3,$id);
    $prep->bindParam(1,$lib);
    $prep->bindParam(2,$qte);
    $prep->execute();
}
catch (PDOException $e) {
    print 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
    die();
}

header('Location: ../formUpdate.php?message=1');