<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mes offrres publiées</title>
    <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>

  <h1> Mes offres publiées</h1>

  <a href="creer-offres.html">+ Publier une nouvelle offre</a>

  <table>
    <thead>
        <tr>
            <th>Titre</th>
            <th>Catégorie</th>
            <th>Prix</th>
            <th>Date limite</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php include "../../back/offres/mes-offres.php";?>
    </tbody>
  </table>
  <p><a href="../authentification/dashboard-client.html">Retour au tableau de bord</a></p>
</body>
</html>    