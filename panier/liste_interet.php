<?php
// debut session
session_start();

//connexion a la bdd 
try {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$term = $_GET['term'];

$requete = $bdd->prepare('SELECT name FROM article WHERE name LIKE :term'); // j'effectue ma requête SQL grâce au mot-clé LIKE
$requete->execute(array('term' => '%' . $term . '%'));

$array = array(); // on créé le tableau

while ($donnee = $requete->fetch()) // on effectue une boucle pour obtenir les données
{
    array_push($array, $donnee['name']); // et on ajoute celles-ci à notre tableau
}

echo json_encode($array); // il n'y a plus qu'à convertir en JSON
