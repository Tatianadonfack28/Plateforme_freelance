<!DOCTYPE html>
<html lang="fr">
    <head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../assets/css/style.css">
<title>inscription generale</title>

    </head>
    <body>
        <h1>creer un compte</h1>
        
        <form action="../../back/authentification/inscription.php" method="POST">
            
            <label for="nom">Nomm complet</label>
            <input type="text" id="nom" name="nom" required>

            <label for="email">adresse Email</label>
            <input type="email" id="email" name="email" required>

            <label for="mot_de_passe">mot de passe</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe" required>

            <label for="confirmation_mot_de_passe"> confirmer le mot de passe</label>
            <input type="password" id="confirmation_mot_de_passe" name="confirmation_mot_de_passe" required>

            <fieldset>
                <legend>je m'incris en tant que:</legend>
                
                <input type="radio" id="role_client" name="role" value="client" required>
                <label for="role_client">client'(je publie des offres)</label>

                <input type="radio" id="role_freelance" name="role" value="freelance">
                <label for="role_freelance">frelance (je postule aux offres)</label>
            </fieldset>
            
            <button type="submit">s'inscrire</button>
        </form>
        <p>dejâ un compte? <a href="connexion.html">Se connecter</a></p>
    </body>
</html>