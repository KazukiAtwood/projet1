<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class Chambres{
    
    private $id_relatifC;
    private $nomC;
    private $tarifC;
    
    public function __construct($unid_relatifC, $unnomC, $untarifC){
        $this -> id_relatifC = $unid_relatifC;
        $this -> nomC = $unnomC;
        $this -> tarifC = $untarifC;
    }
    
    public function get_id_relatifC(){
        return $this -> id_relatifC;
    }
    
    public function get_nomC(){
        return $this -> nomC;
    }
    
    public function get_tarifC(){
        return $this -> tarifC;
    }
    
    
}