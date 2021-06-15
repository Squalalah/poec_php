<?php

require_once('../MODELE/localData.php');
// On commence par récupérer les champs
$id=htmlentities($_POST['id']);
//...Cours réalisé par Aurélien Martineau
try {
    // On se connecte à la base de données
    $maConnexion = new PDO($dns, $user, $mdp);
    ////on crée la requête sql de supression
    $req='delete from matiere where id=?;';
    $prep =$maConnexion->prepare($req);
    $prep->bindParam(1,$id);
    //on exécute la requête sql
    $prep->execute();
    }
    catch (PDOException $e) {
    echo 'Erreur avec la BD!: ' .$e->getMessage() .'<br/>';
    die();
    }

    header('Location: ../formDelete.php?message=1');