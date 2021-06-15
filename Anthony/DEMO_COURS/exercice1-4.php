<?php


require_once('MODELE/localLibrairieData.php');
echo '<table>';
echo '<thead><tr><th>ID</th><th>Nom</th><th>Prenom</th></tr></thead>';
echo '<tbody>';
try {
    $maConnexion = new PDO($dns, $user, $mdp);
    $req='select * from auteur';
    $resultat = $maConnexion->query($req);
    while ($auteur=$resultat->fetchObject()) {
        echo '<tr><td>'.$auteur->num_auteur.'</td>';
        echo '<td>'.$auteur->nom_auteur.'</td>';
        echo '<td>'.$auteur->prenom_auteur.'</td></tr>';
    }
}
catch (PDOException $e) {
    print 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';die();
}

echo '</tbody></table>';

echo '<table>';
echo '<thead><tr><th>ID</th><th>Nom</th></tr></thead>';
echo '<tbody>';
try {
    $maConnexion = new PDO($dns, $user, $mdp);
    $req='select * from editeur';
    $resultat = $maConnexion->query($req);
    while ($editeur=$resultat->fetchObject()) {
        echo '<tr><td>'.$editeur->num_editeur.'</td>';
        echo '<td>'.$editeur->nom_editeur.'</td></tr>';
    }
}
catch (PDOException $e) {
    print 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';die();
}

echo '</tbody></table>';

echo '<table>';
echo '<thead><tr><th>Nom</th><th>Prenom</th><th>Ville</th></tr></thead>';
echo '<tbody>';
try {
    $maConnexion = new PDO($dns, $user, $mdp);
    $req='select * from adherent';
    $resultat = $maConnexion->query($req);
    while ($emprunte=$resultat->fetchObject()) {
        echo '<tr><td>'.$emprunte->nom_adherent.'</td>';
        echo '<td>'.$emprunte->prenom_adherent.'</td>';
        echo '<td>'.$emprunte->ville_adherent.'</td></tr>';
    }
}
catch (PDOException $e) {
    print 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';die();
}

echo '</tbody></table>';

echo '<form action="#" method="POST">';
echo '<label for="Nom">Votre nom:</label><br>';
echo '<input type="text" id="nom" name="nom" value="" placeholder="nom" required><br>';
echo '<label for="prenom">Votre prenom: </label><br>';
echo '<input type="text" id="prenom" name="prenom" required><br>';
echo '<select id="selectionLivre" name="selectionLivre">';

try {
    $maConnexion = new PDO($dns, $user, $mdp);
    $req='select * from livre';
    $resultat = $maConnexion->query($req);
    while ($livre=$resultat->fetchObject()) {
        echo '<option value="'.$livre->num_livre.'">'.$livre->titre_livre.'</option>';
    }
}
catch (PDOException $e) {
    print 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';die();
}
echo '</select>';
echo '<input type="submit" value="Submit">';
echo '</form>';