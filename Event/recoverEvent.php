<?php
/*if(!isset($_SESSION)){
  session_start();
}*/
require 'dbh.php';
$DB = new DB();

$query = $DB->db->prepare('CALL showEvent()');
$query->execute();
$events = $query->fetchAll();
?>
<!DOCTYPE html>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');
?>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Profil</title>

</head>

<body>
  <header>
  </header>
  <?php

  //affiche tous les events, remplis avec les données de l'évènement
  foreach ($events as $event) :
    ?>
    <div class="col-md-6 ">
      <div class="card mb-4 shadow-sm">
        <?php echo "<img src='../images/" . $event['url'] . "' class='card-img-top' alt='Image'> "; ?>
        <div class="card-body">
          <p class="card-text"> <?= $event['name'] ?> </p>
          <div class="d-flex justify-content-between align-items-center" \>
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary">Like</button>
              <form method="get" action="addComment.php">
                <input type="hidden" name="id_event" value='<?= $event['id'] ?>'>
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
      </div>
    </div>
  <?php endforeach;  ?>
</body>

</html>