<?php
session_start();
if (isset($_SESSION['user_name'])) { //on vérifie si un utilisateur est connecter
    session_unset(); // enléve toute les variable
    session_destroy(); // détruit la session
    header('Location: ../home.php'); // redirection au home
    $var = " ";
    exit();
} else {
    echo 'Vous n\'étiez pas connecté.<br>';
    echo '<a href="connexion.php">connexion</a>';
}
