<html>
<head>

</head>


<body>

<form action="#" method="POST">
    <label for="email">Votre email:</label><br>
    <input type="email" id="email" name="email" value="" placeholder="blabla@domaine.fr" required><br>
    <label for="password">Votre mot de passe: </label><br>
    <input type="password" id="password" name="password" required><br>
    <input type="submit" value="Submit">
</form>

<br />

<form action="#" method="POST">
    <label for="emailAdd">Email a ajouter:</label><br>
    <input type="email" id="emailAdd" name="emailAdd" value="" placeholder="blabla@domaine.fr" required><br>
    <label for="passwordAdd">Mot de passe a ajouter: </label><br>
    <input type="password" id="passwordAdd" name="passwordAdd" required><br>
    <input type="submit" value="Submit">
</form>

</body>

</html>


<?php
include("../CONTROLEUR/loginCONTROL.php");
?>

