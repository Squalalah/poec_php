<?php
require_once("../individu.php");
class DTOIndividu {
	public static function insert(Individu $data)
	{
	try {
		$maCo=self::getBdd();
		$req="INSERT INTO individu (nom,prenom) VALUES (?, ?)";
		$prep=$maCo->prepare($req);
		$leNom=$data->getNom();
		$lePrenom=$data->getPrenom();
		$prep->bindParam(1,$leNom);
		$prep->bindParam(2,$lePrenom);
		$prep->execute();
		// recupere le numero de l'individu qui vient d'etre inserer en base de données
		$data->setId($maCo->lastInsertId());
		} 
	catch (PDOException $e) 
		{
		echo 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
		die();
		}
	}
	public static function update(Individu $data)
	{
	try {
		$maCo=self::getBdd();
		$req="UPDATE individu set prenom = ?, nom = ? WHERE id = ?";
		$prep=$maCo->prepare($req);
		$prep=$maCo->prepare($req);
		$id=$data->getId();
		$leNom=$data->getNom();
		$lePrenom=$data->getPrenom();
		$prep->bindParam(1,$lePrenom);
		$prep->bindParam(2,$leNom);
		$prep->bindParam(3,$id,PDO::PARAM_INT);  
		$prep->execute();
		} 
	catch (PDOException $e) 
		{
		echo 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
		die();
		}
	}
	public static function delete(Individu $data)
	{
	try {
		$maCo=self::getBdd();
		$id=$data->getId();
		$req="delete from individu where id=?";
		$prep=$maCo->prepare($req);
		$prep->bindParam(1,$id,PDO::PARAM_INT); 
		$prep->execute(); 
		} 
	catch (PDOException $e) 
		{
		echo 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
		die();
		}
	 }
	public static function selectById($id)
	{
	try {
		$maCo=self::getBdd();
	  	$req="select * from individu where id=?";
		$prep=$maCo->prepare($req);
		$prep->bindParam(1,$id,PDO::PARAM_INT); 
		$prep->execute(); 
		$mesDataIndiv=$prep->fetchObject();
		$unIndividu=new Individu($mesDataIndiv->nom,$mesDataIndiv->prenom,$mesDataIndiv->id);
		} 
	catch (PDOException $e) 
		{
		echo 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
		die();
		}
	  return $unIndividu;
	}
	public static function selectAll()
	{
	try {
			$maCo=self::getBdd();
		  	$req="select * from individu";
			$resultat = $maCo->query($req);
			while($mesDataIndiv=$resultat->fetchObject())
			{
				$lesIndividus[]=new Individu($mesDataIndiv->nom,$mesDataIndiv->prenom,$mesDataIndiv->id);
			}
			} 
		catch (PDOException $e) 
			{
			echo 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
			die();
			}
	return $lesIndividus;
	}
	// Renvoie un objet de connexion à la BD en initialisant la connexion au besoin
	private static function getBdd() {
	// Création de la connexion
	require("../localData.php");
	return new PDO($dns,$user,$mdp);
	}
}
