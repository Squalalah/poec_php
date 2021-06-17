<?php

//require '../modele/dal/DTOMineral.php';
$titre="Le wiki sur la lithothérapie";
$titreArticle="Les minéraux du wiki";
$resumeArticle="Voici les différents minéraux de ce wiki";
$resumeBasDePage="Wiki créé pour illustrer le modèle MVC en php";
$bdMin= new DTOMineral();
$lesMineraux=$bdMin->selectAll();
$racine="/siteweb/imie/modeliserObjetsMVC/modif8Final";
ob_start();
    foreach ($lesMineraux as $mineral){ ?>
      <article>
        <header>
          <h1 class="titreMineral"><a href="index.php?action=detailMineral&id=<?=$mineral->getMidid();?>"><?= strtoupper($mineral->getMiNom()) ?></a></h1>
          <h3>Composition chimique : <?=$mineral->getMicompositionchimique(); ?></h3>
        </header>
        <img width=88px src="images/<?=$mineral->getleSysCris()->getImage(); ?>"/>
        <table class="details">
          <tr>
            <th>Dureté</th><th>Densité</th><th>Clivage</th><th>Cassure</th><th>Trace</th><th>Eclat</th>
          </tr>
          <tr>
            <td><?= $mineral->getMiduretedeb(); ?> - <?= $mineral->getMiduretefin(); ?></td>
            <td><?= $mineral->getMidensitedeb(); ?> - <?= $mineral->getMidensitefin(); ?></td>
            <td><?= $mineral->getmiclivage(); ?></td>
            <td><?= $mineral->getMiCassure(); ?></td>
            <td><?= $mineral->getMitrace(); ?></td>
            <td><?= $mineral->getMieclat(); ?></td>
          </tr>
        </table>
      </article>
<?php
    }
    $contenu= ob_get_clean();
?>
<?php require("vue/template.php");
