<?php
// back/offres/liste-offres.php
require_once '../config/connexion.php';

$sql = "SELECT * FROM offres ORDER BY date_publication DESC";
$stmt = $pdo->query($sql);
$offres = $stmt->fetchAll();

foreach ($offres as $offre) {
    echo '<div class="offre">';
    echo '<h3>' . htmlspecialchars($offre['titre']) . '</h3>';
    echo '<p>' . htmlspecialchars($offre['categorie']) . ' - ' . htmlspecialchars($offre['prix']) . ' FCFA</p>';
    echo '<a href="voir-offre.html?id=' . urlencode($offre['id_offre']) . '">Voir détails</a>';
    echo '</div>';
}
?>
