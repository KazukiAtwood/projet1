<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class Reservations{
    private $date_debut;
    private $duree;
    
    public function __construct($unedate_debut, $uneduree){
        $this -> date_debut = $unedate_debut;
        $this -> duree = $uneduree;
    }
    
    public function get_date_debut(){
        return $this -> date_debut;
    }
    
    public function get_duree(){
        return $this -> duree;
    }
    
    
}