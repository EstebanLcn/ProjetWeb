<?php require_once '_header.php' ?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="./assets/vendors/bootstrap/css/bootstrap.min.css">
    <script src="assets/vendors/jquery-3.4.1.min.js"></script>

    <link rel="stylesheet" href="./assets/vendors/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">

    <script src="./assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <title>Czone</title>
    <link rel="icon" href="./image/blacktree.png" />
    <script src="./JS/main.js"></script>
</head>


<body>

    <nav class="menu_priority">
        <div class="hamburger"> <i class="fa fa-bars fa-2x"></i></div>
        <div class="symbole"><a href="index.html"><i class="fas fa-tree"></i> </a></div>
        <div class="menu">
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="boutique.php">Boutique</a></li>
                <li><a href="contact.php">contact</a></li>
                <li><a href="login.php">se connecter</a></li>
                <li><a href="panier.php">panier</a></li>
                <li> <span class="items">ITEMS
                        <span id="count"><?= $panier->count(); ?></span>
                    </span></li>
                <li> <span class="letotal">
                        <span id="total"><?= number_format($panier->total(), 2, ',', ' ') ?></span>€
                    </span></li>

                <li> <input type="search" id="search" name="search" placeholder="Recherche..." autocomplete="off" />
                </li>
            </ul>

        </div>
    </nav>

</body>