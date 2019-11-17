<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<?php
/*if(!isset($_SESSION)){
  session_start();
}*/
require 'dbh.php';
$DB = new DB();

$query = $DB->db->prepare('CALL showEvent()');

$query->execute();
$events = $query->fetchAll();
include('header.php');

//affiche tous les events, remplis avec les données de l'évènement

foreach ($events as $event) :
 
  ?>
  <div class="bigEvent">

  <div class="col-md-6 " id="yo">
    <div class="card mb-4 shadow-sm">
      <?php echo "<img src='../images/" . $event['url'] . "' class='card-img-top' alt='Image'> "; ?>
      <div>

<form class="myform" methode="get" action="delete.php">
<button name="delete" type="delete" value="delete">
  DELETE PUBLICATION
<input type="hidden" name="id_event" value='<?= $event['id__Event'] ?>'>
</form>
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
            l'utilisateur <?= $_SESSION['user_name']?> a écrit :  <?= $comment['texte'] ?> 
            
              <br></div>
              <div>
              <form class="myform" methode="get" action="delete.php">
<button name="delete_comment" type="delete_comment" value="delete_comment">
  DELETE COMMENTAIRE
<input type="hidden" name="id_event" value='<?= $event['id__Event'] ?>'>
<input type="hidden" name="id_comment" value='<?= $comment['id'] ?>'>

</form>
</div>
              
            <?php endforeach; ?>
          
      </div>
      </div>
      </div>
      </div>
    
    <?php endforeach;  ?>
    <footer>
  <?php include('footer.php'); ?>
</footer>
</body>

</html>
