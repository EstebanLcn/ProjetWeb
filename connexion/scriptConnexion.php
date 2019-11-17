<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');

$objet = (object) [
    "email" => $_POST['email'],
    "passwordd" => $_POST['password'],

];
$_SESSION['transfert'] = $objet;

$email = $_POST['email']; //on vient cherchez et mettre dans une variable ce qui a était mit dans le champ email(qui contenait un name email)
$passwordd = $_POST['password'];

if (isset($_SESSION['user_name'])) { //on vérifie si un utilisateur est connecter
    header('Location: ../home.php');
    exit();
} else {
    $requete = $bdd->prepare('SELECT first_name AS membre_valide FROM _user WHERE `email` = :email AND `password` = :passwordd'); // requete qui regarde si le mdp et l'email que l'on a mit est dans la bdd
    $requete->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $requete->bindValue(':passwordd', $_POST['password'], PDO::PARAM_STR);
    $requete->execute();
    $data = $requete->fetch();
    $requete->closeCursor();
    var_dump($data['membre_valide']); // affichage de ce que renvoie notre requete
    if ($data['membre_valide'] != '') { // on vérifie que le résultat de la requete n'est pas null
        $_SESSION['user_name'] = $data['membre_valide'];
        header('Location: ../home.php');
        //var_dump($_SESSION['transfert']);
        exit();
    } else {
        $var = "Mot de passe et / ou email incorrect.";
        header('location:connexion.php?var=' . $var);
        exit();
    }
}
