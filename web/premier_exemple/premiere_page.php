<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ma première page Web avec PHP</title>
    <link rel="stylesheet" href="./app.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Lien n°01</a></li>
            <li><a href="#">Lien n°02</a></li>
            <li><a href="#">Lien n°03</a></li>
            <li><a href="#">Lien n°04</a></li>
            <li><a href="#">Lien n°05</a></li>
            <li><a href="#">Lien n°06</a></li>
            <li><a href="#">Lien n°07</a></li>
            <li><a href="#">Lien n°08</a></li>
            <li><a href="#">Lien n°09</a></li>
            <li><a href="#">Lien n°10</a></li>
            <li><a href="#">Lien n°11</a></li>
            <li><a href="#">Lien n°12</a></li>
            <li><a href="#">Lien n°13</a></li>
            <li><a href="#">Lien n°14</a></li>
            <li><a href="#">Lien n°15</a></li>
            <li><a href="#">Lien n°16</a></li>
            <li><a href="#">Lien n°17</a></li>
            <li><a href="#">Lien n°18</a></li>
            <li><a href="#">Lien n°19</a></li>
            <li><a href="#">Lien n°20</a></li>
        </ul>
    </nav>

    <h1>Ma première page PHP</h1>

    <?php
        echo 'Nous sommes le : '.(new \DateTime())->format('d/m/Y').PHP_EOL;
    ?>

    <?= 'Nous sommes le : '.(new \DateTime())->format('d/m/Y').PHP_EOL ?>

    <ul style="background-color: red;">
    <?php
    for ($i = 0; $i < 20; $i++) {
        echo "<li class=\"php\">$i</li>";
    }
    ?>
    </ul>

    {% for i in 0..20 %}
        &lt;li class="php">{{ i }}&lt;/li>
    {% endfor %}

    <?php
    require_once './declare_var.php';
    ?>

    <script>
        var elt = document.createElement('p');
        elt.innerText = 'Salut, je suis du JavaScript. Bien ou bien ?';
        document.body.appendChild(elt);
    </script>
    </ul>

    <?php var_dump($_SERVER) ?>
</body>
</html>
