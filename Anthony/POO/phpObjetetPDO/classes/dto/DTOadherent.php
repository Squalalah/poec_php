<?php
require_once('classes/Editeur.php');
class DTOEditeur {
    public static function insert(Editeur $data)
    {
        try {
            $maCo=self::getBdd();
            $req="INSERT INTO editeur VALUES (null, ?)";
            $prep=$maCo->prepare($req);
            $leNom=$data->getNomEditeur();
            $prep->bindParam(1,$leNom);
            $prep->execute();
            // recupere le numero de l'individu qui vient d'etre inserer en base de données
            $data->setNumEditeur($maCo->lastInsertId());
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
            $req="UPDATE editeur set nom_editeur = ? WHERE num_editeur = ?";
            $prep=$maCo->prepare($req);
            $id=$data->getNumEditeur();
            $leNom=$data->getNomEditeur();
            $prep->bindParam(1,$leNom);
            $prep->bindParam(2,$id,PDO::PARAM_INT);
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
            $id=$data->getNumEditeur();
            $req="delete from editeur where num_editeur=?";
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
    public static function selectById($id) : Editeur
    {
        try {
            $maCo=self::getBdd();
            $req="select * from editeur where num_editeur=?";
            $prep=$maCo->prepare($req);
            $prep->bindParam(1,$id,PDO::PARAM_INT);
            $prep->execute();
            $mesDataEditeur=$prep->fetchObject();
            $unEditeur=new Editeur($mesDataEditeur->nom_editeur,$mesDataEditeur->num_editeur);
        }
        catch (PDOException $e)
        {
            echo 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
            die();
        }
        return $unEditeur;
    }
    public static function selectAll()
    {
        try {
            $maCo=self::getBdd();
            $req="select * from editeur";
            $resultat = $maCo->query($req);
            while($mesDataEditeur=$resultat->fetchObject())
            {
                $lesEditeurs[]=new Editeur($mesDataEditeur->nom_editeur,$mesDataEditeur->num_editeur);
            }
        }
        catch (PDOException $e)
        {
            echo 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
            die();
        }
        return $lesEditeurs;
    }
    // Renvoie un objet de connexion à la BD en initialisant la connexion au besoin
    private static function getBdd() {
        // Création de la connexion
        require("classes/localData.php");
        return new PDO($dns,$user,$mdp);
    }
}