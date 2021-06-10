<html>
<head>

</head>


<body>
<p>Bienvenue dans le jeu du palindrome</p>
<form action="#" method="POST">
    <label for="proposition">Votre proposition:</label><br>
    <input type="text" id="proposition" name="proposition" value=""><br>
    <input type="submit" value="Submit">
    <input type="submit" value="Destroy Session" name="destroy" value="destroy">
</form>
<br />
<br />

</body>

</html>
<?php
include("../CONTROLEUR/palindromeCONTROL.php");
?>
