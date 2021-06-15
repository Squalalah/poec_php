<?php

echo '<form action="#" method="POST">';
echo '<label for="idAuteur">ID Auteur:</label><br>';
echo '<input type="text" id="idAuteur" name="idAuteur" value="" placeholder="nom" required><br>';
echo '<label for="prenomAuteur">Modifier prenom Auteur:</label><br>';
echo '<input type="text" id="prenomAuteur" name="prenomAuteur" value="" placeholder="nom" required><br>';
echo '<input type="submit" name="submitAuteur" value="Submit">';
echo '</form>';


if(isset($_POST['idAuteur']) && isset($_POST['prenomAuteur']))
{
    require_once ('MODELE/localLibrairieData.php');
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

echo '<form action="#" method="POST">';
echo '<label for="idEditeur">ID Editeur:</label><br>';
echo '<input type="text" id="idEditeur" name="idEditeur" value="" placeholder="nom" required><br>';
echo '<label for="nomEditeur">Modifier nom Editeur:</label><br>';
echo '<input type="text" id="nomEditeur" name="nomEditeur" value="" placeholder="nom" required><br>';
echo '<input type="submit" name="submitModifEditeur" value="Submit">';
echo '</form>';



if(isset($_POST['idEditeur']) && isset($_POST['nomEditeur']))
{
    require_once ('MODELE/localLibrairieData.php');
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
