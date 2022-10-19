<?php

include_once 'include/functions/sql.php';

function getProduits($id_categories = null)
{
    global $mysqli;

    // la requête sql principale de produits
    $req = "SELECT P.`id` AS `pid`, `id_categories`, P.`nom` AS `pnom`, `EAN`, `prix`, `description`, `image`, C.`nom` AS `cnom` FROM `produits` P, `categories` C WHERE P.`id_categories` = C.`id`";

    // on vérifie si un paramètre id_categorie existe et est bien un nombre
    if ($id_categories != null && is_numeric($id_categories)) {
        $req = $req . " AND C.`id`=" . $id_categories;
    }

    // on exécute la requête (connexion à la base de données, requête)
    $result = mysqli_query($mysqli, $req);
    $produits = [];
    while ($assoc = mysqli_fetch_assoc($result)) {
        array_push($produits, $assoc);
    }
    ;
    return $produits;
};

function getCategorie($id_categories)
{
    global $mysqli;

    if (is_numeric($id_categories)) {
        // la requête sql des id de categories
        $req = "SELECT id, nom FROM categories WHERE id=" . $id_categories;
        // on exécute la requête (connexion à la base de données, requête)
        $result = mysqli_query($mysqli, $req);
        $categorie = mysqli_fetch_assoc($result);
        return $categorie;
    } else {
        return null;
    }

};

function getAllCategories()
{
    global $mysqli;

    $reqCat = "SELECT id, nom, tva FROM categories";
    $resultCat = mysqli_query($mysqli, $reqCat);
    $categories = [];
    while ($assocCat = mysqli_fetch_assoc($resultCat)) {
        array_push($categories, $assocCat);
    }

    return $categories;

};
