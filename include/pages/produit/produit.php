<?php
    $produit = ['id'=>0, 'nom'=>'vélo', 'prix'=>7500, 'image'=>'https://lapierre-shopware.accell.cloud/thumbnail/64/bb/9f/1648474576/E-Sensium%202.2%20MY21%20Web%20-%20View%20PNG_800x800.png'];
?>

<div id="fiche-produit">
    <h2><?= $produit['nom'] ?></h2>
    <hr />
    <div class="horizontal-layout">
        <div class="produit-unique-image">
            <img class="img-responsive" src="<?= $produit['image'] ?>" alt="Image du produit" />
        </div>
        <div class="produit-unique-contenu">
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores deleniti enim, quaerat quia tempora
                tenetur! Atque reiciendis, autem dicta quibusdam hic amet consequatur officiis quo in impedit,
                distinctio fugiat nam.</h3>
            <div id="price"><?= $produit['prix']; ?>€</div>
            <button type="button" class="btn btn-success">Ajouter</button>
        </div>
        <div class="produit-unique-bouton">
            <button type="button" class="btn btn-danger">Supprimer</button>
            <button type="button" class="btn btn-warning">Modifier</button>
        </div>
    </div>
</div>