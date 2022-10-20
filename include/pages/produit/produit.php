<?php
include_once 'include/functions/produits.functions.php';
$produit = getProduit($_GET['idp']);
?>

<div id="fiche-produit">
    <h2><?=$produit['nom']?></h2>
    <hr />
    <div class="horizontal-layout">
        <div class="produit-unique-image">
            <img class="img-responsive" src="<?=$produit['image']?>" alt="Image du produit" />
        </div>
        <div class="produit-unique-contenu">
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores deleniti enim, quaerat quia tempora
                tenetur! Atque reiciendis, autem dicta quibusdam hic amet consequatur officiis quo in impedit,
                distinctio fugiat nam.</h3>
            <div id="price"><?=$produit['prix'];?>€</div>
            <button type="button" class="btn btn-success">Ajouter</button>
        </div>
        <div class="produit-unique-bouton">
            <button type="button" class="btn btn-danger">Supprimer</button>
            <button type="button" class="btn btn-warning">Modifier</button>
        </div>
    </div>
</div>