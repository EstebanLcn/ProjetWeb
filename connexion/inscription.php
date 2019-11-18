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
            <h3 id='titre'>Inscription</h3>
        </div>
        <form method="post" action="scriptInscription.php" autocomplete="on">
            <!-- Création du formulaire d'inscription avec une redirection quand une action est effectuée-->
            <p>
                <label>Prenom : </label>
                <input class="form-control" name="firstname" required="required" type="text" placeholder="prenom" />
                <!-- Création d'un champ prenom -->
            </p>
            <p>
                <label>Nom : </label>
                <input class="form-control" name="name" required="required" type="text" placeholder="nom" />
            </p>
            <p>
                <label>Email : </label>
                <input class="form-control" name="email" required="required" type="email" placeholder="email" />
            </p>
            <p>
                <label for="inputPassword5">Mot de passe : </label>
                <input class="form-control" name="password" required="required" type="password" placeholder="mot de passe" />
                <small id="passwordHelpBlock" class="form-text text-muted ttc">
                    Votre mot de passe doit contenir des lettres et des chiffres,une majuscule , et ne doit de caractères spéciaux ou d'emoji.
                </small>
            </p>
            <p>
                <label>Photo de profil : </label>
                <input class="form-control" name="photo" type="text" placeholder="Photo de profil" />
                <small id="passwordHelpBlock" class="form-text text-muted">
                    Veuillez mettre un url pour l'image
                </small>
            </p>
            <p>
                <label>Campus : </label>
                <select name="campus" required="required" placeholder="campus" class="form-control">
                    <option>Bordeaux</option>
                    <option>Nancy</option>
                    <option>Rouen</option>
                    <option>Strasbourg</option>
                </select>
            </p>
            <p>
                <label>Statut : </label>
                <select name="statut" required="required" placeholder="campus" class="form-control">
                    <option>etudiant</option>
                    <option>membre du BDE</option>
                    <option>personnel CESI</option>
                </select>
            </p>
            <p>
                <label>Mot de passe statut* : </label>
                <input class="form-control" name="MdpStatut" type="password" placeholder="Mot de passe statut" />
            </p>
            <p>*Ne rien mettre si vous êtes étudiant.</p>
            <input class="btn btn-dark" type="submit" value="S'inscrire" />
            </p>
        </form>
        <p id=erreur>
            <?php
            if (isset($_GET['var'])) {
                echo $_GET['var']; //Si on a une erreur , on echo l'erreur qui est stockée dans la variable var
            }


            ?>
            <label>Déjà inscrit ?</label>
            <!--Création d'un bouton qui nous renvoie vers connexion ou le home-->
            <a class="btn btn-warning" href="connexion.php?var=" role="button">Connexion</a>
            <a class="btn btn-dark" href="../home.php" role="button">Home</a>
        </p>
    </div>
</body>

</html>