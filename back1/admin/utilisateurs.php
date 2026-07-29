<?php
require_once "../config/connexion.php";
require_once "../config/session.php";

verifierAdmin();


if(isset($_GET['action']) && $_GET['action'] === 'bannir' && isset($_GET['id'])){
    $stmt = $pdo->prepare("UPDATE utilisateur SET role = 'banni' WHERE id_utilisateur = ?");
    $stmt->execute([$_GET['id']]);
    header("location : utilisateurs.php");
    exit();
}

if (isset($_GET['action']) && $_GET['action'] === 'supprimer' && isset($_GET['id'])) {
    $stmt = $pdo->prepare("DELETE FROM utlisateur WHERE id_utlisateur = ?");
    $stmt->execute([$_GET['id']]);

    header('location: utlisateurs.php');
    exit();

}

$stmt = $pdo->query("SELECT id_utilisateur, nom, prenom, email, role, date_inscription FROM utilisateur ORDER BY date_inscription DESC");
$utilisateur = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($utilisateur as $u){
    echo "<tr>";
    echo "<td>". htmlspecialchars($u['nom']). "" . htmlspecialchars($u['prenom']). "</td>";
    echo "<td>". htmlspecialchars($u['email']). "</td>";
    echo "<td>". htmlspecialchars($u['role']). "</td>";
    echo "<td>". $u['date_insciption']. "</td>";
    echo "<td>
            <a href='?action=bannir$id=" . $u['id_utilisateur']. " 'Bannir</a> |
            <a href='?action=supprimer&id=" . $u['id_utilisateur']. "'onclick=\" return confirm('confirmer suppression?')\">supprimer</a>
            <td>";
            echo "<tr>";
            
        
}
?>