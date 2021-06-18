<!-- <html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="POST" action="controleur/controlArtiste.php">
    <label for="nbActeur">Nb. d'acteur à créer</label>
    <input type="number" name="nbActeur" size="5" value="" maxlength="3">
    <br>
    <label for="nbRealisateur">Nb. de réalisateur à créer</label>
    <input type="number" name="nbRealisateur" size="5" value="" maxlength="3">
    <br>
    <input type="submit" value="Envoyer" name="envoyer">
</form>
</body>
</html> -->

<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
    <body>
<?php
    echo '<form method="POST" action="controleur/controlArtiste.php">';
    for($i = 1; $i <= 10;$i++)
    {
        echo '<label for="prenomActeur'.$i.'">Prenom Acteur:</label>';
        echo '<input type="text" name="prenomActeur'.$i.'" value="Anthony'.$i.'">';
        echo '<label for="nomActeur'.$i.'">Nom Acteur:</label>';
        echo '<input type="text" name="nomActeur'.$i.'" value="Montreuil'.$i.'"><br/><br/>';
    }
    for($a = 11; $a <= 13; $a++)
    {
        echo '<label for="prenomRealisateur'.$a.'">Prenom Realisateur:</label>';
        echo '<input type="text" name="prenomRealisateur'.$a.'" value="Didier'.$a.'"';
        echo '<label for="nomRealisateur'.$a.'">Nom Realisateur:</label>';
        echo '<input type="text" name="nomRealisateur'.$a.'" value="Deschamps'.$a.'"><br/><br/>';
    }
    echo '<input type="submit" name="submit" value="Submit">';
    echo '</form>';
?>
    </body>
</html>