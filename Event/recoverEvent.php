<?php
/*if(!isset($_SESSION)){
  session_start();
}*/
require 'dbh.php';
$DB = new DB();

$query = $DB->db->prepare('CALL showEvent()');

$query->execute();
$events = $query->fetchAll();
include('../header.php');
//affiche tous les events, remplis avec les données de l'évènement
var_dump($events);
var_dump($_SESSION);

foreach ($events as $event) :
  ?>
  <div class="col-md-6 ">
    <div class="card mb-4 shadow-sm">
      <?php echo "<img src='../images/" . $event['url'] . "' class='card-img-top' alt='Image'> "; ?>
      <div class="card-body">
        <p class="card-text"> <?= $event['name'] ?> </p>
        <div class="d-flex justify-content-between align-items-center" \>
          <div class="btn-group">
            <form class="myform" methode="get" action="participate.php">

              <input type="hidden" name="id_event" value='<?= $event['id__Event'] ?>'>

              <input name="participate" type="submit" value="<?php echo $_SESSION['user_name'] ?>">
            </form>
            <form method="get" action="addComment.php">
              <input type="hidden" name="id_event" value='<?= $event['id__Event'] ?>'>
              <input type="hidden" name="id_user" value='1'>
              <input type="text" name="content">
            </form>
            <?php
              //récupère tous les commentaires
              $query = $DB->db->prepare('CALL showComment(:_id_event)');
              $query->bindValue(':_id_event', $event['id'], PDO::PARAM_STR);
              $query->execute();
              $comments = $query->fetchAll();
              //affiche le contenu des commentaires    
              foreach ($comments as $comment) :
                ?>
              <p> <?= $comment['texte'] ?></p>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    <?php endforeach;  ?>