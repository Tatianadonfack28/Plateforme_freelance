<?php
// back/candidatures/mes-candidatures.php
require_once '../config/connexion.php';
require_once '../config/session.php';
verifierConnexion();

$id_freelance = $_SESSION['id_utilisateur'];

$sql = "SELECT c.*, o.titre FROM candidatures c
        INNER JOIN offres o ON c.id_offre = o.id_offre
        WHERE c.id_freelance = ?
        ORDER BY c.date_candidature DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id_freelance]);
$candidatures = $stmt->fetchAll();

foreach ($candidatures as $c) {
    echo '<div class="candidature">';
    echo '<h3>' . htmlspecialchars($c['titre']) . '</h3>';
    echo '<p>Statut : ' . htmlspecialchars($c['statut']) . '</p>';
    echo '</div>';
}
?>
