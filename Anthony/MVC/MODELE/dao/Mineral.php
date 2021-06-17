<?php
class Mineral {

	private $midid;
	private $minom;
	private $miduretedeb;
	private $miduretefin;
	private $midensitedeb;
	private $midensitefin;
	private $miclivage;
	private $micassure;
	private $mitrace;
	private $mieclat;
	private $micompositionchimique;
	private $leSysCris;
	private $leGroupe;
    public function __construct($midid, $minom,$miduretedeb,
			$miduretefin, $midensitedeb, $midensitefin,
			$miclivage, $micassure, $mitrace,
			$mieclat, $micompositionchimique,$leSysCris, $leGroupe) {
		$this->midid=$midid;
		$this->minom=$minom;
		$this->miduretedeb = $miduretedeb;
		$this->miduretefin = $miduretefin;
		$this->midensitedeb = $midensitedeb;
		$this->midensitefin = $midensitefin;
		$this->miclivage = $miclivage;
		$this->micassure = $micassure;
		$this->mitrace = $mitrace;
		$this->mieclat = $mieclat;
		$this->micompositionchimique = $micompositionchimique;
		$this->leSysCris = $leSysCris;
		$this->leGroupe = $leGroupe;
	}
	public function getMidid() {
		return $this->midid;
	}
	public function setMidid( $midid) {
		$this->Midid =$midid;
	}
	public function getMinom() {
		return $this->minom;
	}
	public function setMinom($minom) {
		$this->minom =$minom;
	}
	public function getMiduretedeb() {
		return $this->miduretedeb;
	}
	public function setMiduretedeb($miduretedeb) {
		$this->Miduretedeb =$miduretedeb;
	}
	public function getMiduretefin() {
		return $this->miduretefin;
	}
	public function setMiduretefin($miduretefin) {
		$this->Miduretefin =$miduretefin;
	}
	public function getMidensitedeb() {
		return $this->midensitedeb;
	}
	public function setMidensitedeb($midensitedeb) {
		$this->Midensitedeb =$midensitedeb;
	}
	public function getMidensitefin() {
		return $this->midensitefin;
	}
	public function setMidensitefin($midensitefin) {
		$this->Midensitefin =$midensitefin;
	}
	public function getMiclivage() {
		return $this->miclivage;
	}
	public function setMiclivage($miclivage) {
		$this->Miclivage =$miclivage;
	}
	public function getMicassure() {
		return $this->micassure;
	}
	public function setMicassure($micassure) {
		$this->Micassure =$micassure;
	}
	public function getMitrace() {
		return $this->mitrace;
	}
	public function setMitrace($mitrace) {
		$this->Mitrace =$mitrace;
	}
	public function getMieclat() {
		return $this->mieclat;
	}
	public function setMieclat($mieclat) {
		$this->Mieclat =$mieclat;
	}
	public function getMicompositionchimique() {
		return $this->micompositionchimique;
	}
	public function setMicompositionchimique($micompositionchimique) {
		$this->Micompositionchimique =$micompositionchimique;
	}
	public function getleSysCris() {
		return $this->leSysCris;
	}
	public function setLeSysCris($leSysCris) {
		$this->leSysCris = $leSysCris;
	}
	public function getLeGroupe() {
		return $this->leGroupe;
	}
	public function setLeGroupe($leGite) {
		$this->leGite = $leGroupe;
	}
	public function __toString()
{
	return 	"Mineral : ".$this->midid. " "
	.$this->minom." "
	.$this->miduretedeb." "
	.$this->miduretefin." "
	.$this->midensitedeb." "
	.$this->midensitefin." "
	.$this->miclivage." "
	.$this->micassure." "
	.$this->mitrace." "
	.$this->mieclat." "
	.$this->micompositionchimique." "
	.$this->leSysCris." "
	.$this->leGroupe;
}
}
?>
