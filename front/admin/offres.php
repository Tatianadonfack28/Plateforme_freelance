<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des offres - Admin</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header>
        <h1>Modération des offres</h1>
        <nav>
            <a href="utilisateurs.php">Gestion des utilisateurs</a>
        </nav>
    </header>

    <main>
        <div class="grille-offres">
            <?php include "../../back/admin/offres.php"; ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 Plateforme Freelance</p>
    </footer>
    </body>
</html>