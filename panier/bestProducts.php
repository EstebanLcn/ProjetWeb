<?php
require_once '_header.php';
$products = $DB->query('SELECT * FROM store 
INNER JOIN article ON article.id = store.id
ORDER BY quantity DESC LIMIT 3');



foreach ($products as $product) :
    ?>
    <div class='singleArticle'> <?= $product->name ?>
        <img class='image' src="image/<?= $product->urlImage ?>" alt=''>

        <div class='articleContent'>
            <h3><?php $product->description ?></h3>

            <div class='price'> <?= number_format($product->price, 2, ',', ' ') ?> € </div>
            <a href="addpanier.php?id=<?= $product->id; ?>" class='add addPanier'> add to cart</a>
        </div>
    </div>


<?php
endforeach;

?>