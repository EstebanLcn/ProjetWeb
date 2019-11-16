<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/bootstrap/css/bootstrap.min.css">
    <script src="../assets/vendors/jquery-3.4.1.min.js"></script>

    <link rel="stylesheet" href="../assets/vendors/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <link rel="icon" href="../images/bde.png" />

    <title>Boutique</title>

    <script src="./JS/main.js"></script>

</head>

<body>
    <header>
        <?php include("menu.php") ?>
    </header>

    <div id="conteneur">
        <section>
            <div class="myform">
                <form class="myform" methode="get" action="boutique.php">
                    Trier :
                    <input name="sort" type="submit" value="ASC">
                    <input name="sort" type="submit" value="DESC">
                </form>
                <form class="myform" methode="get" action="boutique.php">
                    / Type :
                    <select onchange="this.form.submit()" name="sort">
                        <option value=""></option>
                        <option value="mug">mug</option>
                        <option value="pull">pull</option>
                        <option value="divers">divers</option>
                        <option value="stylo/crayon">stylo/crayon</option>
                        <option value="pot">pot</option>
                    </select>
                </form>
            </div>
            <div class=element>
                <div class="products">
                    <?php include("displayProducts.php"); ?>
                </div>
            </div>
        </section>
        <div class=element>
            <aside>
                BEST PRODUCTS : <br>
                <?php include("bestProducts.php"); ?>
                <br>
            </aside>
        </div>
    </div>

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