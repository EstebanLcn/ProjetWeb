<!DOCTYPE html>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');
?>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>
</head>

<body><?php
        session_start();
        var_dump($_SESSION['transfert']);
        $transfert = array($_SESSION['transfert']);
        $test = (array) $_SESSION['transfert'];
        var_dump($test['email']);

        echo ('adresse :' . $test['email']);
        $requete = $bdd->prepare('SELECT * FROM `_user` WHERE `email` = \'thibaud@gmail.com\'');
        $requete->bindValue(':test', '$test', PDO::PARAM_STR);
        $requete->execute();
        $data = $requete->fetch();
        $requete->closeCursor();
        echo ('<br> le mdp est :' . $data['password']);
        echo ('<br> l\'adresse mail :' . $data['email']);
        echo (' <br> le role est :' . $data['id_Role']);
        echo (' <br> la localisation est :' . $data['id_Localisation']);

        $objet = (object) [
            "email" => $data['email'],
            "passwordd" => $data['password'],
            "role" => $data['id_Role'],
            "localisation" => $data['id_Localisation']
        ];
        $_SESSION['transfert_all'] = $objet;
        var_dump($_SESSION['transfert_all']);
        ?>
</body>

</html>