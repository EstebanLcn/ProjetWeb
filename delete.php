<?php
require 'dbh.php';
$DB = new DB();
/*if(!isset($_SESSION)){
  session_start();
}*/

/*
EXPLICATION :
je créer 2 vérifications : on supprime soit évent+commentaire(s) soit un seul commentaire à la fois
delete_comment c'est le bouton pour delete juste le commentaire 
delete c'est pour supprimer la publication
on procède de deux façon différentes : 
*/
if (isset($_GET['delete_comment'])) {
    // ici on supprime juste le commentaire

    $comment = $DB->db->prepare('UPDATE _comment SET visibility = 0 WHERE id=:_id_comment');
    $comment->bindValue(':_id_comment', $_GET['id_comment'], PDO::PARAM_STR);
    $comment->execute();
    header('location: recoverEvent.php');
} else {
    // ici on supprime l'évent et tous les commentaires associés 
    $event = $DB->db->prepare('UPDATE _event SET visibility = 0 WHERE id=:_id_event');
    $event->bindValue(':_id_event', $_GET['id_event'], PDO::PARAM_STR);
    $event->execute();
    $comment = $DB->db->prepare('UPDATE _comment SET visibility = 0 WHERE id__Event=:_id_event');
    $comment->bindValue(':_id_event', $_GET['id_event'], PDO::PARAM_STR);
    $comment->execute();
    header('location: recoverEvent.php');
}
