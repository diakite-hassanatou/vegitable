<?php
session_start();
/**
 * Created by PhpStorm.
 * User: hdiakite
 * Date: 2015-09-08
 * Time: 23:40
 */
if(array_key_exists('filtre_tous', $_POST)){
    setcookie("filtre", "tous", time()+3600);
}elseif(array_key_exists('filtre_cat', $_POST)){
    setcookie("filtre", "categorie", time()+3600);
    setcookie("categorie_value", $_POST["categorie"], time()+3600);
}
    header("Location: produits.php");
    exit;