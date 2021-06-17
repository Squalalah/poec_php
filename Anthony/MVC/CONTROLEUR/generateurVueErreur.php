<?php
$titre="Le wiki sur la lithothérapie";
$titreArticle="Page signalant une erreur";
$resumeArticle="Un certain nombre d'erreurs a été rencontré";
$resumeBasDePage="Wiki créé pour illustrer le modèle MVC en php";
ob_start();?>
<h2>Voici le message d'erreur : <?=$messageErreur ?> </h2>
<?php  $contenu= ob_get_clean(); ?>
<?php require("VUE/template.php");
?>
