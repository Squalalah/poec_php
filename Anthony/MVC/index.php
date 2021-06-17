<?php /* Accès aux données */
/*Appel au modèle */
//var_dump($_GET);
try {
require 'MODELE/Autoloader.php';
Autoloader::register();
if (isset($_GET["action"]))
{
  if($_GET["action"]=="detailMineral")
  {
    if (isset($_GET['id']))
    {
      $id=intval($_GET['id']);
      if($id<>0)
      {
        require "CONTROLEUR/generateurVueMineral.php";
      }
      else {
        throw new Exception("Identifiant incorrect pour le mineral");
      }
  }
  else {
      throw new Exception("Identifiant du minéral non défini");
  }
}
else {
  throw new Exception("Action incorrecte ...");
}
}
else {
require "CONTROLEUR/generateurVueMineraux.php";
}
} catch (Exception $erreur) {
$messageErreur=$erreur->getMessage();
require("CONTROLEUR/generateurVueErreur.php");
}

?>
