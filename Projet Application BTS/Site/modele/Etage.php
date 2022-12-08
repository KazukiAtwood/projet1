<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include("Hotel.php");

class Etage{
    
    private $idEtage;
    
    public function __construct($unidEtage){
       $this -> idEtage = $unidEtage;
    }
    
    public function get_idEtage(){
        return $this -> idEtage;
    }
}