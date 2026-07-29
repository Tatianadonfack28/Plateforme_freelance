<?php
session_start();

function estConnecte(){
    return isset($_SESSION['id_utilisateur']);
}

function verifierConnexion(){
    if(!estConnecte()){
        header("Location: /authentification/connexion.html");
        exit();
    }
}

function verifierAdmin(){
    verifierConnexion();
    if($_SESSION['role'] != 'admin'){
        die("Acces refuse - Admin uniquement");
    }
}
?>
