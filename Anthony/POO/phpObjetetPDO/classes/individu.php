<?php 

class Individu
{
	private $nom;
	private $prenom;
	private $id;

	function __construct($nom,$prenom,$id='')
	{
	$this->setNom($nom);// $this->nom = $nom;
	$this->setPrenom($prenom);// $this->prenom = $prenom;
	$this->setId($id);
	}
	public function getInfos()
	{
		return "Individu[id=".$this->id.",prenom=".$this->prenom.",nom=".$this->nom."]";
	}
	public function getNom()
	{
		return $this->nom;
	}
	public function setNom($nom)
	{
		$this->nom = $nom;
	}   
	public function getPrenom()
	{
		return $this->prenom;
	}
	public function setPrenom($prenom)
	{
		$this->prenom = $prenom;
	}
	public function setId($id)
	{
		$this->id = $id;
	}
	public function getId()
	{
		return $this->id;
	}
}
 ?>
