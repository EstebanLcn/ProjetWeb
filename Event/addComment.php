<?php
require 'dbh.php';
$DB = new DB();


echo $_GET['content'];
echo $_GET['id_event'];
echo $_GET['user_name'];

// récup id user
$id_user = $DB->db->prepare('SELECT id FROM _user WHERE first_name=:_user_name');
$id_user->bindValue(':_user_name', $_GET['user_name'], PDO::PARAM_STR);
$id_user->execute();
$id = $id_user->fetchAll();
var_dump($id[0]['id']);

// récupération de tous les commentaires
$query = $DB->db->prepare('CALL addComment(:_content,:_id_event,:_id_user)');
$query->bindValue(':_content', $_GET['content'], PDO::PARAM_STR);
$query->bindValue(':_id_event', $_GET['id_event'], PDO::PARAM_STR);
$query->bindValue(':_id_user', $id[0]['id'], PDO::PARAM_STR);

$query->execute();

$queri = $query->fetchAll();
header("Location:recoverEvent.php");
