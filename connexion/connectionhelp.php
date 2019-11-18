<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');

if (!isset($_SESSION)) {
    session_start(); //on vérifie si session start n'a pas deja était , si ce n'est pas le cas on en fait une 
}

$test = (array) $_SESSION['transfert']; //on transforme notre _SESSION['transfert'] en array pour faciliter l'exploitation
$requete = $bdd->prepare('SELECT * FROM `_user` WHERE `email` = :test'); //on écrit notre requête
$requete->bindValue(':test', $test['email'], PDO::PARAM_STR);
$requete->execute(); // on éxécute notre requête
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
$_SESSION['transfert_all'] = $objet;
