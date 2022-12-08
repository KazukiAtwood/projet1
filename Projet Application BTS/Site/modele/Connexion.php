<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

define('DB_HOST','localhost'); // Adresse de la base, généralement localhost
define('DB_NAME','hotel.sql');    // Nom de la base de données
define('DB_USER','bonjour');    // Nom de l'utilisateur MySQL
define('DB_PASS','aurevoir');    // Mot de passe de l'utilisateur

class Connexion {
    static private $login= "root";
    static private $mdp= "";
    static private $bd= "hotel.sql";
    static private $serveur= "localhost";
    
    /**
     * Constructeur défini en privé pour le rendre inaccessible
     */
    private function __construct($login, $mdp, $bd, $serveur) {    
        $this -> login = $login;
        $this -> mdp = $mdp;
        $this -> bd = $bd;
        $this -> serveur = $serveur;
    }
    /**
     * Methode magique de destruction de l'instance MySQL
     */
    public function connexion(){
    try {
        $connect = new PDO("mysql:host=$this->serveur;dbname=$this-> bd", $this->login, $this->mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return "test".$connect;
    } catch (PDOException $e) {
        print "Erreur de connexion PDO " . $e->getMessage();
        die();
    }
    if(!$connect){
        die('Erreur : '.mysqli_connect_error());
    }
    echo 'Connexion réussie';
    }
    
   /**
    * Méthode magique pour rétablir toute connexion de base de données 
    * qui aurait été perdue durant la linéarisation
    */
    public function __wakeUp( ) {
        // Vérification de la connexion
        if(self::$oInstance instanceof self) {
                throw new MySQLException();
        }
        // Correction de la reference
        self::$oInstance = $this;
    }
    
    /**
     * Méthode magique pour l'appel des fonctions de l'objet PDO quand 
     * elles ne sont pas définies dans la classe
     * 
     * @param type $method
     * @param type $params
     */
    public function __call($method, $params) {
        if(self::$oPDO == NULL){
            self::__construct();
        }
        
        return call_user_func_array(array(self::$oPDO, $method), $params);
    }
    
   /**
    * Fournit l'unique instance du Singleton
    *
    * @return    MySQL
    */
    static public function getInstance(){
        // Verification que l'instance n'a pas déja ete initialisée
        if(!(self::$oInstance instanceof self)){
            self::$oInstance = new self();
        }
        // Retour de l'instance unique
        return self::$oInstance;
    }  
}