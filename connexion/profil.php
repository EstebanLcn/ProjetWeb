<!DOCTYPE html>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/projectfooter.css" />
    <link rel="stylesheet" href="../css/project.css" />
    <link rel="icon" href="../images/bde.png" />
    <link rel="stylesheet" href="../css/profil.css" />
    <!--Ici on appelle tout nos fichiers css et boostrap-->
    <title>Profil</title>
</head>

<body>
    <header>
        <div class="high">
            <a href="../home.php"> <img class="icon" src="../images/bde.png" alt="logo_bde"></a>
            <!--Au clic sur l'icone sa nous renvoie vers le home-->
            <h1 class="hey">BDE Cesi Bordeaux</h1>
            <div class="inscription">
                <?php
                session_start();
                echo '<div><a href="deconnexion.php">Deconnexion</a></h5></div>';
                //on crée un bouton pour ce déconnecter
                ?>
            </div>
        </div>
    </header>
    <?php
    if (!isset($_SESSION)) {
        session_start(); //on vérifie si session star n'a pas deja était , si ce n'est pas le cas on en fait une 
    }

    $test = (array) $_SESSION['transfert']; //on transforme notre _SESSION['transfert'] en array pour faciliter l'exploitation
    $requete = $bdd->prepare('SELECT * FROM `_user` WHERE `email` = :test'); //on écrit notre requete
    $requete->bindValue(':test', $test['email'], PDO::PARAM_STR);
    $requete->execute(); // on éxécute notre requete
    $data = $requete->fetch();
    $requete->closeCursor();
    switch ($data['id_Localisation']) {
        case "1":
            $data['id_Localisation'] = 'Bordeaux';
            break;
        case "2":
            $data['id_Localisation'] = 'Nancy';
            break;
        case "3":
            $data['id_Localisation'] = 'Rouen';
            break;
        case "4":
            $data['id_Localisation'] = 'Strasbourg';
            break;
    } //On transforme nos id en chaine de caractére , pour plus de lisibilitée a l'affichage
    switch ($data['id_Role']) {
        case "1":
            $data['id_Role'] = 'etudiant';
            break;
        case "2":
            $data['id_Role'] = 'membre du BDE';
            break;
        case "3":
            $data['id_Role'] = 'personnel CESI';
            break;
    } //On transforme nos id en chaine de caractére , pour plus de lisibilitée a l'affichage
    $objet = (object) [
        "email" => $data['email'],
        "passwordd" => $data['password'],
        "role" => $data['id_Role'],
        "localisation" => $data['id_Localisation'],
        "id" => $data['id'],
        "profile_picture" => $data['profile_picture']
    ]; //on stocke toutes les données dans un object pour facilité accées au données que l'on a récupérer
    $_SESSION['transfert_all'] = $objet; ?>

            <div class="card cent">
                <div class="card-body">
                    <h4 class="card-title"><?php echo ($data['name'] . ' ' . $data['first_name']) ?></h4>
                    <p class="card-text"><?php echo ("adresse mail: " . $data['email'] . '<br>' . "mdp : " . $data['password'] . '<br>' . "role: " . $data['id_Role'] . '<br>' . "centre: " . $data['id_Localisation'])  ?></p>
                </div>
            </div>
            <!--On affiche nos données dans une card boostrap-->

            <?php
            if (($data['id_Role']) != "etudiant") {
                echo ('<a class="btn btn-dark" href="../recurrentEvent.php" role="button">Créer un évènement</a>');
                //Si l'utilisateur n'est pas un étudiant alors on affiche un bouton qui mène vers recurrentEvent.php
                echo ('<a class="btn btn-dark" href="../reportEvent.php" role="button">Signaler un évènement</a>');
            } ?>
            <br> <br>
            <footer class="jean">
                <a href="mentions_legales">Mentions légales</a>
                <a href="contact_us">Contactez-nous</a>
                <a href="#">Menu</a>
                <a href="home.php">@Home</a>

            </footer>
</body>

</html>