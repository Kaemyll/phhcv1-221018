<h2>Liste des catégories</h2>
<hr />

<div class="flex-container">

    <?php

include_once 'categories.functions.php';

$categories = getCategories();

foreach ($categories as $categorie) {
    ?>

    <div class="flex-category">
        <div class="category-id">ID : <?=$categorie['id']?></div>
        <div class="category-nom"><?=$categorie['nom']?></div>
        <div class="categorie-tva">TVA : <?=$categorie['tva']?>%</div>
        <div class="categorie-bouton"><a href="?page=produits&idcat=<?=$categorie['id']?>"><button type="button"
                    class="btn btn-primary">voir</button></a></div>
    </div>

    <?php
}?>

</div>