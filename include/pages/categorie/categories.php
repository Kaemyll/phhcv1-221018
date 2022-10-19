<h2>Liste des catégories</h2>
<hr />
<?php

include_once 'include/functions/produits.functions.php';

$categories = getAllCategories();

foreach ($categories as $categorie) {
    ?>
    <div class="categories-titres">
        <h3>ID</h3>
        <h3>Nom de la catégorie</h3>
        <h3>TVA (%)</h3>
        <h3>Actions</h3>
    </div>
    <div class="categorie">
        <div class="categorie-id"><?=$categorie['id']?></div>
        <div class="categorie-nom"><?=$categorie['nom']?></div>
        <div class="categorie-tva"><?=$categorie['tva']?></div>
        <div class="categorie-bouton"><a href="?page=produits&id_categories=<?=$categorie['id']?>"><button type="button" class="btn btn-primary">voir</button></a></div>
    </div>
    <?php
}