<?php
require 'dbh.php';
$DB = new DB();

var_dump($_GET['id_comment']);
var_dump($_GET['id_event']);
var_dump($_GET['participate']);
var_dump($_GET['like']);

//récupération de l'id User
$id_user = $DB->db->prepare('SELECT id FROM _user WHERE first_name=:_participate');
$id_user->bindValue(':_participate', $_GET['participate'], PDO::PARAM_STR);
$id_user->execute();
$id = $id_user->fetchAll();
var_dump($id[0]['id']);


if (isset($_GET['id_comment'])) {
    $type = "comment";

    $like = $DB->db->prepare('SELECT * FROM _like WHERE id_comment=:_id_comment');
    $like->bindValue(':_id_comment', $_GET['id_comment'], PDO::PARAM_STR);
    $like->execute();
    $verif = $like->fetchAll();
    var_dump(empty($verif));

    if (empty($verif)) {
        $test = 1;
    } else {
        for ($i = 0; $i < count($verif); $i++) {
            if ($verif[$i]['id_User'] == $id[0]['id']) {
                echo "<script>alert(\" Vous avez déjà like \")</script>";
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
    }
} elseif (isset($_GET['id_event'])) {
    $type = "event";
    $like = $DB->db->prepare('SELECT * FROM _like WHERE id_event=:_id_event');
    $like->bindValue(':_id_event', $_GET['id_event'], PDO::PARAM_STR);
    $like->execute();
    $verif = $like->fetchAll();
    var_dump($verif[0]['id_User']);
    if (empty($verif)) {
        $test = 1;
    } else {
        for ($i = 0; $i < count($verif); $i++) {
            if ($verif[$i]['id_User'] == $id[0]['id']) {
                echo "<script>alert(\" Vous avez déjà like \")</script>";
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
    }
}
var_dump($type);

var_dump($test);
if ($test == 1 && $type == "event") {
    $query = $DB->db->prepare('INSERT INTO _like VALUES((SELECT id FROM _user WHERE first_name=:_participate),:_id_event,"")');
    $query->bindValue(':_id_event', $_GET['id_event'], PDO::PARAM_STR);
    $query->bindValue(':_participate', $_GET['participate'], PDO::PARAM_STR);

    $query->execute();
    echo "<script>alert(\" like event terminée ! \")</script>";
    echo '
    <div class="lienHeader">
    <div class="hi"> <a href="recoverEvent.php"> Retourner à la liste des évènements !</a>  
    </div>';
    header("Location:recoverEvent.php");
} elseif ($test == 1 && $type == "comment") { {
        $query = $DB->db->prepare('INSERT INTO _like VALUES((SELECT id FROM _user WHERE first_name=:_participate),"",:_id_comment)');
        $query->bindValue(':_id_comment', $_GET['id_comment'], PDO::PARAM_STR);
        $query->bindValue(':_participate', $_GET['participate'], PDO::PARAM_STR);

        $query->execute();
        echo "<script>alert(\" like comment validé ! \")</script>";
        echo '
        <div class="lienHeader">
        <div class="hi"> <a href="recoverEvent.php"> Retourner à la liste des évènements !</a>  
        </div>';
        header("Location:recoverEvent.php");
    }
} else {
    header("Location:recoverEvent.php");
}
