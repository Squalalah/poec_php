<?php
require_once('MODELE/localLibrairieData.php');
if(isset($_GET['modifEditeur'])) {

    $id = $_GET['modifEditeur'];
    echo '<form action="#" method="POST">';
    echo '<input type="hidden" id="idEditeur" name="idEditeur" value="'.$id.'"><br>';
    echo '<label for="nomEditeur">Modifier nom editeur:</label><br>';
    echo '<input type="text" id="nomEditeur" name="nomEditeur" value="" placeholder="nom" required><br>';
    echo '<input type="submit" name="submitEditeur" value="Submit">';
    echo '</form>';
}

if(isset($_POST['idEditeur']) && isset($_POST['nomEditeur']))
{
    $id=htmlentities($_POST['idEditeur']);
    $nom=htmlentities($_POST['nomEditeur']);
    try {
        $maConnexion = new PDO($dns, $user, $mdp);
        $req='update editeur set nom_editeur=? where num_editeur=?;';
        $prep =$maConnexion->prepare($req);
        $prep->bindParam(1,$nom);
        $prep->bindParam(2,$id);
        $prep->execute();
        echo 'Editeur modifié avec succes';
    }
    catch (PDOException $e) {
        print 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
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
        echo '<tr><td><a href="?modifEditeur='.$editeur->num_editeur.'">'.$editeur->nom_editeur.'</a></td></tr>';
    }
}
catch (PDOException $e) {
    print 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';die();
}
echo '</tbody></table>';