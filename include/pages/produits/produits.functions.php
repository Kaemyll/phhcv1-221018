<?php

function getProduits($mysqli, $id_categories=NULL) {
    // la requête sql principale de produits
    $req="SELECT P.`id` AS `pid`, `id_categories`, P.`nom` AS `pnom`, `EAN`, `prix`, `description`, `image`, C.`nom` AS `cnom` FROM `produits` P, `categories` C WHERE P.`id_categories` = C.`id`";
    
    // on vérifie si un paramètre id_categories existe et est bien un nombre
    if($id_categories!=NULL && is_numeric($id_categories)) {
        $req=$req." AND C.`id`=".$id_categories;
    }

    // on exécute la requête (connexion à la base de données, requête)
    $result = mysqli_query($mysqli, $req);
    $produits = [];
    while ($assoc=mysqli_fetch_assoc($result)) {
        array_push($produits, $assoc);
    };
    return $produits;
};

function getCategorie($mysqli, $id_categories) {
    // la requête sql des id de categories
    $req="SELECT * FROM `categories` WHERE `id`=".$id_categories;
    
    // on exécute la requête (connexion à la base de données, requête)
    $result = mysqli_query($mysqli, $req);
    $categorie = mysqli_fetch_assoc($result);
    return $categorie;
};

?>