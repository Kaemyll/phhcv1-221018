<?php

// Mysql en localhost 3306
// example.com - user - mdp - bdd
global $mysqli;
$mysqli = mysqli_connect("localhost:3306", "root", "", "phpp-22-10-18");

function getProduits($id_categories=NULL) {

    global $mysqli;

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

function getCategorie($id_categories) {
    global $mysqli;
    
    // la requête sql des id de categories
    $req="SELECT id, nom FROM categories WHERE id=".$id_categories;
    
    // on exécute la requête (connexion à la base de données, requête)
    $result = mysqli_query($mysqli, $req);
    $categorie = mysqli_fetch_assoc($result);
    return $categorie;
};

?>