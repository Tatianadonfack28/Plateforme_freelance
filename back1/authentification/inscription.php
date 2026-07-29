<?php
require_once "../config/connexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $email = trim($_POST[($email)]);
    $mot_de_passe = $_POST['mot_de_passe'];
    $role = $_POST['role'] ?? 'client';

    if(emply($nom) || emply($prenom) || empty($email) || empty($mot_de_passe)){
        die("Tous les champs sont obligatoires.");
    }

    $verif = $pdo->prepare("SELECT id_utilisateur FROM utilisatreur WHERE email = ?");
    $verif->execute([$email]);

    if($verif->rowCount() > 0){
        die("cet email est deja utilisé.");
    }

    $mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO utilisateur (nom,preom,email,mot_de_passe, role, date_inscription)
    VALUES(?,?,?,?,?, NOW() )");

    $stmt->execute([$nom, $prenom, $email, $mot_de_passe_hash, $role]);

    herder ("Location: connexion.php? inscription=ok");
    exit();
} else {
    header("Localtion: inscription.php");
    exit();
}
?>