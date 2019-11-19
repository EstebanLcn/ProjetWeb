<?php
if (isset($comment['id'])) {

    $query = $DB->db->prepare('SELECT count(id_comment)AS test FROM `_like` WHERE id_comment=:_id_comment ORDER BY id_comment');
    $query->bindValue(':_id_comment', $comment['id'], PDO::PARAM_STR);

    $query->execute();
    $product = $query->fetchAll();
    foreach ($product as $product) :
        ?>
        <div class='singleArticle'> <?= $product['test'] ?>


        </div>


    <?php endforeach;
    } elseif (isset($event['id__Event']) && !isset($comment['id'])) {
        $query = $DB->db->prepare('SELECT count(id_Event)AS test FROM `_like` WHERE id_Event=:_id_Event ORDER BY id_Event');
        $query->bindValue(':_id_Event', $event['id__Event'], PDO::PARAM_STR);

        $query->execute();
        $product = $query->fetchAll();

        foreach ($product as $product) :
            ?>
        <div class='singleArticle'> <?= $product['test'] ?>

        </div>


<?php endforeach;
} ?>