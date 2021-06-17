<?php
require_once('../classes/Acteur.php');
require_once('../classes/Realisateur.php');

echo 'TABLE DES ACTEURS <br />';
echo '<table>';
echo '<thead><tr><th>Prenom</th><th>Nom</th><th>Film Joues</th><th>Cachet</th></tr></thead>';
echo '<tbody>';

for($i = 1; $i <= 10;$i++)
{
    echo '<tr>';
    $randomFilmJoues = rand(1, 20);
    $randomCachet = rand(1,999999);
    $acteur = new Acteur($_POST['prenomActeur'.$i], $_POST['nomActeur'.$i], $randomFilmJoues, $randomCachet);
    echo '<td>'.$acteur->getPrenom().'</td>';
    echo '<td>'.$acteur->getNom().'</td>';
    echo '<td>'.$acteur->getNbFilmJoue().'</td>';
    echo '<td>'.$acteur->getCachet().'</td>';
    echo '</tr>';
}
echo '</tbody>';
echo '</table><br />';

echo 'TABLE DES REALISATEURS <br />';
echo '<table>';
echo '<thead><tr><th>Prenom</th><th>Nom</th><th>Film Realisé</th></tr></thead>';
echo '<tbody>';
for($a = 11; $a <= 13;$a++)
{
    echo '<tr>';
    $randomFilmRealise = rand(1, 5000);
    $realisateur = new Realisateur($_POST['prenomRealisateur'.$a], $_POST['nomRealisateur'.$a], $randomFilmRealise);
    echo '<td>'.$realisateur->getPrenom().'</td>';
    echo '<td>'.$realisateur->getNom().'</td>';
    echo '<td>'.$realisateur->getFilmsRealiser().'</td>';
    echo '</tr>';
}
echo '</tbody>';
echo '</table><br />';


/*
$prenoms = array('Anthony', 'Thibault', 'Valérie', 'Johan', 'Gaetan', 'Gustave');
$noms = array('Montreuil', 'Blabla', 'NOM', 'Arobase');

if(isset($_POST['nbActeur']) && isset($_POST['nbRealisateur']))
{
    $nbActeur = $_POST['nbActeur'];
    $nbRealisateur = $_POST['nbRealisateur'];
    if(is_numeric($nbActeur) && is_numeric($nbRealisateur))
    {
        echo 'TABLE DES ACTEURS <br />';
        echo '<table>';
        echo '<thead><tr><th>Prenom</th><th>Nom</th><th>Film Joues</th><th>Cachet</th></tr></thead>';
        echo '<tbody>';
        for($i = 0; $i < $nbActeur;$i++)
        {
            echo '<tr>';
            $randomPrenom = $prenoms[array_rand($prenoms)];
            $randomNom = $noms[array_rand($noms)];
            $randomFilmJoues = rand(1, 20);
            $randomCachet = rand(1,999999);
            $acteur = new Acteur($randomPrenom, $randomNom, $randomFilmJoues, $randomCachet);
            echo '<td>'.$acteur->getPrenom().'</td>';
            echo '<td>'.$acteur->getNom().'</td>';
            echo '<td>'.$acteur->getNbFilmJoue().'</td>';
            echo '<td>'.$acteur->getCachet().'</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table><br />';

        echo 'TABLE DES REALISATEURS <br />';
        echo '<table>';
        echo '<thead><tr><th>Prenom</th><th>Nom</th><th>Film Realisé</th></tr></thead>';
        echo '<tbody>';
        for($i = 0; $i < $nbRealisateur;$i++)
        {
            echo '<tr>';
            $randomPrenom = $prenoms[array_rand($prenoms)];
            $randomNom = $noms[array_rand($noms)];
            $randomFilmRealise = rand(1, 5000);
            $realisateur = new Realisateur($randomPrenom, $randomNom, $randomFilmRealise);
            echo '<td>'.$realisateur->getPrenom().'</td>';
            echo '<td>'.$realisateur->getNom().'</td>';
            echo '<td>'.$realisateur->getFilmsRealiser().'</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table><br />';
    }
}
*/