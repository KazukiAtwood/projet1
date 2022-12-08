<?php
 
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include("Client.php");

class Professionnels extends Client{
    
    private $nom_entreprise;
    private $fonction;
    private $tarifP;
    
    public function __construct($unidClient, $unnomClient, $unmailClient, $un_nom_entreprise, $une_fonction, $untarifP){
        parent:: __contruct($unidClient, $unnomClient, $unmailClient);
        $this -> nom_entreprise = $un_nom_entreprise;
        $this -> fonction = $une_fonction;
        $this -> tarifP = $untarifP;
    }
    
    public function get_nom_entreprise(){
        return $this -> nom_entreprise;
    }
    
    public function get_fonction(){
        return $this -> fonction;
    }
    
    public function get_tarifP(){
        return $this -> tarifP;
    }
    
    
}