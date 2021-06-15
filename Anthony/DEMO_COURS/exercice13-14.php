<?php
require_once ('MODELE/localLibrairieData.php');

if(isset($_GET['modifAuteur'])) {

    $id = $_GET['modifAuteur'];
    echo '<form action="#" method="POST">';
    echo '<input type="hidden" id="idAuteur" name="idAuteur" value="'.$id.'"><br>';
    echo '<label for="prenomAuteur">Modifier prenom Auteur:</label><br>';
    echo '<input type="text" id="prenomAuteur" name="prenomAuteur" value="" placeholder="nom" required><br>';
    echo '<input type="submit" name="submitAuteur" value="Submit">';
    echo '</form>';
}

if(isset($_POST['idAuteur']) && isset($_POST['prenomAuteur']))
{
    $id=htmlentities($_POST['idAuteur']);
    $prenom=htmlentities($_POST['prenomAuteur']);
    try {
        $maConnexion = new PDO($dns, $user, $mdp);
        $req='update auteur set prenom_auteur=? where num_auteur=?;';
        $prep =$maConnexion->prepare($req);
        $prep->bindParam(1,$prenom);
        $prep->bindParam(2,$id);
        $prep->execute();
        echo 'Auteur modifié avec succes';
    }
    catch (PDOException $e) {
        print 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
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
        echo '<tr><td><a href="?modifAuteur='.$auteur->num_auteur.'">'.$auteur->nom_auteur.'</a></td>';
        echo '<td>'.$auteur->prenom_auteur.'</td>';
        echo '<td>'.$auteur->ville_auteur.'</td></tr>';
    }
}
catch (PDOException $e) {
    print 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';die();
}
echo '</tbody></table>';

if(isset($_GET['supprEditeur']))
{
    $id=htmlentities($_GET['supprEditeur']);
    try {
        $maConnexion = new PDO($dns, $user, $mdp);
        $req='delete from editeur where num_editeur=?';
        $prep =$maConnexion->prepare($req);
        $prep->bindParam(1,$id);
        $prep->execute();
        echo 'Editeur supprimé avec succès';
    }
    catch (PDOException $e) {
        echo 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
        die();
    }
}

echo '<table>';
echo '<thead><tr><th>Nom Editeur</th></tr></thead>';
echo '<tbody>';
try {
    $maConnexion = new PDO($dns, $user, $mdp);
    $req='select * from editeur';
    $resultat = $maConnexion->query($req);
    while ($editeur=$resultat->fetchObject()) {
        echo '<tr><td><a href="?supprEditeur='.$editeur->num_editeur.'">'.$editeur->nom_editeur.'</a></td></tr>';
    }
}
catch (PDOException $e) {
    print 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';die();
}

echo '</tbody></table>';

