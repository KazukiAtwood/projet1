<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

function controleurPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "listehotel.php";
    $lesActions["liste"]= "listeHotel.php";
    $lesActions["detailhotel"] = "detailHotel.php";
    $lesActions["recherche"] = "rechercheHotel.php";
    $lesActions["connexion"] = "connextion.php";
    $lesActions["deconnexion"] = "deconnexion.php" ;
    $lesActions["profil"] = "monProfil.php";
    
    if(array_key_exists($action, $lesActions)){
        return $lesActions[$action];
    }
    else{
        return $lesActions["defaut"];
    }
    
}

?>