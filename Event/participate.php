<?php
require_once 'dbh.php';
session_start();

$DB = new DB();

var_dump($_GET['participate']);
var_dump($_GET['id_event']);



$query = $DB->db->prepare('INSERT INTO participate VALUES(:_id_event,(SELECT id FROM _user WHERE first_name=:_participate))
');
$query->bindValue(':_id_event', $_GET['id_event'], PDO::PARAM_STR);
$query->bindValue(':_participate', $_GET['participate'], PDO::PARAM_STR);

$query->execute();
