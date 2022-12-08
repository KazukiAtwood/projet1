<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class Dao{
    
    protected $db;
    
    public function __construct($PDO, $db){
        $this -> db = $db;
    }
    
    public function setDb(PDO $db) {
        $this-> db = $db;
   }

    public function getDb() {
      return $this->db;
   }
    
///   Fonctions pour obtenir les données des hotels   //////
   
function getHotelByIdH($idH) {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from hotel where idH=:idH");
        $req->bindValue(':idH', $idH, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function getHotels() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from hotel");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}



function getHotelsByNomH($nomH) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from hotel where nomH like :nomH");
        $req->bindValue(':nomH', "%".$nomH."%", PDO::PARAM_STR);

        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getHotelsByAdresse($voieAdrH, $cpH, $villeH) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from hotel where voieAdrH like :voieAdrH and cpH like :cpH and villeH like :villeH");
        $req->bindValue(':voieAdrH', "%".$voieAdrH."%", PDO::PARAM_STR);
        $req->bindValue(':cpH', $cpH."%", PDO::PARAM_STR);
        $req->bindValue(':villeH', "%".$villeH."%", PDO::PARAM_STR);
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

/////   Fonctions pour les données des clients   ////////

function getClients() {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from client");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getClientByMailClient($mailClient) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from client where mailClient=:mailClient");
        $req->bindValue(':mailClient', $mailClient, PDO::PARAM_STR);
        $req->execute();
        
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

////// Fonction pour les données des photos    /////////

function getPhotosByIdR($idP) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from photos where idP=:idP");
        $req->bindValue(':idP', $idP, PDO::PARAM_INT);

        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


/////   Fonction pour les données des critiques   //////

function getCritiquerByIdH($idH) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from critiquer where idH=:idH");
        $req->bindValue(':idR', $idH, PDO::PARAM_INT);
        
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

}