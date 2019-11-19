<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/inscription.css" />
    <title>inscription</title>
</head>
<header>
</header>

<body>
    <div class='conteneur'>
        <div class="card-header">
            <h3 id='titre'>Suppression d'article</h3>
        </div>
        <form method="post" action="suppArticles.php" autocomplete="on">
            <!-- Création du formulaire de d'inscription avec une redirection quand une action est effectuer-->
            <p>
                <label>nom : </label>
                <input class="form-control" name="name" required="required" type="text" placeholder="name" />
                <!-- Création d'un champ prenom -->
            </p>


            <input class="btn btn-dark" type="submit" value="Soumettre" />
            </p>
        </form>
        <label>Annuler ?</label>
        <!--Création de bouton qui nous renvoie vers connexion ou le home-->
        <a class="btn btn-warning" href="../connexion/profil.php" role="button">profil</a>
        <a class="btn btn-dark" href="../home.php" role="button">Home</a>
        </p>
    </div>
</body>

</html>