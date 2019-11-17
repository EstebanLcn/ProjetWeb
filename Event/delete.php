<?php
require 'dbh.php';
$DB = new DB();
/*if(!isset($_SESSION)){
  session_start();
}*/
var_dump($_GET['id_event']);
var_dump($_GET['delete_comment']);
var_dump($_GET['delete']);
var_dump($_GET['id_comment']);

if (isset($_GET['delete_comment'])) {


    $comment = $DB->db->prepare('UPDATE _comment SET visibility = 0 WHERE id=:_id_comment');
    $comment->bindValue(':_id_comment', $_GET['id_comment'], PDO::PARAM_STR);
    $comment->execute();
    header('location: recoverEvent.php');
} else {
    echo "supp publication";

    $event = $DB->db->prepare('UPDATE _event SET visibility = 0 WHERE id=:_id_event');
    $event->bindValue(':_id_event', $_GET['id_event'], PDO::PARAM_STR);
    $event->execute();
    $comment = $DB->db->prepare('UPDATE _comment SET visibility = 0 WHERE id__Event=:_id_event');
    $comment->bindValue(':_id_event', $_GET['id_event'], PDO::PARAM_STR);
    $comment->execute();
    header('location: recoverEvent.php');
}
