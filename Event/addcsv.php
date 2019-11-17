<?php
require 'dbh.php';
$DB = new DB();
var_dump($_GET['id__Event']);
/*
header("Content-type: text/csv");
header("Content-Disposition: attachment; filename=fichier.csv");
header("Pragma: no-cache");
header("Expires: 0");
*/

$query = $DB->db->prepare('CALL participateList(:_event)');
$query->bindValue(':_event', $_GET['id__Event'], PDO::PARAM_STR);
$query->execute();
$show = $query->fetchAll();
var_dump($show);
/*
while ($row =  $query->fetch(PDO::FETCH_ASSOC)) {
    echo implode(';', $row) . "\r\n";
}
exit();*/
