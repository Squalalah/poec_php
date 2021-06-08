<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Le jeu du pendu</h1>

    <p>
        Ce site peut être lancé avec la commande : php -S localhost:8080
    </p>

    <p>
        <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic voluptate sunt reiciendis eum similique
            voluptas porro doloribus dolores tempora, explicabo ipsam officiis. Ipsam iste tenetur eaque quod non animi
            magnam.</span>
        <span>Optio commodi eius laborum assumenda earum ullam iusto numquam quam quo accusamus aperiam, magnam voluptas
            est nemo, dicta, quos vel velit tempora libero ipsum impedit temporibus quae ratione perferendis!
            Blanditiis.</span>
        <span>In, ratione. Quos architecto ad distinctio explicabo cum a officia est! Nesciunt minima nam error sunt
            nostrum iste corrupti, earum odit officia labore quae, consequatur, neque nihil alias. Voluptatibus,
            corrupti!</span>
    </p>

    <form method="GET">
        <div>
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" value="<?php echo $_GET['name'] ?>">
        </div>
        <input type="submit" value="Tenter">
    </form>

    <?php echo 'Hello !!'; ?>

    <?php echo $_GET['name'] ?? 'Pas de nom saisi'; ?>

    <?php
        if (isset($_GET['name']) && !empty($_GET['name'])) {
            echo $_GET['name'];
        } else {
            echo 'Pas de nom saisi';
        }
    ?>
</body>

</html>
