<?php
require 'dbh.php';
$DB=new DB();


header("Content-type: text/csv");
header("Content-Disposition: attachment; filename=fichier.csv");
header("Pragma: no-cache");
header("Expires: 0");

$query = $bdd->prepare('CALL participateList(:event)');
$query->bindValue(':_event', $_GET['event'], PDO::PARAM_STR);
$query->execute();

while ($row =  $requete->fetch(PDO::FETCH_ASSOC)) {
    echo implode(';', $row) . "\r\n";
}
exit();

?>