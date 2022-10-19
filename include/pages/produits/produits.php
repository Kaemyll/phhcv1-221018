<h2>Liste des produits</h2>
<hr />
<?php

global $mysqli;

include_once('produits.functions.php');

$categorie = getCategorie($_GET['id_categories']);

// on récupère la liste des produits
if(isset($_GET['id_categories'])) {
    $produits = getProduits($_GET['id_categories']);?>
<h4>Catégorie affichée : <?php echo $categorie['nom']; ?></h4>
<?php
} else {
    $produits = getProduits($mysqli);
}

// var_dump($produits);
// var_dump($categorie);

?>

<table class="produit-liste">
    <thead>
        <tr>
            <th>IMAGE</th>
            <th>NOM</th>
            <th>PRIX</th>
            <th>ACTIONS</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            for ($i=0; $i < count($produits); $i++) {
                $pr=$produits[$i];
            ?>
        <tr>
            <td class="produit-liste-image"><img src="<?= $pr['image'] ?>" alt="" width="256px" /></td>
            <td class="produit-liste-nom"><?= $pr['pnom'] ?></td>
            <td id="price"><?php echo $pr['prix']; ?>€</td>
            <td class="produit-liste-bouton">
                <button type="button" class="btn btn-warning">ajouter</button>
                <a href="?page=produit&idp<?= $pr['pid'] ?>"><button type="button"
                        class="btn btn-primary">voir</button></a>
            </td>

        </tr>
        <?php } ?>
    </tbody>
</table>