<?php
if(isset($_GET['message'])) {
    echo "suppression effectué";
}
?>
<form method="POST" action="CONTROLEUR/supr.php">
    Id:<input type="text" name="id" size="5" value="" maxlength="4">
    <br>
    <input type="submit" value="Envoyer" name="envoyer">
</form>