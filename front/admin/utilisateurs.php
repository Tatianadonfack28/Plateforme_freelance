<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion utilisateurs - Admin</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header>
        <h1>Gestion des utilisateurs</h1>
        <nav>
            <a href="offres.php">Gestion des offres</a>
        </nav>
    </header>

    <main>
        <table class="tableau-candidats">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php include "../../back/admin/utilisateurs.php"; ?>
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; 2026 Plateforme Freelance</p>
    </footer>
</body>
</html>