<?php

function getProduits($mysqli, $id_categories) {
    $req="SELECT P.`id` AS `pid`, `id_categories`, P.`nom` AS `pnom`, `EAN`, `prix`, `description`, `image`, C.`nom` AS `cnom` FROM `produits` P, `categories` C WHERE P.`id_categories` = C.`id` AND C.`id` = $id_categories;";
    $result = mysqli_query($mysqli, $req);
    $produits = [];
    while ($assoc=mysqli_fetch_assoc($result)) {
        array_push($produits, $assoc);
    };
    return $produits;
};

?>