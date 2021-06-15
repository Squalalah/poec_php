<?php
require_once('MODELE/localLibrairieData.php');
echo '<form action="#" method="POST">';
echo '<label for="idActeur">ID Auteur:</label><br>';
echo '<input type="number" id="idActeur" name="idActeur" value="" placeholder="ID" required><br>';
echo '<input type="submit" name="submitModifEditeur" value="Supprimer">';
echo '</form>';

if(isset($_POST['idActeur']))
{
    $id=htmlentities($_POST['idActeur']);
    try {
        // On se connecte à la base de données
        $maConnexion = new PDO($dns, $user, $mdp);
        $req='delete from auteur where num_auteur=?';
        $prep =$maConnexion->prepare($req);
        $prep->bindParam(1,$id);
        $prep->execute();
        echo 'Auteur supprimé avec succes';
    }
    catch (PDOException $e) {
        echo 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
        die();
    }
}

echo '<form action="#" method="POST">';
echo '<label for="idEditeur">ID Editeur:</label><br>';
echo '<input type="number" id="idEditeur" name="idEditeur" value="" placeholder="ID" required><br>';
echo '<input type="submit" name="submitSupprEditeur" value="Supprimer">';
echo '</form>';

if(isset($_POST['idEditeur']))
{
    $id=htmlentities($_POST['idEditeur']);
    try {
        // On se connecte à la base de données
        $maConnexion = new PDO($dns, $user, $mdp);
        $req='delete from editeur where num_editeur=?';
        $prep =$maConnexion->prepare($req);
        $prep->bindParam(1,$id);
        $prep->execute();
        echo 'Editeur supprimé avec succes';
    }
    catch (PDOException $e) {
        echo 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
        die();
    }
}

if(isset($_GET['suppr']))
{
    $id=htmlentities($_GET['suppr']);
    try {
        $maConnexion = new PDO($dns, $user, $mdp);
        $req='delete from auteur where num_auteur=?';
        $prep =$maConnexion->prepare($req);
        $prep->bindParam(1,$id);
        $prep->execute();
        echo 'Auteur supprimé avec succès';
    }
    catch (PDOException $e) {
        echo 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
        die();
    }
}

echo '<table>';
echo '<thead><tr><th>Nom</th><th>Prenom</th></tr></thead>';
echo '<tbody>';
try {
    $maConnexion = new PDO($dns, $user, $mdp);
    $req='select * from auteur';
    $resultat = $maConnexion->query($req);
    while ($auteur=$resultat->fetchObject()) {
        echo '<tr><td><a href="?suppr='.$auteur->num_auteur.'">'.$auteur->nom_auteur.'</a></td>';
        echo '<td>'.$auteur->prenom_auteur.'</td>';
        echo '<td>'.$auteur->ville_auteur.'</td></tr>';
    }
}
catch (PDOException $e) {
    print 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';die();
}

echo '</tbody></table>';

