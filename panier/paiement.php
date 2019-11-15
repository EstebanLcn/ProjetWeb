<?php
include_once 'menu.php';
require_once '_header.php';


if (isset($_POST['check'])) {
    switch ($_POST['paiement']) {
        case 'paiement':
            echo "la commande a bien été effectuée";

            // Le message
            $message = "Le commande a bien été passée et le paiement bien effectué";

            // Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
            $message = wordwrap($message, 70, "\r\n");

            // Envoi du mail
            mail('testwampmail@gmail.com', 'Mon Sujet', $message);

            echo "<a href='panier.php'> retourner au panier </a>";
            for ($i = 1; $i <= 20; $i++) {
                if (isset($_SESSION['panier'])) {
                    unset($_SESSION['panier']);
                } else { }
            }
            break;

        default:
            echo "Erreur avec la commande";
            break;
    }
} else {
    echo "<script>alert(\" Veuillez acceptez les conditions de ventes ! \")</script>";
    echo "<a href='panier.php'>retourner au panier</a>";
}
