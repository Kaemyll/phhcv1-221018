<h2>Liste des produits</h2>
<hr />

<?php
global $mysqli;

include_once 'produits.functions.php';

if (isset($_GET['idcat'])) {
    $categorie = getCategorie($_GET['idcat']);
    if ($categorie != null) {?>
<h4>categorie : <?php echo $categorie['nom']; ?></h4>
<?php
$produits = getProduits($_GET['idcat']);
    } else {?>
<h4>categorie : inexistante !</h4>
<?php
$produits = getProduits();
    }
} else {
    $produits = getProduits();
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
for ($i = 0; $i < count($produits); $i++) {
    $pr = $produits[$i];
    ?>
        <tr>
            <td class="produit-liste-image"><img src="<?=$pr['image']?>" alt="" width="256px" /></td>
            <td class="produit-liste-nom"><?=$pr['pnom']?></td>
            <td id="price"><?php echo $pr['prix']; ?>€</td>
            <td class="produit-liste-bouton">
                <button type="button" class="btn btn-warning">ajouter</button>
                <a href="?page=produit&idp<?=$pr['pid']?>"><button type="button"
                        class="btn btn-primary">voir</button></a>
                <a href="?page=produit&action=edit&idp=<?=$pr['pid']?>"><button type="button"
                        class="btn btn-success">editer</button></a>
            </td>

        </tr>
        <?php }?>
    </tbody>
</table>