<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');

$_POST['name'];
$_POST['description'];
$_POST['price']; //on vient cherchez et mettre dans une variable ce qui a était mit dans le champ email(qui contenait un name email)              
$_POST['article'];
$_POST['url'];


$add = $bdd->prepare('INSERT INTO article(name,description,price,type_article,urlImage) VALUES (:_name,:_description,:_price,:_type_article,:_url)');
$add->bindValue(':_name', $_POST['name'], PDO::PARAM_STR);
$add->bindValue(':_description', $_POST['description'], PDO::PARAM_STR);
$add->bindValue(':_price', $_POST['price'], PDO::PARAM_STR);
$add->bindValue(':_type_article', $_POST['article'], PDO::PARAM_STR);

$add->bindValue(':_url', $_POST['url'], PDO::PARAM_STR);

$add->execute();

echo "<script>alert(\" l'article a bien été ajouté \")</script>";
echo "<a href='../connexion/profil.php'>retourner sur mon profil</a>";
