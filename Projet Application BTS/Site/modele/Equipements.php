<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include("Hotel.php");

class Equipements{
    
    private $idE;
    private $nomE;
    private $description;
    
    public function __construct($unidE, $unnomE, $unedescriptionE){
        $this -> idE = $unidE;
        $this -> nomE = $unnomE;
        $this -> decriptionE = $unedescriptionE;
    }
    
    public function get_idE(){
        return $this -> idE;
    }
    
    public function get_nomE(){
        return $this -> nomE;
    }
    
    public function get_descriptionE(){
        return $this -> descriptionE;
    }
    
    
}