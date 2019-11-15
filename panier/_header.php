<?php
// MISE EN PLACE DE L'OBJET, initialisation de la BDD = nécessaire !
require 'db.class.php';
$DB = new DB();
require 'panier.class.php';
//initialisation du panier en lui envoyant la variable DB 
$panier = new panier($DB);
//
