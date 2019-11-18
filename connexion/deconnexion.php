<?php
session_start();
if (isset($_SESSION['user_name'])) { //on vérifie si un utilisateur est connecté
    session_unset(); // enléve toutes les variables
    session_destroy(); // détruit la session
    header('Location: ../home.php'); // redirection au home
    $var = " ";
    exit();
} else {
    echo 'Vous n\'étiez pas connecté.<br>';
    echo '<a href="connexion.php">connexion</a>';
}
