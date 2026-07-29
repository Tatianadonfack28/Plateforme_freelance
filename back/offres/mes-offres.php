<?php
// back/offres/mes-offres.php
require_once '../config/connexion.php';
require_once '../config/session.php';
verifierConnexion();

$id_client = $_SESSION['id_utilisateur'];

$sql = "SELECT * FROM offres WHERE id_client = ? ORDER BY date_publication DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id_client]);
$offres = $stmt->fetchAll();

foreach ($offres as $offre) {
    echo '<div class="offre">';
    echo '<h3>' . htmlspecialchars($offre['titre']) . '</h3>';
    echo '<p>' . htmlspecialchars($offre['prix']) . ' FCFA</p>';
    echo '<a href="supprimer-offre.php?id=' . urlencode($offre['id_offre']) . '">Supprimer</a>';
    echo '</div>';
}
?>
