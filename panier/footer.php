<link rel="stylesheet" type="text/css" href="../css/style.css">

<div id="footer_menu">
    <ul>
        <div class="link_ref">

            <li class="link_ref"><a href="index.html"><img id="logo_bde" src="./image/bde.png"></i> </a></li>

            <li class="link_ref"><a href="propos.php">à propos</a></li>
            <li class="link_ref"><a href="contact.php">Contact</a></li>
            <li class="link_ref"><a href="boutique.php">Boutique</a></li>
            <li class="link_ref"><a href="accueil.php">Accueil</a></li>
        </div>
    </ul>
    <script src="assets/vendors/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="JS/app.js"></script>
    <script>
        $(document).ready(function() {
            $(".hamburger").on("click", function() {
                $("nav ul").toggleClass("menu");
            });

        });
    </script>
</div>