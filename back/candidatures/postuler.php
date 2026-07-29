<?php
// back/candidatures/postuler.php
require_once '../config/connexion.php';
require_once '../config/session.php';
verifierConnexion();

$id_offre = $_POST['id_offre'];
$message = $_POST['message'];
$id_freelance = $_SESSION['id_utilisateur'];

$sql = "INSERT INTO candidatures (id_offre, id_freelance, message, date_candidature, statut)
        VALUES (?, ?, ?, NOW(), 'en_attente')";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id_offre, $id_freelance, $message]);

echo "Candidature envoyée !";
?>
