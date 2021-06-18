<?php
require_once('MODELE/localLibrairieData.php');
echo '<form action="#" method="POST">';
echo '<label for="Nom">Votre nom:</label><br>';
echo '<input type="text" id="nom" name="nom" value="" placeholder="nom" required><br>';
echo '<label for="prenom">Votre prenom: </label><br>';
echo '<input type="text" id="prenom" name="prenom" required><br>';
echo '<select id="selectionLivre" name="selectionLivre">';

try {
    $maConnexion = new PDO($dns, $user, $mdp);
    $req='select DISTINCT a.num_adherent, a.nom_adherent, a.prenom_adherent from adherent a INNER JOIN emprunte ON a.num_adherent = emprunte.num_adherent ORDER BY a.nom_adherent ASC';
    $resultat = $maConnexion->query($req);
    while ($adherent=$resultat->fetchObject()) {
        echo '<option value="'.$adherent->num_adherent.'">'.$adherent->nom_adherent. ' '. $adherent->prenom_adherent.'</option>';
    }
}
catch (PDOException $e) {
    print 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';die();
}
echo '</select>';
echo '<input type="submit" value="Submit">';
echo '</form>';


echo '<form action="#" method="POST">';
echo '<label for="Nom">Nom Editeur:</label><br>';
echo '<input type="text" id="nomAdherent" name="nomAdherent" value="" placeholder="nom" required><br>';
echo '<input type="submit" value="Submit">';
echo '</form>';

if(isset($_POST['nomAdherent']))
{
    $nom=htmlentities($_POST['nomAdherent']);
    try {
        $maConnexion = new PDO($dns, $user, $mdp);
        $req='insert into editeur values (NULL,?);';
        $prep =$maConnexion->prepare($req);
        $prep->bindParam(1,$nom);
        $prep->execute();
        echo 'Editeur ajouté avec succès';
    }
    catch (PDOException $e)
    {
        echo 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
        die();
    }
}

echo '<form action="#" method="POST">';
echo '<label for="Nom">Nom Auteur:</label><br>';
echo '<input type="text" id="nomAdherent" name="nomAdherent" value="" placeholder="nom" required><br>';
echo '<label for="Nom">Prenom Auteur:</label><br>';
echo '<input type="text" id="prenomAuteur" name="prenomAuteur" value="" placeholder="nom" required><br>';
echo '<input type="submit" name="submitAuteur" value="Submit">';
echo '</form>';

if(isset($_POST['nomAdherent']) && isset($_POST['prenomAuteur']))
{
    $nom=htmlentities($_POST['nomAdherent']);
    $prenom=htmlentities($_POST['prenomAuteur']);
    try {
        $maConnexion = new PDO($dns, $user, $mdp);
        $req='insert into auteur values (NULL,?,?);';
        $prep =$maConnexion->prepare($req);
        $prep->bindParam(1,$nom);
        $prep->bindParam(2, $prenom);
        $prep->execute();
        echo 'Auteur ajouté avec succès';
    }
    catch (PDOException $e)
    {
        echo 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
        die();
    }
}


