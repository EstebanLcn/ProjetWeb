<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');

$prenom = $_POST['firstname'];
$nom = $_POST['name'];
$email = $_POST['email']; //on vient cherchez et mettre dans une variable ce qui a était mit dans le champ email(qui contenait un name email)              
$motDePasse = $_POST['password'];
$photo = $_POST['photo'];
$campus = $_POST['campus'];
$statut = $_POST['statut'];
$MdpStatut = $_POST['MdpStatut'];

$requete2 = $bdd->prepare('SELECT COUNT(`first_name`) AS membre_valide FROM _user WHERE `first_name` = :prenom AND `name` = :nom OR `email` = :email'); //on vérifie si on est pas deja inscrit dans la bdd
$requete2->bindValue(':prenom', $_POST['firstname'], PDO::PARAM_STR);
$requete2->bindValue(':nom', $_POST['name'], PDO::PARAM_STR);
$requete2->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
$requete2->execute();
$data2 = $requete2->fetch();
$requete2->closeCursor();
if ($data2['membre_valide'] != 0) { // si on est  déja inscrit dans la bdd alors ...
    $var = "Ce membre existe déjà."; //on remplis notre message d'erreur
    header('location:inscription.php?var=' . $var); // on renvoie a la page inscription avec le message d'erreur
    exit();
} else {
    switch ($statut) {
        case "etudiant":
            $statut = '1'; //on transforme le status en nombre pour l'adapter a la bdd qui ne prend pas de chaine de caractère
            break;
        case "membre du BDE":
            if ($MdpStatut == "123456") { // On vérifie si l'utilisateur connait le mdp pour s'inscrire en tant que membre du BDES
                $statut = '2';
                break;
            } else {
                $var = "Mot de passe membre du BDE incorrect.";
                header('location:inscription.php?var=' . $var);
                exit();
            }
        case "personnel CESI":
            if ($MdpStatut == "123456789") {
                $statut = '3';
                break;
            } else {
                $var = "Mot de passe personel CESI incorrect.";
                header('location:inscription.php?var=' . $var);
                exit();
            }
        default: //si le champ est null on renvoi à la page d'inscription
            $var = "Veuillez choisir un statut.";
            header('location:inscription.php?var=' . $var);
            exit();
    }

    if ($campus != ' ') {
        switch ($campus) {
            case "Bordeaux":
                $campus = '1';
                break;
            case "Nancy":
                $campus = '2'; {
                    break;
                }
            case "Rouen": {
                    $campus = '3';
                    break;
                }
            default:
                $var = "Veuillez choisir un statut.";
                header('location:inscription.php?var=' . $var);
                exit();
        }
    }
    if (preg_match("`^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{6,}$`", $motDePasse)); // regex qui affiche mdp invalide si il n'y a pas au moins 6 caractère, une majuscule et des chiffres
    else {
        $var = "Mot de passe invalide";
        header('location:inscription.php?var=' . $var);
        exit();
    }

    $requete = $bdd->prepare('INSERT INTO _user (`name`,`first_name`,`password`,`email`,`profile_picture`,`id_Localisation`,`id_Role`) VALUES (:nom,:prenom,:motDePasse,:email,:photo,:campus,:statut)'); // requete qui permet d'insérer les valeur que nom,prenom etc dans la bdd
    $requete->bindValue(':nom', $nom, PDO::PARAM_STR);
    $requete->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $requete->bindValue(':motDePasse', $motDePasse, PDO::PARAM_STR);
    $requete->bindValue(':email', $email, PDO::PARAM_STR);
    $requete->bindValue(':photo', $photo, PDO::PARAM_STR);
    $requete->bindValue(':campus', $campus, PDO::PARAM_STR);
    $requete->bindValue(':statut', $statut, PDO::PARAM_STR);
    $requete->execute();
    $requete->closeCursor();
    header('Location: ../home.php');
    exit();
}
