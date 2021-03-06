<?php
include_once 'menu.php';
require_once '_header.php';

?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/bootstrap/css/bootstrap.min.css">
    <script src="../assets/vendors/jquery-3.4.1.min.js"></script>

    <link rel="stylesheet" href="../assets/vendors/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">

    <script src="../assets/vendors/bootstrap/js/bootstrap.min.js"></script>

    <title>Panier</title>
    <link rel="icon" href="./image/blacktree.png" />
    <script src="./JS/main.js"></script>
</head>

<body>
    <h1 id=article_h1>Nombre d'article : <?= $panier->count(); ?><br> </h1>
    <div class="box">
        <form method="post" action="panier.php">
            <table class="tableau">
                <thead>
                    <tr>
                        <th>
                            <span class="name">Article picture</span>

                        </th>
                        <th>
                            <span class="name">Product Name</span>
                        </th>
                        <th>
                            <span class="price">Price</span>
                        </th>
                        <th>
                            <span class="quantity">Quantity</span>
                        </th>
                        <th>
                            <span class="subtotal">Subtotal</span>
                        </th>
                        <th>
                            <span class="action">Actions</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
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
                                <th>
                                    <a href="#" class="image"> <img class="my_img" src="image/<?= $product->urlImage ?>"></a>
                                </th>
                                <th>
                                    <span class="name"><?= $product->name ?> </span>
                                </th>
                                <th>
                                    <span class="price"><?= number_format($product->price, 2, ',', ' ') ?>€ </span>
                                </th>
                                <th>
                                    <span class="quantity"><input type="text" value="<?= $_SESSION['panier'][$product->id]; ?>" name="panier[quantity][<?= $product->id ?>]" width="30"></span>
                                </th>
                                <th>
                                    <span class="subtotal"><?= number_format($product->price * 1.196, 2, ',', ' ') ?>€ </span>
                                </th>
                                <th>
                                    <span class="action">
                                        <a href='panier.php?delPanier=<?= $product->id; ?>' class="del"><img class="my_img2" src="image\deletebutton.png"></a>
                                    </span>
                                </th>
                            </div>
                    </tr>

                <?php endforeach; ?>
                </tbody>
            </table>



            <br>
            <input class="btn btn-dark" type="submit" value="recalculer">
            <br>

            <table>
                <thead>
                    <tr>
                        <th>
                            Récapitulatif d'achat
                        </th>
                        <th>
                            Paiement
                        </th>
                        <th>
                            Acceptez les conditions générales de ventes
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>
                            <div class="rowtotal">
                                Total (TVA) : <span class="total"><?= number_format($panier->total() * 1.196, 2, ',', ' ') ?>€</span>
                            </div>
                        </th>
                        <th>
                            <input class="btn btn-success" type="submit" value="Paiement" OnClick="window.location.href=\'paiement.php\'">
                        </th>
                        <th>
                            <input type="checkbox" id="accept">
                            <label for="accept"></label>
                        </th>
                    </tr>
                </tbody>
            </table>
    </div>
    </form>
    <footer>
        <?php include_once 'footer.php' ?>
    </footer>
</body>