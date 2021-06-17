<?php
class Specimen {

	private $spid;
  private $splongueur;
  private $splargeur;
  private $sphauteur;
  private $sppoids;
  private $spcommentaire;
  private $spurlimage;
  private $leGite;
  private $mineral;
	public function __construct($spid, $splongueur, $splargeur,
		$sphauteur, $sppoids, $spcommentaire, $spurlimage,
		 $leGite,  $mineral) {
	$this->spid = $spid;
	$this->splongueur = $splongueur;
	$this->splargeur = $splargeur;
	$this->sphauteur = $sphauteur;
	$this->sppoids = $sppoids;
	$this->spcommentaire = $spcommentaire;
	$this->spurlimage = $spurlimage;
	$this->leGite = $leGite;
	$this->mineral = $mineral;
}
public function getSpid() {
	return $this->spid;
}
public function setSpid( $spid) {
	$this->spid = $spid;
}
public function getSplongueur() {
	return $this->splongueur;
}
public function setSplongueur( $splongueur) {
	$this->splongueur = $splongueur;
}
public function getSplargeur() {
	return $this->splargeur;
}
public function setSplargeur( $splargeur) {
	$this->splargeur = $splargeur;
}
public function getSphauteur() {
	return $this->sphauteur;
}
public function setSphauteur( $sphauteur) {
	$this->sphauteur = $sphauteur;
}
public function getSppoids() {
	return $this->sppoids;
}
public function setSppoids( $sppoids) {
	$this->sppoids = $sppoids;
}
public function getSpcommentaire() {
	return $this->spcommentaire;
}
public function setSpcommentaire($spcommentaire) {
	$this->spcommentaire = $spcommentaire;
}
public function getSpurlimage() {
	return $this->spurlimage;
}
public function setSpurlimage($spurlimage) {
	$this->spurlimage = $spurlimage;
}
public function getLeGite() {
	return $this->leGite;
}
public function setLeGite($leGite) {
	$this->leGite = $leGite;
}
public function getMineral() {
	return $this->mineral;
}
public function setMineral($mineral) {
	$this->mineral = $mineral;
}
public function __toString() {
return "<br/>Specimen [spid=" . $this->spid. ", splongueur=" . $this->splongueur
		. ", splargeur=" . $this->splargeur . ", sphauteur=" . $this->sphauteur
		. ", sppoids=" . $this->sppoids . ", spcommentaire="
		. $this->spcommentaire . ", spurlimage=" . $this->spurlimage
		. ", leGite=" . $this->leGite . ", mineral=" . $this->mineral . "]";
}
}
?>
