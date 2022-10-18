<h2>Liste des produits</h2>
<hr />
<?php
    // création array produits
    $produits = [];

    // création array produit
    $produit = ['id'=>0, 'nom'=>'velo', 'prix'=>7500, 'image'=>'https://lapierre-shopware.accell.cloud/thumbnail/64/bb/9f/1648474576/E-Sensium%202.2%20MY21%20Web%20-%20View%20PNG_800x800.png'];

    // affichage contenu array $produit
    // print_r($produit);

    // ajout array $produit à array $produits
    // array_push($produits, $produit, $produit);

    // affichage instance simple array $produits
    //var_dump($produits);
?>

<table class="produit-liste">
    <thead>
        <tr>
            <th>image</th>
            <th>nom</th>
            <th>prix</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            for ($i=0; $i < count($produits); $i++) {
                $pr=$produits[$i];
            ?>
        <tr>
            <td class="produit-liste-image"><img src="<?= $pr['image'] ?>" alt="" /></td>
            <td class="produit-liste-nom"><?= $pr['nom'] ?></td>
            <td class="produit-liste-prix"><?php echo $pr['prix']; ?>€</td>
            <td>
                <button type="button" class="btn btn-warning">ajouter</button><br />
                <button type="button" class="btn btn-primary">voir</button><br />
            </td>

        </tr>
        <?php } ?>
    </tbody>
</table>