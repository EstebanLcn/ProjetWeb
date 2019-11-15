<?php
include_once 'menu.php';
require_once '_header.php';

?>
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
    <h1><br> Nombre d'article : <?= $panier->count(); ?> </h1>
    <form method="post" action="panier.php">
        <?php
        $ids = array_keys($_SESSION['panier']);

        if (empty($ids)) {
            $products = array();
        } else {
            $products =  $DB->query('SELECT * FROM article WHERE id IN (' . implode(',', $ids) . ')');
        }
        foreach ($products as $product) :

            ?>
            <div class="row">
                <a href="#" class="img"> <img src="image/<?= $product->urlImage ?>"></a>
                <span class="name"><?= $product->name ?> </span>
                <span class="price"><?= number_format($product->price, 2, ',', ' ') ?>€ </span>

                <span class="quantity"><input type="text" value="<?= $_SESSION['panier'][$product->id]; ?>" name="panier[quantity][<?= $product->id ?>]" width="30"></span>
                <span class="subtotal"><?= number_format($product->price * 1.196, 2, ',', ' ') ?>€ </span>
                <span class="action">
                    <a href='panier.php?delPanier=<?= $product->id; ?>' class="del"><img src="image\deletebutton.png"></a>
                </span>

            </div>
        <?php endforeach; ?>
        <input type="submit" value="recalculer">
        <div class="rowtotal">
            Total (TVA) : <span class="total"><?= number_format($panier->total() * 1.196, 2, ',', ' ') ?>€</span>
        </div>

    </form>
    <footer>
        <?php include_once 'footer.php' ?>
    </footer>
</body>