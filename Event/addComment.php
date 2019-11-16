<?php
require 'dbh.php';
$DB=new DB();


echo $_GET['content'];
echo $_GET['id_event'];
echo $_GET['id_user'];

$query = $DB->db->prepare('CALL addComment(:_content,:_id_event,:_id_user)');
  $query->bindValue(':_content', $_GET['content'], PDO::PARAM_STR);
  $query->bindValue(':_id_event', $_GET['id_event'], PDO::PARAM_STR);
  $query->bindValue(':_id_user', $_GET['id_user'], PDO::PARAM_STR);

  $query->execute();
  header("Location:recoverEvent.php");
?>