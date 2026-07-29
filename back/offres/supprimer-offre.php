<?php
// back/offres/supprimer-offre.php
require_once '../config/connexion.php';
require_once '../config/session.php';
verifierConnexion();

$id = $_GET['id'];
$id_client = $_SESSION['id_utilisateur'];

$sql = "DELETE FROM offres WHERE id_offre = ? AND id_client = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id, $id_client]);

header("Location: mes-offres.html");
exit();
?>
