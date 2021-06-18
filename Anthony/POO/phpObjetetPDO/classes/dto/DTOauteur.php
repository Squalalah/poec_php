<?php
require_once('classes/Auteur.php');
class DTOAuteur {
    public static function insert(Editeur $data)
    {
        try {
            $maCo=self::getBdd();
            $req="INSERT INTO auteur VALUES (null, ?, ?)";
            $prep=$maCo->prepare($req);
            $leNom=$data->getNomAuteur();
            $lePrenom=$data->getPrenomAuteur();
            $prep->bindParam(1,$leNom);
            $prep->bindParam(2,$lePrenom);
            $prep->execute();
            // recupere le numero de l'individu qui vient d'etre inserer en base de données
            $data->setNumAuteur($maCo->lastInsertId());
        }
        catch (PDOException $e)
        {
            echo 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
            die();
        }
    }
    public static function update(Editeur $data)
    {
        try {
            $maCo=self::getBdd();
            $req="UPDATE auteur set nom_auteur = ?, prenom_auteur = ? WHERE num_auteur = ?";
            $prep=$maCo->prepare($req);
            $id=$data->getNumAuteur();
            $leNom=$data->getNomAuteur();
            $lePrenom=$data->getPrenomAuteur();
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
    public static function delete(Editeur $data)
    {
        try {
            $maCo=self::getBdd();
            $id=$data->getNumAuteur();
            $req="delete from auteur where num_auteur=?";
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
            $req="select * from auteur where num_auteur=?";
            $prep=$maCo->prepare($req);
            $prep->bindParam(1,$id,PDO::PARAM_INT);
            $prep->execute();
            $mesDataAuteur=$prep->fetchObject();
            $unAuteur=new Auteur($mesDataAuteur->nom_auteur,$mesDataAuteur->prenom_auteur,$mesDataAuteur->num_auteur);
        }
        catch (PDOException $e)
        {
            echo 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
            die();
        }
        return $unAuteur;
    }
    public static function selectAll()
    {
        try {
            $maCo=self::getBdd();
            $req="select * from auteur";
            $resultat = $maCo->query($req);
            while($mesDataAuteur=$resultat->fetchObject())
            {
                $lesAuteurs[]=new Auteur($mesDataAuteur->nom_auteur,$mesDataAuteur->prenom_auteur,$mesDataAuteur->num_auteur);
            }
        }
        catch (PDOException $e)
        {
            echo 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
            die();
        }
        return $lesAuteurs;
    }
    // Renvoie un objet de connexion à la BD en initialisant la connexion au besoin
    private static function getBdd() {
        // Création de la connexion
        require("classes/localData.php");
        return new PDO($dns,$user,$mdp);
    }
}