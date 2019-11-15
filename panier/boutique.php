<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="./assets/vendors/bootstrap/css/bootstrap.min.css">
    <script src="assets/vendors/jquery-3.4.1.min.js"></script>

    <link rel="stylesheet" href="./assets/vendors/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">

    <script src="./assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <title>Czone</title>
    <link rel="icon" href="./image/blacktree.png" />
    <script src="./JS/main.js"></script>
</head>


<body>
    <header>
        <?php include("menu.php") ?>
    </header>
    <section>
        <div class="container">


        </div>
        <div class="products">
            <?php include("displayProducts.php"); ?>
        </div>


    </section>

    <footer><?php include_once 'footer.php' ?> </footer>
    <script>
        $(window).on("scroll", function() {
            if ($(window).scrollTop()) {
                $('nav').addClass('scroll');
            } else {
                $('nav').removeClass('scroll');
            }
        })
    </script>

</body>

</html>