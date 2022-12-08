<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include("Hotel.php");
include("Client.php");

class Critique{
    
    private $id_Critique;
    private $mailU;
    private $note;
    
    public function __construct($un_id_Critique, $unmail_CritiqueU, $unenoteCritique){
        $this -> id_Critique = $un_id_Critique;
        $this -> mail_CritiqueU = $unmail_CritiqueU;
        $this -> note_Critique = $unenoteCritique;
    }
    
    public function get_id_Critique(){
        return $this -> id_Critique;
    }
    
    public function get_mail_CritiqueU(){
        return $this -> mail_CritiqueU;
    }
    
    public function get_note_Critique(){
        return $this -> note_Critique;
    }
    
    
}