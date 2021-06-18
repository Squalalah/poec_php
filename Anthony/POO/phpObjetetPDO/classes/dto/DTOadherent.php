<?php
require_once('classes/Adherent.php');
class DTOAdherent {
    public static function insert(Adherent $data)
    {
        try {
            $maCo=self::getBdd();
            $req="INSERT INTO adherent VALUES (null, ?,?,?,?,?,?)";
            $prep=$maCo->prepare($req);
            $leNom=$data->getNomAdherent();
            $lePrenom=$data->getPrenomAdherent();
            $adresse=$data->getAdresseAdherent();
            $cp=$data->getCpAdherent();
            $ville=$data->getVilleAdherent();
            $tel=$data->getVilleAdherent();
            $prep->bindParam(1,$leNom);
            $prep->bindParam(2,$lePrenom);
            $prep->bindParam(3,$adresse);
            $prep->bindParam(4,$cp);
            $prep->bindParam(5,$ville);
            $prep->bindParam(6,$tel);
            $prep->execute();
            // recupere le numero de l'individu qui vient d'etre inserer en base de données
            $data->setNumAdherent($maCo->lastInsertId());
        }
        catch (PDOException $e)
        {
            echo 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
            die();
        }
    }
    public static function update(Adherent $data)
    {
        try {
            $maCo=self::getBdd();
            $req="UPDATE adherent set nom_adherent = ?, prenom_adherent = ?, adresse_adherent = ?, cp_adherent = ?, ville_adherent = ?, tel_adherent = ? WHERE num_adherent = ?";
            $prep=$maCo->prepare($req);
            $id=$data->getNumAdherent();
            $leNom=$data->getNomAdherent();
            $lePrenom=$data->getPrenomAdherent();
            $adresse=$data->getAdresseAdherent();
            $cp=$data->getCpAdherent();
            $ville=$data->getVilleAdherent();
            $tel=$data->getVilleAdherent();
            $prep->bindParam(1,$leNom);
            $prep->bindParam(2,$lePrenom);
            $prep->bindParam(3,$adresse);
            $prep->bindParam(4,$cp);
            $prep->bindParam(5,$ville);
            $prep->bindParam(6,$tel);
            $prep->bindParam(7,$id,PDO::PARAM_INT);
            $prep->execute();
        }
        catch (PDOException $e)
        {
            echo 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
            die();
        }
    }
    public static function delete(Adherent $data)
    {
        try {
            $maCo=self::getBdd();
            $id=$data->getNumAdherent();
            $req="delete from adherent where num_adherent=?";
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
    public static function selectById($id) : Adherent
    {
        try {
            $maCo=self::getBdd();
            $req="select * from adherent where num_adherent=?";
            $prep=$maCo->prepare($req);
            $prep->bindParam(1,$id,PDO::PARAM_INT);
            $prep->execute();
            $mesDataAdherent=$prep->fetchObject();
            $unAdherent=new Adherent($mesDataAdherent->nom_adherent,$mesDataAdherent->prenom_adherent,$mesDataAdherent->adresse_adherent,$mesDataAdherent->cp_adherent,$mesDataAdherent->ville_adherent,$mesDataAdherent->tel_adherent,$mesDataAdherent->num_adherent);
        }
        catch (PDOException $e)
        {
            echo 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
            die();
        }
        return $unAdherent;
    }
    public static function selectAll()
    {
        try {
            $maCo=self::getBdd();
            $req="select * from adherent";
            $resultat = $maCo->query($req);
            while($mesDataAdherent=$resultat->fetchObject())
            {
                $lesAdherents[]=new Adherent($mesDataAdherent->nom_adherent,$mesDataAdherent->prenom_adherent,$mesDataAdherent->adresse_adherent,$mesDataAdherent->cp_adherent,$mesDataAdherent->ville_adherent,$mesDataAdherent->tel_adherent,$mesDataAdherent->num_adherent);
            }
        }
        catch (PDOException $e)
        {
            echo 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
            die();
        }
        return $lesAdherents;
    }
    // Renvoie un objet de connexion à la BD en initialisant la connexion au besoin
    private static function getBdd() {
        // Création de la connexion
        require("classes/localData.php");
        return new PDO($dns,$user,$mdp);
    }
}