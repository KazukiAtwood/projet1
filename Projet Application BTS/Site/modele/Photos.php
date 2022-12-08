<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include("Hotel.php");

class Photos{
    
    private $idPhotos;
    private $chemin;
    private $idH;
    
    public function __construct($unidPhotos, $unchemin, $unidH){
        $this -> idPhotos = $unidPhotos;
        $this -> chemin = $unchemin;
        $this -> idH = $unidH;
    }
    
    public function get_idPhotos(){
        return $this -> idPhotos;
    }
    
    public function get_chemin(){
        return $this -> chemin;
    }
    
    
}