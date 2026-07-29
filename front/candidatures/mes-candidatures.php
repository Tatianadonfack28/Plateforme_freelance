<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes candidatures - Plateforme Freelance</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header>
        <h1>Mes candidatures envoyées</h1>
        <nav>
            <a href="../authentification/dashboard.php">Retour au tableau de bord</a>
        </nav>
    </header>

    <main>
        <table class="tableau-candidats">
            <thead>
                <tr>
                    <th>Offre</th>
                    <th>Mon message</th>
                    <th>Date</th>
                </tr>
            </thead>
                <tr>
                    <th>Offre</th>
                    <th>Mon message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php include "../../back/candidatures/mes-candidatures.php"; ?>
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; 2026 Plateforme Freelance</p>
    </footer>
</body>
</html>