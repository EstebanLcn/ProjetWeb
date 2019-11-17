<?php
require_once 'dbh.php';
session_start();

$DB = new DB();


$id_user = $DB->db->prepare('SELECT id FROM _user WHERE first_name=:_participate');
$id_user->bindValue(':_participate', $_GET['participate'], PDO::PARAM_STR);
$id_user->execute();
$id = $id_user->fetchAll();


$requete = $DB->db->prepare('SELECT id__User from participate WHERE id=:_id_event');
$requete->bindValue(':_id_event', $_GET['id_event'], PDO::PARAM_STR);
$requete->execute();
$user = $requete->fetchAll();

/*
$query = $DB->db->prepare('INSERT INTO participate VALUES(:_id_event,(SELECT id FROM _user WHERE first_name=:_participate))
');
$query->bindValue(':_id_event', $_GET['id_event'], PDO::PARAM_STR);
$query->bindValue(':_participate', $_GET['participate'], PDO::PARAM_STR);

$query->execute();
*/

for ($i = 0; $i < count($user); $i++) {
    if ($user[$i]['id__User'] == $id[0]['id']) {
        echo "<script>alert(\" Vous êtes déjà inscrit ! \")</script>";
        echo '
        <div class="lienHeader">
        <div class="hi"> <a href="recoverEvent.php"> Retourner à la liste des évènements !</a>  
        </div>';
        $test = 0;
        break;
    } else {
        $test = 1;
    }
}
if ($test == 1) {
    $query = $DB->db->prepare('INSERT INTO participate VALUES(:_id_event,(SELECT id FROM _user WHERE first_name=:_participate))');
    $query->bindValue(':_id_event', $_GET['id_event'], PDO::PARAM_STR);
    $query->bindValue(':_participate', $_GET['participate'], PDO::PARAM_STR);

    $query->execute();
    echo "<script>alert(\" inscription terminée ! \")</script>";
    echo '
    <div class="lienHeader">
    <div class="hi"> <a href="recoverEvent.php"> Retourner à la liste des évènements !</a>  
    </div>';
} else { }
