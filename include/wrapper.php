<?php

    // vérification de l'existence de la variable $_GET['page']
    if (!isset($_GET['page'])) {$_GET['page']='home';};
    
    var_dump($_GET);
    switch($_GET['page']) {
        case 'produits':
            include('include/pages/produits/produits.php');
            break;
        case 'produit':
            include('include/pages/produit/produit.php');
            break;
        default:
            include('include/pages/home.html');
            break;
    }
?>