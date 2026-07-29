<!DOCTYPE html>
<html lang="fr">
    <head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../assets/css/style.css">
<title>publier une offre</title>

    </head>
    <body>
        <h1>publier une nouvelle offre</h1>
        
        <form action="../../back/offres/creer-offre.php" method="POST">
            
            <label for="titre">Titre de l'offre</label>
            <input type="text" id="titre" name="titre" required>

            <label for="categorie">categorie</label>
            <select id="categorie" name="categorie" required>
                <option value="">--choisir une categorie--</option>
                <option value="developpement">Développement web/logiciel</option>
                <option value="design">Design graphique/UI-UX</option>
                <option value="redaction">Rédaction/contenu</option>
                <option value="marketing">Marketing /communication</option>
                <option value="traduction">Traduction</option>
                <option value="autre">Autre</option>
            </select>

            <label for="description">Description</label>
            <textarea id="dsecription" name="description" required>

            <label for="prix"> Prix</label>
            <input type="number" id="prix" name="prix" required>

            <label for="date_limite">date limites de candidature</label>
            <input type="date" id="date_limite" name="date_limite" >
             
            
            <button type="submit">Publier l'offre</button>
        </form>
        <p><a href="../authentification/dashboard-client.html">Retour au tableau de bord</a></p>
    </body>
</html>