<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de filtrage</title>
</head>
<body>
    <h1>Formulaire de filtrage</h1>

    <form method="GET">
        <input type="text" name="nom" placeholder="Nom du jeu" value="<?= $_GET['nom'] ?>">
        <input type="submit" value="Filtrer">
    </form>

    <?php require_once 'gestion_liste.php' ?>

    <ul>
        <?php foreach ($names as $name) { ?>
        <li><?= $name ?></li>
        <?php } ?>
    </ul>
</body>
</html>
