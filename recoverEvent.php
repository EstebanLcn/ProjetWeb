<?php
require 'dbh.php';
require 'connexion/connectionhelp.php';

if (!isset($_SESSION)) {
  session_start(); //on vérifie si session star n'a pas deja était , si ce n'est pas le cas on en fait une 
}


$DB = new DB();

$query = $DB->db->prepare('CALL showEvent()');

$query->execute();
$events = $query->fetchAll();
include('header.php');
//affiche tous les events, remplis avec les données de l'évènement
foreach ($events as $event) :

  ?>
  <div class="bigEvent">
    <link rel="stylesheet" href="css/recoverEvent.css" />
    <div class="col-md-6 ">
      <div class="card mb-4 shadow-sm">
        <?php echo "<img src='images/" . $event['url'] . "' class='card-img-top' alt='Image'> "; ?>
        <div>
          <?php

            $test = (array) $_SESSION['transfert_all'];
            if (($test['role']) == "membre du BDE") {

              echo ('<form class="myform" methode="get" action="delete.php">
                <button name="delete" type="delete" value="delete">
                  DELETE PUBLICATION
                <input type="hidden" name="id_event" value=' . $event['id__Event']  . '>
                </form>');
            } else {
              echo ('');
            } ?>
        </div>
        <div class="card-body">


          <p class="card-text"> <?= $event['name'] ?> </p>
          <div class="d-flex justify-content-between align-items-center" \>
            <div class="btn-group">

              <form class="myform" methode="get" action="participate.php">

                <input type="hidden" name="id_event" value='<?= $event['id__Event'] ?>'>
                <input name="participer" type="submit" value="Participer">
                <input name="participate" type="hidden" value="<?php echo $_SESSION['user_name'] ?>">

              </form>

              <form method="get" action="addcsv.php">

                <input name="export to csv" type="submit" value="export">
                <input name="id__Event" type="hidden" value="<?php echo  $event['id__Event'] ?>">

              </form>

              <form method="get" action="addComment.php">
                <input type="hidden" name="id_event" value='<?= $event['id__Event'] ?>'>
                <input name="user_name" type="hidden" value="<?php echo $_SESSION['user_name'] ?>">

                <input type="text" name="content">
              </form>
            </div>
          </div>

          <?php
            //récupère tous les commentaires
            $query = $DB->db->prepare('CALL showComment(:_id_event)');
            $query->bindValue(':_id_event', $event['id__Event'], PDO::PARAM_STR);
            $query->execute();
            $comments = $query->fetchAll();

            //affiche le contenu des commentaires    
            foreach ($comments as $comment) :
              ?>
            <div>
              <br>
              l'utilisateur <?= $_SESSION['user_name'] ?> a écrit : <?= $comment['texte'] ?>

              <br></div>
            <div>
              <?php
                  if (($test['role']) == "membre du BDE") {
                    echo ('<form class="myform" methode="get" action="delete.php">
                <button name="delete" type="delete" value="delete">
                  DELETE PUBLICATION
                  <input type="hidden" name="id_event" value=' . $event['id__Event'] . '>
                  <input type="hidden" name="id_comment" value=' . $comment['id'] . '>
              </form>');
                  } else {
                    echo ('');
                  } ?>
            </div>

          <?php endforeach; ?>

        </div>
      </div>
    </div>
  </div>
<?php endforeach;  ?>