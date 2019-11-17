<!DOCTYPE html>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');
?>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/project.css" />
    <title>Evènements</title>
</head>

<body>
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
    echo ('<br> le mdp est : ' . $data['password']);
    echo ('<br> l\'adresse mail : ' . $data['email']);
    echo (' <br> le role est : ' . $data['id_Role']);
    echo (' <br> la localisation est : ' . $data['id_Localisation']);
    echo ('<br><img src=../' . $data['profile_picture'] . '>');

    $objet = (object) [
        "email" => $data['email'],
        "passwordd" => $data['password'],
        "role" => $data['id_Role'],
        "localisation" => $data['id_Localisation'],
        "id" => $data['id'],
        "profile_picture" => $data['profile_picture']
    ];
    $_SESSION['transfert_all'] = $objet; ?>

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h4 class="card-title"><?php echo ($data['name'] . '    ' . $data['first_name']) ?></h4>
                    <p class="card-text"><?php echo ($data['email'] . '<br>' . $data['password'] . '<br>' . $data['id_Role'] . '<br>' . $data['id_Localisation'])  ?></p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>

            <?php
            echo ("vous etes: " . ($data['id_Role']));
            if (($data['id_Role']) != "etudiant") {
                echo ('<a class="btn btn-dark" href="../event/recurrentEvent.php" role="button">Creer un evennement</a>');
            } else {
                echo ("nada");
            } ?>

</body>

</html>