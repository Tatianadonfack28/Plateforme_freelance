<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toutes les offres - Plateforme Freelance</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

    <header>
        <h1>Toutes les offres disponibles</h1>
        <nav>
            <a href="../authentification/dashboard.html">Mon compte</a>
            <a href="creer-offre.html">Publier une offre</a>
        </nav>
    </header>

    <main>
        <div class="grille-offres" id="conteneur-offres">
            <?php include "../../back/offres/liste-offres.php"; ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 Plateforme Freelance</p>
    </footer>

</body>
</html>