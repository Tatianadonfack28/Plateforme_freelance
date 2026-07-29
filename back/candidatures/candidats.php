<?php
// back/candidatures/candidats.php
require_once '../config/connexion.php';
require_once '../config/session.php';
verifierConnexion();

$id_offre = $_GET['id_offre'];

$sql = "SELECT c.*, u.nom, u.prenom, u.email FROM candidatures c
        INNER JOIN utilisateurs u ON c.id_freelance = u.id_utilisateur
        WHERE c.id_offre = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id_offre]);
$candidats = $stmt->fetchAll();

foreach ($candidats as $c) {
    echo '<div class="candidat">';
    echo '<p>' . htmlspecialchars($c['prenom']) . ' ' . htmlspecialchars($c['nom']) . ' (' . htmlspecialchars($c['email']) . ')</p>';
    echo '<p>' . htmlspecialchars($c['message']) . '</p>';
    echo '</div>';
}
?>
