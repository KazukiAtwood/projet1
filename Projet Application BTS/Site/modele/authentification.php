<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include_once "Dao.php";

function login($mailClient, $mdpClient) {
    if (!isset($_SESSION)) {
        session_start();
    }

    $util = getClientByMailClient($mailClient);
    $mdpBD = $util["mdpClient"];

    if (trim($mdpBD) == trim(crypt($mdpClient, $mdpBD))) {
        // le mot de passe est celui de l'utilisateur dans la base de donnees
        $_SESSION["mailClient"] = $mailClient;
        $_SESSION["mdpClient"] = $mdpBD;
    }
}   
    
function logout() {
    if (!isset($_SESSION)) {
        ession_start();
    }
    unset($_SESSION["mailClient"]);
    unset($_SESSION["mdpClient"]);
}
    
function getMailClientLoggedOn(){
    if (isLoggedOn()){
        $ret = $_SESSION["mailClient"];
    }
    else {
        $ret = "";
    }
    return $ret;       
}

function isLoggedOn() {
    if (!isset($_SESSION)) {
        session_start();
    }
    $ret = false;

    if (isset($_SESSION["mailClient"])) {
        $util = getClientByMailClient($_SESSION["mailClient"]);
        if ($util["mailClient"] == $_SESSION["mailClient"] && $util["mdpClient"] == $_SESSION["mdpClient"]
        ) {
            $ret = true;
        }
    }
    return $ret;
}

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog principal de test
    header('Content-Type:text/plain');


    // test de connexion
    login("test@bts.sio", "sio");
    if (isLoggedOn()) {
        echo "logged";
    } else {
        echo "not logged";
    }

    // deconnexion
    logout();
}
?>
