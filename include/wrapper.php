<?php

// vérification de l'existence de la variable $_GET['page']
if (!isset($_GET['page'])) {$_GET['page'] = 'home';}
;

// var_dump($_GET);
switch ($_GET['page']) {
    case 'produit':
        if (isset($_GET['action']) && $_GET['action'] == 'edit') {
            include 'include/pages/produit/produit.form.php';
            break;
        } else {
            include 'include/pages/produit/produit.php';
            break;
        }
        break;
    case 'produits':
        include 'include/pages/produits/produits.php';
        break;
    case 'categories':
        include 'include/pages/categorie/categories.php';
        break;
    default:
        include 'include/pages/home.html';
        break;
}
