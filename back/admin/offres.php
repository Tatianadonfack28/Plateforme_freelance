<?php
// back/admin/offres.php
require_once '../config/connexion.php';
require_once '../config/session.php';
verifierAdmin();

$sql = "SELECT * FROM offres ORDER BY date_publication DESC";
$stmt = $pdo->query($sql);
$offres = $stmt->fetchAll();

foreach ($offres as $offre) {
    echo '<div class="offre">';
    echo '<h3>' . htmlspecialchars($offre['titre']) . '</h3>';
    echo '<a href="../offres/supprimer-offre.php?id=' . urlencode($offre['id_offre']) . '">Supprimer</a>';
    echo '</div>';
}
?>
