<?php

// Mysql en localhost 3306
// example.com - user - mdp - bdd
$mysqli = mysqli_connect("localhost:3306", "root", "", "phpp-22-10-18");

$req="SELECT P.`id` AS `pid`, `id_categories`, P.`nom` AS `pnom`, `EAN`, `prix`, `description`, `image`, C.`nom` AS `cnom` FROM `produits` P, `categories` C WHERE P.`id_categories` = C.`id` AND C.`id` = 1;";

$result = mysqli_query($mysqli, $req);
while ($assoc=mysqli_fetch_assoc($result)) {
    var_dump($assoc);
};

?>