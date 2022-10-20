<?php
include_once 'include/functions/produits.functions.php';

if (isset($_POST['idProduit'])) {
    // soumission du formulaire produit
    if (is_numeric($_POST['idProduit'])) {
        // Update une entrée existante
        putProduit($_POST['idProduit'], $_POST['catProduit'], $_POST['nomProduit'], $_POST['eanProduit'], $_POST['prixProduit'], $_POST['descrProduit'], $_POST['urlImageProd']);
    } else {
        // Poster une nouvelle entrée
        $id = postProduit($_POST['catProduit'], $_POST['nomProduit'], $_POST['eanProduit'], $_POST['descrProduit'], $_POST['prixProduit'], $_POST['urlImageProd']);
        header('location: ?page=produit&action=edit&idp=' . $id);
    }
}

$categories = getAllCategories();

$produitSelectionne = null;
if (isset($_GET['idp']) && is_numeric($_GET['idp'])) {
    $produitSelectionne = getProduit($_GET['idp']);
}

// var_dump($produitSelectionne);
?>

<div id="produit-form">
    <h2>Edition de produit</h2>
    <form action="" method="POST">
        <?php
if ($produitSelectionne != null) {
    echo 'ID => ' . $produitSelectionne['id'] . '<br />';}

?>
        <input type="hidden" name="idProduit"
            value="<?=($produitSelectionne != null) ? $produitSelectionne['id'] : ''?>">

        <br />
        <label for="nomProduit">Nom du produit : </label>
        <input type="text" name="nomProduit" id="id_nomProduit"
            value="<?=($produitSelectionne != null) ? $produitSelectionne['nom'] : ''?>">
        <label for="catProduit">Catégorie</label>
        <select name="catProduit" id="id_catProduit"
            <?php echo ($produitSelectionne != null) ? $produitSelectionne['id_categories'] : '' ?>>
            <?php
foreach ($categories as $categorie) {
    echo '<option value="' .
        $categorie['id'] .
        '" ' .
        (($produitSelectionne != null && $produitSelectionne['id_categories'] == $categorie['id']) ? 'selected' : '') .
        '>' .
        $categorie['nom'] .
        '</option>';
}
?>
        </select>
        <hr />
        <div id="produit-form-content">
            <div>
                <label for="descrProduit">Description</label><br />
                <textarea name="descrProduit" id="id_descrProduit" cols="30"
                    rows="30"><?=($produitSelectionne != null) ? $produitSelectionne['description'] : ''?></textarea><br />
                <label for="eanProduit">Code-barre</label>
                <input type="text" name="eanProduit" id="id_eanProduit"
                    value="<?=($produitSelectionne != null) ? $produitSelectionne['EAN'] : ''?>"><br />
                <label for="prixProduit">Prix</label>
                <input type="number" name="prixProduit" id="id_prixProduit" min="0.01" step="0.01"
                    value="<?=($produitSelectionne != null) ? $produitSelectionne['prix'] : ''?>">
            </div>
            <div>
                <label for="urlImageProd">url image</label>
                <input type="text" name="urlImageProd" id="id_urlImageProd"
                    value="<?=($produitSelectionne != null) ? $produitSelectionne['image'] : ''?>">
                <hr />
                <img src="<?=($produitSelectionne != null) ? $produitSelectionne['image'] : ''?>" alt="" id="imageProd">
            </div>
        </div>
        <hr />
        <div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <button type="reset" class="btn btn-warning">Annuler</button>
        </div>
    </form>
</div>