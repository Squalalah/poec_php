<?php
require_once('MODELE/localData.php');
try {
    $maConnexion = new PDO($dns, $user, $mdp);
    $req='select * from matiere';
    $resultat = $maConnexion->query($req);
    while ($matiere=$resultat->fetchObject()) {
        echo 'Id='.$matiere->id.'<br/>';
        echo 'Libellé='.$matiere->libelle.'<br/>';
        echo 'Quantité='.$matiere->qte.'<br/>';}
}
catch (PDOException $e) {
    print 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';die();
}