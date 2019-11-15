<?php
require_once '_header.php';

if (isset($_GET['sort'])) {
    switch ($_GET['sort']) {
        case 'ASC':
            $products = $DB->query('SELECT * FROM article ORDER BY price ASC');
            break;
        case 'DESC':
            $products = $DB->query('SELECT * FROM article ORDER BY price DESC');
            break;
        case 'socket':
            $products = $DB->query('SELECT * FROM article WHERE type_article = "socket"');
            break;
        case 'pull':
            $products = $DB->query('SELECT * FROM article WHERE type_article = "pull"');
            break;
        case 'shoe':
            $products = $DB->query('SELECT * FROM article WHERE type_article = "shoe"');
            break;
        default:
            $products = $DB->query('SELECT * FROM article');
    }
} else {
    $products = $DB->query('SELECT * FROM article');
}
/*
if (isset($_GET['sort'])) {
    if ($_GET['sort'] == "ASC") {
        $products = $DB->query('SELECT * FROM article ORDER BY price ASC');
    } else if ($_GET['sort'] == "DESC") {
        $products = $DB->query('SELECT * FROM article ORDER BY price DESC');
    }
} else {
    $products = $DB->query('SELECT * FROM article');
}*/
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
    ?>