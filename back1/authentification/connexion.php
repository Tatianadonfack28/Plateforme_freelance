<?php
require_once "../config/connexion.php";
require_once "../config/session.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = trim($_POST['email']);
    $mot_de_passe = $_POST['mot_de_passe'];
    $stmt = $pdo->prepare("SELECT * FROM utilisateur WHERE email = ?");
    $stmt->execute([$email]);

    if (utilisateur && password_verify($mot_de_passe, $utilisateur['mot_de_passe'])){
        $_SESSION['id_utilisateur'] = $utilisateur['id_utilisateur'];
        $_SESSION['nom'] = $utilisateur['nom'];
        $_SESSION['prenom'] = $utilisateur['prenom'];
        $_SESSION['role'] = $utilisateur['role'];

        header("location: dashboard.php");
        exit();

    } else {
        header("location : connecion.php?erreur=1");
       
        exit();
    } 
    
} else {
        header("location: connexion.php");
        exit();
    
}
?>