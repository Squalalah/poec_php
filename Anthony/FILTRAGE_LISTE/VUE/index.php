<html>
<head>

</head>


<body>

<form action="#" method="POST">
    <label for="proposition">Entrez le nom du film:</label><br>
    <input type="text" id="proposition" name="proposition" value=""><br>
    <input type="submit" name="submitForm" value="Submit">
    <input type="submit" name ="submitAsc" id="submitAsc" value="Ordre croissant/décroissant">
    <input type="submit" value="Destroy Session" name="destroy" value="destroy">
</form>
<br />
<br />
<form action="#" method="POST">
    <label for="wordAdd">Nom à rajouter:</label><br>
    <input type="text" id="wordAdd" name="wordAdd" value="" placeholder="SAW 2" required><br>
    <input type="submit" name="submitAdd" value="Submit">
</form>



</body>

</html>


<?php
include("../CONTROLEUR/filtrageListeCONTROL.php");
?>

