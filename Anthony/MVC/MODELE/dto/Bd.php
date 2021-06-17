<?php
abstract class Bd extends PDO{
// Objet PDO d'accès à la BD
private $bdd;
// Exécute une requête SQL éventuellement paramétrée
protected function executerRequete($sql, $params = null) {
if ($params == null) {
$resultat = $this->getBdd()->query($sql);
// exécution directe
}
else {
$resultat = $this->getBdd()->prepare($sql); // requête préparée
$resultat->execute($params);
}
return $resultat;
}
// Renvoie un objet de connexion à la BD en initialisant la connexion au besoin
private function getBdd() {
if ($this->bdd == null) {
// Création de la connexion
require("localData.php");
$this->bdd=new PDO($dns,$user,$mdp,$exceptions);
}
return $this->bdd;
}
}
