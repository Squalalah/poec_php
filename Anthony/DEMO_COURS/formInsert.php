<!DOCTYPE html>

<?php
if(isset($_GET['message'])) {
    echo "insertion effectué";
}
?>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
        <form method="POST" action="CONTROLEUR/ajoute.php">
          Id:<input type="number" name="id" size="5" value="" maxlength="4">
          <br>
          Libellé:<input type="text" name="lib" size="40" value="" maxlength="35">
          <br>
          Quantité:<input type="number" name="qte" size="5" value="" maxlength="4">
          <br>
          <input type="submit" value="Envoyer" name="envoyer">
        </form>
    </body>
</html>