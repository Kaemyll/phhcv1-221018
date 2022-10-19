<h2>Liste des produits</h2>
<hr />
<?php

// Mysql en localhost 3306
// example.com - user - mdp - bdd
$mysqli = mysqli_connect("localhost:3306", "root", "", "phpp-22-10-18");

include_once('produits.functions.php');

$produits = getProduits($mysqli, 2);
// var_dump($produits);

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
                <button type="button" class="btn btn-primary">voir</button>
            </td>

        </tr>
        <?php } ?>
    </tbody>
</table>