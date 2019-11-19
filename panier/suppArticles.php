<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');

$_POST['name'];



$add = $bdd->prepare('DELETE FROM article WHERE name=:_name');
$add->bindValue(':_name', $_POST['name'], PDO::PARAM_STR);

$add->execute();

echo "<script>alert(\" l'article a bien été supprimé \")</script>";
echo "<a href='../connexion/profil.php'>retourner sur mon profil</a>";
