<?php
// back/offres/creer-offre.php
require_once '../config/connexion.php';
require_once '../config/session.php';
verifierConnexion();

$titre = $_POST['titre'];
$description = $_POST['description'];
$categorie = $_POST['categorie'];
$prix = $_POST['prix'];
$id_client = $_SESSION['id_utilisateur'];

$sql = "INSERT INTO offres (titre, description, categorie, prix, date_publication, id_client)
        VALUES (?, ?, ?, ?, NOW(), ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$titre, $description, $categorie, $prix, $id_client]);

header("Location: mes-offres.html");
exit();
?>
