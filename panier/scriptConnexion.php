<?php
// Adapter dbname et mot de passe si besoin
$bdd = new PDO(
    'mysql:host=localhost;dbname=prosit;charset=utf8',
    'root',
    ''
);

// Récupération des données utilisateurs
$pseudo = $_POST['pseudo'];
$motDePasse = $_POST['motDePasse'];
// Requête préparée pour empêcher les injections SQL
$requete = $bdd->prepare("SELECT pseudo FROM utilisateurs WHERE pseudo=:pseudo
AND motDePasse=:motdepasse");
// Liaison des variables de la requête préparée aux variables PHP
$requete->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
$requete->bindValue(':motdepasse', $motDePasse, PDO::PARAM_STR);
// Exécution de la requête
$requete2 = $bdd->prepare("SELECT pseudo FROM utilisateurs WHERE pseudo=:pseudo AND statutAdmin = 1 AND motDePasse=:motdepasse");
$requete2->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
$requete2->bindValue(':motdepasse', $motDePasse, PDO::PARAM_STR);


$requete->execute();
$requete2->execute();


if ($requete2->fetch() == NULL) {

    echo $requete->fetch() ? 'Connexion réussie.' : 'Connexion échouée';
} else {

    header('Location: cart.php');
}

// Fermeture de la connexion
$requete->closeCursor();
$requete2->closeCursor();
