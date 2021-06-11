<?php require './base/header.php'; ?>

  <h1>Mon petit site PHP</h1>

  <pre>
site
| index.php
| pages
| | liste_produits.php
| | base
| | | header.php
| | | footer.php
  </pre>

  <p>Document root : <?= $_SERVER['DOCUMENT_ROOT'] ?></p>

<?php require './base/footer.php'; ?>
