<!DOCTYPE html>

<?php
if(isset($_GET['message'])) {
    echo "modification effectué";
}
?>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
        <form method="POST" action="CONTROLEUR/modifie.php">
            Id:<input type="text" name="id" size="5" value="" maxlength="4">
            <br>
            Libellé:<input type="text" name="lib" size="40" value="" maxlength="35">
            <br>
            Quantité:<input type="text" name="qte" size="5" value="" maxlength="4">
            <br>
            <input type="submit" value="Envoyer" name="envoyer">
        </form>
    </body>
</html>
<?php
?>