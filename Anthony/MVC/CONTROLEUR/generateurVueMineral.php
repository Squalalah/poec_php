<?php
try{
if (isset($_GET['id']))
{
  $id=intval($_GET['id']);
  if($id<>0)
  {
    $bdMin= new DTOMineral();
    $mineral=$bdMin->selectById($id);
    if(!empty($mineral))
    {
    $racine="/siteweb/imie/modeliserObjetsMVC/modif8Final/";
    $titre="Le wiki sur la lithothérapie";
    $titreArticle="Le minéral sélectionné du wiki appartient au groupe ".$mineral->getLeGroupe()->getGrnom();
    $resumeArticle="Voici les commentaires sur ce groupe : ".$mineral->getLeGroupe()->getGrcommentaire();
    $resumeBasDePage="Wiki créé pour illustrer le modèle MVC en php";
    ob_start();?>
          <article>
            <header>
              <h1 class="titreMineral"><?= strtoupper($mineral->getMiNom()) ?></h1>
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
          <h2>Spécimens associés à ce minéral : </h2>
    <?php
    $bdSpec= new DTOSpecimen();
    $lesSpecimens=$bdSpec->selectByMidid($id);
    if ($lesSpecimens=="")
    {
      echo "<h3>Pas de spécimen associé à ce minéral</h3>";
    }
    else
    {
    foreach ($lesSpecimens as $specimen){ ?>
      <article>
        <img width=88px src="images/<?=$specimen->getSpurlimage(); ?>"/>
        <table class="details">
          <tr>
            <th>Longueur</th><th>Largeur</th><th>Hauteur</th><th>Poids</th><th>Commentaire</th>
          </tr>
          <tr>
            <td><?= $specimen->getSplongueur();?></td>
            <td><?= $specimen->getSplargeur(); ?></td>
            <td><?= $specimen->getSphauteur(); ?></td>
            <td><?= $specimen->getSppoids(); ?></td>
            <td><?= $specimen->getSpcommentaire(); ?></td>
          </tr>
        </table>
        <br/>
      </article>
<?php
    }
  }
        $contenu= ob_get_clean();
    ?>
    <?php require("vue/template.php");
  }
  else {
      throw new Exception("Identifiant incorrect pour ce mineral");
  }
  }
  else {
    throw new Exception("Identifiant incorrect pour le mineral");
  }
}
else {
  throw new Exception("Aucun identifiant pour le mineral");
}
}
catch(Exception $e)
{
  $messageErreur=$e->getMessage();
  require("controler/generateurVueErreur.php");
}
