<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail de l'offre - Plateforme Freelance</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

    <header>
        <h1>Détail de l'offre</h1>
        <nav>
            <a href="liste-offres.php">Retour aux offres</a>
            <a href="../authentification/dashboard.html">Mon compte</a>
        </nav>
    </header>

    <main>
        <div class="detail-offre" id="conteneur-detail">
            <?php include "../../back/offres/voir-offre.php"; ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 Plateforme Freelance</p>
    </footer>

</body>
</html>