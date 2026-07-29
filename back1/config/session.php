<?php
session_start();

function estConnecte() {
    return isset($_SESSION['id_utilisateur']);
}

function verifierConnexion(){
    if(!estConnecte()){
        header("location: "/authentication/connexion.php);
        exit();
    }
}

function verifierAdmin(){
    verifierConnexion();
    if($_SESSION['role'] != 'admin') {
        die("Acces refusé - Admin uniquement");
    }
}