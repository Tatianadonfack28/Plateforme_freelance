<?php
// back/offres/voir-offre.php
require_once '../config/connexion.php';

$id = $_GET['id'];

$sql = "SELECT * FROM offres WHERE id_offre = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$offre = $stmt->fetch();

echo '<h2>' . htmlspecialchars($offre['titre']) . '</h2>';
echo '<p>' . htmlspecialchars($offre['description']) . '</p>';
echo '<p>Catégorie : ' . htmlspecialchars($offre['categorie']) . '</p>';
echo '<p>Prix : ' . htmlspecialchars($offre['prix']) . ' FCFA</p>';
?>
