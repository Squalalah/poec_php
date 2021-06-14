<?php
require_once('MODELE/localData.php');
echo '<table border=1>';
echo '<tr><th>ID</th><th>Libell&eacute; 
</th><th>Quantit&eacute;
</th></tr>';
try {
    $maConnexion = new PDO($dns, $user, $mdp);
    $req='select * from matiere';
    $resultat = $maConnexion->query($req);
    while ($matiere=$resultat->fetchObject()){
        echo '<tr><td>'.$matiere->id.'</td>';
        echo '<td>'.$matiere->libelle.'</td>';
        echo '<td>'.$matiere->qte.'</td></tr>';
    }
    echo '</table>';
}
catch (PDOException $e) {
    print 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
    die();
}