<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Formulaire mise au carré</title>
</head>

<body>
    <h1>Formulaire mise au carré</h1>

    <?php $nb = $_GET['nb']; // $nb vaudra null si pas de valeur. ?>

    <form method="GET">
        <input type="number" name="nb" placeholder="Saisir un nombre" value="<?= $nb ?>">

        <input type="submit" value="Calcul de la valeur²">
    </form>

    <?php
    if ($nb) { ?>
    <p>
        La valeur saisie est : <?= $nb ?>.
        <br>
        <?= $nb ?>² = <?= $nb ** 2 ?>.
    </p>
    <?php } ?>
</body>

</html>
