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

function getProduit($id)
{
    global $mysqli;

    $reqPr = "SELECT `id`, `id_categories`, `nom`, `EAN`, `description`, `prix`, `image` FROM `produits` WHERE id = " . $id;
    $result = mysqli_query($mysqli, $reqPr);

    return mysqli_fetch_assoc($result);

}

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

/**
 * Fonction de création d'un produit - l'id n'existe pas encore
 * @param array $produit
 * @return int
 */
function postProduit($id_categories, $nom, $EAN, $description, $prix, $image)
{
    global $mysqli;

    $req = "INSERT INTO `produits`(`id_categories`, `nom`, `EAN`, `description`, `prix`, `image`) VALUES ($id_categories,'" . addslashes($nom) . "','" . addslashes($EAN) . "','" . addslashes($description) . "',$prix,'" . addslashes($image) . "')";
    echo "postProduit === " . $req;
    $result = mysqli_query($mysqli, $req);
    return mysqli_insert_id($mysqli); //$result; // mysqli_affected_rows($mysqli) >= 1;
}

/**
 * Fonction de mise à jour d'un produit existant - l'id existe
 * @param $id
 * @param $id_categories
 * @param $nom
 * @param $EAN
 * @param $description
 * @param $prix
 * @param $image
 * @return bool
 */
function putProduit($id, $id_categories, $nom, $EAN, $description, $prix, $image)
{
    global $mysqli;
    $req = "UPDATE `produits` SET `id_categories`=$id_categories,`nom`='" . addslashes($nom) . "',`EAN`='" . addslashes($EAN) . "',`description`='" . addslashes($description) . "',`prix`=$prix,`image`='$image' WHERE id=$id";
    var_dump($req);

    mysqli_query($mysqli, $req);
    return mysqli_affected_rows($mysqli) >= 1;
}