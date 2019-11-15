<?php
/*if(!isset($_SESSION)){
  session_start();
}*/
require 'dbh.php';
$DB=new DB();

$query = $DB->db->prepare('CALL showEvent');
  $query->execute();
  $events = $query->fetchAll();  

//affiche tous les events, remplis avec les données de l'évènement

          foreach ( $events as $event): 
          ?>
            <div class="col-md-6 ">
            <div class="card mb-4 shadow-sm">
            <img src="../img/event/<?= $event['id'] ?>" class="card-img-top" alt='Image'>
              <div class="card-body">
              <p class="card-text"> <?= $event['name'] ?>  </p>
                <div class="d-flex justify-content-between align-items-center"\>
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Like</button>
                    <form method="post" action="comment.php">
                      <input type="hidden" name="id_event" value='<?php $event['id']?>' hide>
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
                      foreach($comments as $comment): 
                    ?>

                    <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">Commentaire</h5>
                    <h6 class="card-subtitle mb-2 text-muted">user name</h6>
                    <p class="card-text"> <?= $comment['texte'] ?></p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                  </div>
                </div>
                <?php endforeach; ?>
          <button type="button" class="btn btn-sm btn-outline-secondary">Plus</button> 
        </div>
        
      </div>
    </div>
  </div>
</div>
   <?php endforeach;  ?>  