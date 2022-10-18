<?php
    var_dump($_GET);
    switch($_GET['page']){
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