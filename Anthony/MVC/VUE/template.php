<!doctype html>
<html>

  <head>
    <meta charset="utf-8">
    <link href="style/monStyle.css" rel="stylesheet" media="all" type="text/css">
    <title><?=$titre ?></title>
  </head>
<body>

  <div id="principal">
    <header>
      <a href="index.php"><h1 id="titreArticle"><?=$titreArticle ?></h1></a>
      <p><?=$resumeArticle?></p>
    </header>
    <div id="contenu">
    <?=$contenu  ?>
    </div> <!-- #contenu -->
<footer>
  <?= $resumeBasDePage ?>
</footer>
</div> <!-- #principal -->
</body>
</html>
