<?php

// Le message
$message = "Le commande a bien été passée et le paiement bien effectué";

// Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Envoi du mail
mail('testwampmail@gmail.com', 'Mon Sujet', $message);
