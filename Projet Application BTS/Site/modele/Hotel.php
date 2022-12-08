<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class Hotel{
    
    private $idH;
    private $nomH;
    private $numAdressH;
    private $voieAdressH;
    private $cprH;
    private $villeH;
    private $descriptionH;
    private $horairesH;
    
    public function __construct($unidH, $unnomH, $unnumAdressH, $unevoieAdressH, $uncprH, $unevilleH, $unedesriptionH, $unhoraireH) {
        $this -> idH = $unidH;
        $this -> nomH = $unnomH;
        $this -> numAdressH = $unnumAdressH;
        $this -> voieAdressH = $unevoieAdressH;
        $this -> cprH = $uncprH;
        $this -> villeH = $unevilleH;
        $this -> descriptionH = $unedesriptionH;
        $this -> horairesH = $unhoraireH;
    }
    
    public function get_idH(){
        return $this -> idH;
    }
    
    public function get_nomH(){
        return $this -> nomH;
    }
    
    public function get_num_adressH(){
        return $this -> numAdressH;
    }
    
    public function get_voieH(){
        return $this -> voieAdressH;
    }
    
    public function get_cprH(){
        return $this -> cprH;
    }
    
    public function get_villeH(){
        return $this -> villeH;
    }
}