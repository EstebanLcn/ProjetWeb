<!DOCTYPE html>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');
?>
<html>

<head>
    <meta charset="utf-8" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/projectfooter.css" />
    <link rel="stylesheet" href="../css/project.css" />
    <link rel="icon" href="../images/bde.png" />
    <link rel="stylesheet" href="../css/profil.css" />
    <title>Home</title>
</head>

<body>
    <header>
        <div class="high">
            <a href="../home.php"> <img class="icon" src="../images/bde.png" alt="logo_bde"></a>

            <h1 class="hey">BDE Cesi Bordeaux</h1>
            <div class="inscription">
                <?php
                session_start();
                if (isset($_SESSION['user_name'])) {
                    echo '<div> <h5><a href="connexion/profil.php">' . $_SESSION['user_name']  . '</a> |  <a href="connexion/deconnexion.php">Deconnexion</a></h5></div>';
                } else {
                    echo '
                <div >
                <div> <a href="connexion/mention.php"> S\'inscrire</a>  |  <a href="connexion/connexion.php?var=">Se connecter</a>
                </div>';
                }
                ?>
            </div>
        </div>
    </header>
    <?php
    if (!isset($_SESSION)) {
        session_start();
    }

    $test = (array) $_SESSION['transfert'];
    $requete = $bdd->prepare('SELECT * FROM `_user` WHERE `email` = :test');
    $requete->bindValue(':test', $test['email'], PDO::PARAM_STR);
    $requete->execute();
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
    }
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
    }
    $objet = (object) [
        "email" => $data['email'],
        "passwordd" => $data['password'],
        "role" => $data['id_Role'],
        "localisation" => $data['id_Localisation'],
        "id" => $data['id'],
        "profile_picture" => $data['profile_picture']
    ];
    $_SESSION['transfert_all'] = $objet; ?>

            <div class="card cent">
                <div class="card-body">
                    <h4 class="card-title"><?php echo ($data['name'] . ' ' . $data['first_name']) ?></h4>
                    <p class="card-text"><?php echo ("adresse mail: " . $data['email'] . '<br>' . "mdp : " . $data['password'] . '<br>' . "role: " . $data['id_Role'] . '<br>' . "centre: " . $data['id_Localisation'])  ?></p>
                </div>
            </div>

            <?php
            if (($data['id_Role']) != "etudiant") {
                echo ('<a class="btn btn-dark" href="../event/recurrentEvent.php" role="button">Creer un evennement</a>');
            } ?>
            <footer class="jean">
                <a href="mentions_legales">Mentions légales</a>
                <a href="contact_us">Contactez-nous</a>
                <a href="#">Menu</a>
                <a href="home.php">@Home</a>

            </footer>
</body>

</html>