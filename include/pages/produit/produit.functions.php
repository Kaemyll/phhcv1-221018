<?php
include_once 'include/functions/sql.php';
function getProduit($id )
{
    global $mysqli;
    echo $req="SELECT `id`, `idcat`, `nom`, `EAN`, `prix`, `description`, `image` FROM `produits` WHERE id=".$id;
    $result=mysqli_query($mysqli,$req);
    return mysqli_fetch_assoc($result);
}

function postProduit($idcat,$nom,$ean,$prix,$description,$img){
    global $mysqli;
   
     $req="INSERT INTO `produits`(`idcat`, `nom`, `EAN`, `prix`, `description`, `image`) VALUES ($idcat,'".addslashes($nom)."','".addslashes($ean)."',$prix,'".addslashes($description)."','$img')";
//var_dump($req);
    $result=mysqli_query($mysqli,$req);
    return mysqli_insert_id($mysqli);//$result;// mysqli_affected_rows($mysqli)>=1;//?true:false;
}
function putProduit($id,$idcat,$nom,$ean,$prix,$description,$img){
    global $mysqli;
    $req="UPDATE `produits` SET `idcat`=$idcat,`nom`='".addslashes($nom)."',`EAN`='".addslashes($ean)."',`prix`=$prix,`description`='".addslashes($description)."',`image`='$img' WHERE `id`=$id";
    //var_dump($req);
    mysqli_query($mysqli,$req);
    /*
    $stmt = mysqli_prepare($mysqli, "UPDATE `produits` SET `idcat`=?,`nom`=?,`EAN`=?,`prix`=?,`description`=?,`image`=? WHERE `id`=?");
    mysqli_stmt_bind_param($stmt, 'issfssi',$idcat,$nom,$ean,$prix,$description,$img,$id);
    mysqli_stmt_execute($stmt);
    */

    
    //$result=mysqli_execute_query($mysqli,$req,[$idcat,$nom,$ean,$prix,$description,$img,$id]);

    return  mysqli_affected_rows($mysqli)==1;
}
?>