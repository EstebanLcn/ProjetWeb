<?php
require 'dbh.php';
$DB=new DB();
/*if(!isset($_SESSION)){
  session_start();
}*/
echo $_GET['title']."|";
echo $_GET['content']."|";
echo $_GET['price']."|";
echo $_GET['url']."|";
echo $_GET['startDate']."|";
echo $_GET['endDate']."|";
echo $_GET['recurrence']."|";

$query = $DB->db->prepare('CALL addOccurrenceEvent(:_title,:_content,:_price,:_url,:_start_date, :_end_date, :_recurrence)');
  $query->bindValue(':_title', $_GET['title'], PDO::PARAM_STR);
  $query->bindValue(':_content', $_GET['content'], PDO::PARAM_STR);
  $query->bindValue(':_price', $_GET['price'], PDO::PARAM_STR);
  $query->bindValue(':_url', $_GET['url'], PDO::PARAM_STR);
  $query->bindValue(':_start_date', $_GET['startDate'], PDO::PARAM_STR);
  $query->bindValue(':_end_date', $_GET['endDate'], PDO::PARAM_STR);
  $query->bindValue(':_recurrence', $_GET['recurrence'], PDO::PARAM_STR);
  echo $query->execute();

  header('location: recoverEvent.php');
?>