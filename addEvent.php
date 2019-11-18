<?php
require 'dbh.php';
$DB=new DB();

echo $_GET['title']."|";
echo $_GET['content']."|";
echo $_GET['price']."|";
echo $_GET['url']."|";
// récupération de tous les évènements

$query = $DB->db->prepare('CALL addOccurrenceEvent(:_title,:_content,:_price,:_url)');
  $query->bindValue(':_title', $_GET['title'], PDO::PARAM_STR);
  $query->bindValue(':_content', $_GET['content'], PDO::PARAM_STR);
  $query->bindValue(':_price', $_GET['price'], PDO::PARAM_STR);
  $query->bindValue(':_url', $_GET['url'], PDO::PARAM_STR);

  echo $query->execute();

  header('location: recoverEvent.php');
