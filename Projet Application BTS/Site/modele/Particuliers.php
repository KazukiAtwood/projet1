<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include("Client.php");

class Particuliers extends Client{
    
    private $formule;
    private $nombre;
    
    public function __construct($unidClient, $unnomClient, $unmailClient, $uneformule, $unnombre){
        parent:: __construct($unidClient, $unnomClient, $unmailClient);
        $this -> formule = $uneformule;
        $this -> nombre = $unnombre;
    }
    
    public function get_formule(){
        return $this -> formule;
    }
    
    public function get_nombre(){
        return $this -> nombre;
    }
    
    
}