<?php require '../base/header.php'; ?>

  <h1>Liste des produits</h1>

  <table class="table table-hover">

  <form action="" method="GET">
    <div>
      <label for="nom">Nom du produit</label>
      <input type="text" name="nom" id="nom" value="<?= $_GET['nom'] ?>">
    </div>

    <div class="actions">
      <input type="submit" value="Filtrer">
    </div>
  </form>

  <?php
    require_once '../../data.php';

    /** @var Product $product */
    foreach ($data as $product) { ?>
      <tr>
        <td><?= $product->getReference() ?></td>
        <td><?= $product->getPrice() ?>&nbsp;€</td>
      </tr>
      <?php
    }
  ?>
  </table>

<?php require '../base/footer.php'; ?>
