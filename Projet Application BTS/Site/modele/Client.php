<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class Client{
    
    private $idClient;
    private $nomClient;
    private $mailClient;
    
    public function __construct($unidClient, $unnomClient, $unmailClient){
        $this -> idClient = $unidClient;
        $this -> nomClient = $unnomClient;
        $this -> mailClient = $unmailClient;
    }
    
    public function get_idClient(){
        return $this -> idClient;
    }
    
    public function get_nomClient(){
        return $this -> nomClient;
    }
    
    public function get_mailClient(){
        return $this -> mailClient;
    }
    
    
}