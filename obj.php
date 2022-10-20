<?php 

include_once 'include/functions/class.php';

echo 'Objet test';
// $id,$nom,$desc,$prix,$EAN,$image

$pr1=new Produit(1,'Produit 1','description 1', 5.5, '666111666','http://',1);
var_dump($pr1);
$pr1->description="test de nouvelle description";
var_dump($pr1);

$panier=new Panier();
var_dump($panier);

?>