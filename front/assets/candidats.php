<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidats de l'offre - Plateforme Freelance</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

    <header>
        <h1>Candidats pour cette offre</h1>
        <nav>
            <a href="mes-offres.html">Retour à mes offres</a>
        </nav>
    </header>

    <main>
        <table class="tableau-candidats">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php include "../../back/candidatures/candidats.php"; ?>
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; 2026 Plateforme Freelance</p>
    </footer>

</body>
</html>