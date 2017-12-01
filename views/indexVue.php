<?php
  include("template/header.php")
 ?>
<section class="container ">
<div class="card text-center m-3">
    <div class="card-header">
        Gerer
    </div>
    <div class="card-block">
        <h4 class="card-title">Catalogue livre</h4>
        <p class="card-text">Ajouter , editer , visualiser les stock livres disponibles .</p>
        <a href="controllers/Books.php" class="btn btn-success">Catalogue livres</a>
    </div>
    <div class="card-footer text-muted">
        listing books
    </div>
</div>
<div class="card text-center m-3">
    <div class="card-header">
        Gerer
    </div>
    <div class="card-block">
        <h4 class="card-title">Comptes clients</h4>
        <p class="card-text">Visualiser comptes clients et les livres emprunter .</p>
        <a href="controllers/Users.php" class="btn btn-success">Comptes client</a>
    </div>
    <div class="card-footer text-muted">
        listing customers
    </div>
</div>
</section>

 <?php
   include("template/footer.php")
  ?>
