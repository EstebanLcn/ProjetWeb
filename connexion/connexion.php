<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/connexion.css" />
    <title>connexion</title>
</head>
<header>
</header>

<body id="bod">
    <div id="container">
        <div class="contenu">
            <form method="post" action="scriptConnexion.php" autocomplete="on">
                <!-- Création du formulaire de connexion avec une redirection quand une action est effectuer-->
                <h1 id=titre> Connexion </h1>
                <p>
                    <label>Email : </label>
                    <input class="form-control" name="email" required="required" type="email" placeholder="email" />
                    <!-- Création d'un champ email -->
                </p>
                <p>
                    <label>Mot de passe : </label>
                    <input class="form-control" name="password" required="required" type="password" placeholder="mot de passe" />
                </p>
                <p>
                    <input class="btn btn-dark" type="submit" value="Connexion" />
                </p>
            </form>

            <p>
                <?php
                echo $_GET['var']; //Si on a une erreur , on echo l'erreur qui est stocker dans la variable var
                ?>
            </p>
            <p class="cent">
                <label>Pas encore inscrit ?</label>
                <a class="btn btn-warning" href="inscription.php?var=" role="button">Inscription</a>
                <!--Redirection sur la page d'inscription-->
            </p>
            </section>
        </div>
    </div>
</body>
<footer>
</footer>

</html>