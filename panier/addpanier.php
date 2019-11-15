<?php
require '_header.php';
$json = array('error' => true);
if (isset($_GET['id'])) {
    $product = $DB->query('SELECT id FROM article WHERE id=:id', array('id' => $_GET['id']));
    if (empty($product)) {
        $json['message'] = "Ce produit n'existe pas.";
    };
    $panier->add($product[0]->id);
    // history::back permet de retourner d'un cran en arrière dans l'historique
    $json['error'] = false;
    $json['total'] = number_format($panier->total(), 2, ',', ' ');
    $json['count'] = $panier->count();
    $json['message'] = 'Le produit a bien été ajouté à votre panier.';
} else {
    $json['message'] = "Vous n'avez aucun article dans votre panier.";
}
//on affiche les données AJAX de notre JSON(il stocke les action d'ajout au panier)
echo json_encode($json);
