<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
    <title>connexion</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    </head>
    <body>

        <h1>se connecter</h1>

        <form action="../../back authentification/connexion.php" method="POST">

            <label for="email">adresse Email</label>
            <input type="email" id="email" name="email" required>

            <label for="mot_de_passe">Mot de passe</label>
            <input type="password" id="mot_de_passe"  name="mot_de_passe" required>

            <button type="submit">Se connecter</button>

        </form>
        <p>pas encore de compte <a href="inscription.html">S'inscrire</a></p>
    </body>
</html>
