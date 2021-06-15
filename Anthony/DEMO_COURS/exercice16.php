<?php
require_once('MODELE/localLibrairieData.php');
echo '<form action="#" method="POST">';
echo '<select id="selectionAuteur" name="selectionAuteur">';

try {
    $maConnexion = new PDO($dns, $user, $mdp);
    $req='select * from auteur';
    $resultat = $maConnexion->query($req);
    while ($auteur=$resultat->fetchObject()) {
        echo '<option value="'.$auteur->num_auteur.'">'.$auteur->nom_auteur. ' '. $auteur->prenom_auteur.'</option>';
    }
}
catch (PDOException $e) {
    print 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';die();
}
echo '<input type="submit" name="submitAuteur">';
echo '</form>';

if(isset($_POST['selectionAuteur'])) {
    $id = htmlentities($_POST['selectionAuteur']);
    try {
        $maConnexion = new PDO($dns, $user, $mdp);
        //$req='select DISTINCT a.num_adherent, a.nom_adherent, a.prenom_adherent from adherent a INNER JOIN emprunte ON a.num_adherent = emprunte.num_adherent ORDER BY a.nom_adherent ASC';
        $req='select titre_livre from livre INNER JOIN auteur ON auteur.num_auteur = livre.num_auteur WHERE auteur.num_auteur = ?';
        $prep =$maConnexion->prepare($req);
        $prep->bindParam(1,$id);
        $prep->execute();
        echo 'Voici les livres de l\'auteur';
        echo '<ol>';
        while ($livre=$prep->fetchObject()) {
            echo '<li>'.$livre->titre_livre.'</li>';
        }
    }
    catch (PDOException $e) {
        print 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';die();
    }
}
