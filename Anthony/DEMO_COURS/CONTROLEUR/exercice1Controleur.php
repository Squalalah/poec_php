<?php
require_once('../MODELE/localLibrairieData.php');

try {
    $maConnexion = new PDO($dns, $user, $mdp);
    $req='select * from auteur';
    $result = $maConnexion->query($req);
    while ($auteur=$result->fetchObject()) {
        echo '<tr><td>'.$auteur->num_auteur.'</td>';
        echo '<td>'.$auteur->nom_auteur.'</td>';
        echo '<td>'.$auteur->prenom_auteur.'</td></tr>';
    }
}
catch (PDOException $e) {
    print 'Erreur avec la BD!: ' .$e->getMessage();die();
}
