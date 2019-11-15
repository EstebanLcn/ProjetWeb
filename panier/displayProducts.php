<?php
require_once '_header.php';
$products = $DB->query('SELECT * FROM article');

/*$bdd = new PDO(
    'mysql:host=localhost;dbname=prosit;charset=utf8',
    'root',
    ''
);*/

/*
foreach ($tab_Product as $product) :
    echo "<div class='displayprod'>
	<img src='" . "/" . $product['urlImage'] . "', class='prodpic' />
		<div class='price'> " . $product['prix'] . " € </div>
		<div class='description'> 
			" . $product['description'] . "
		</div>
	</div>";
endforeach;
*/


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