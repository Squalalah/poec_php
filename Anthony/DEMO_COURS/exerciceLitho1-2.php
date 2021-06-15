<?php

require_once('MODELE/localLithotherapieData.php');
echo '<table>';
echo '<thead><tr><th>ID</th><th>Nom</th></tr></thead>';
echo '<tbody>';
try {
    $maConnexion = new PDO($dns, $user, $mdp);
    $req='select * from pays';
    $resultat = $maConnexion->query($req);
    while ($pays=$resultat->fetchObject()) {
        echo '<tr><td>'.$pays->paid.'</td>';
        echo '<td>'.$pays->panom.'</td></tr>';
    }
}
catch (PDOException $e) {
    print 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';die();
}

echo '</tbody></table>';

echo '<ol>';
try {
    $maConnexion = new PDO($dns, $user, $mdp);
    $req='select panom from pays';
    $resultat = $maConnexion->query($req);
    while ($pays=$resultat->fetchObject()) {
        echo '<li>'.$pays->panom.'</li>';
    }
}
catch (PDOException $e) {
    print 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';die();
}
echo '</ol>';