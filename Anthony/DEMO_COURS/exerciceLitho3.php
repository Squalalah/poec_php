<?php
echo '<form action="#" method="POST">';
echo '<label for="Nom">Votre nom:</label><br>';
echo '<input type="text" id="nom" name="nom" value="" placeholder="nom" required><br>';
echo '<label for="prenom">Votre prenom: </label><br>';
echo '<input type="text" id="prenom" name="prenom" required><br>';
echo '<select id="selectionPays" name="selectionPays">';
require_once('MODELE/localLithotherapieData.php');

try {
    $maConnexion = new PDO($dns, $user, $mdp);
    $req='select * from pays';
    $resultat = $maConnexion->query($req);
    while ($pays=$resultat->fetchObject()) {
        echo '<option value="'.$pays->paid.'">'.$pays->panom.'</option>';
    }
}
catch (PDOException $e) {
    print 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';die();
}
echo '</select>';
echo '<input type="submit" value="Submit">';
echo '</form>';


if(isset($_POST['nom']) && isset($_POST['prenom'])) {
    echo 'Bonjour '. $_POST['prenom'].' '. $_POST['nom'].', vous avez sélectionné le pays n°'.$_POST['selectionPays'].'.';
}