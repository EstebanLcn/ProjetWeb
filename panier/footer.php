<link rel="stylesheet" type="text/css" href="../css/style.css">

<div id="footer_menu">
    <ul>
        <div class="link_ref">

            <li class="link_ref"><a href="index.html"><img id="logo_bde" src="../images/bde.png"></i> </a></li>

            <li class="link_ref"><a href="../contact_us.php">Contact</a></li>
            <li class="link_ref"><a href="boutique.php">Boutique</a></li>
            <li class="link_ref"><a href="../home.php">Accueil</a></li>
        </div>
    </ul>

    <script type="text/javascript" src="JS/app.js"></script>
    <script>
        $(document).ready(function() {
            $(".hamburger").on("click", function() {
                $("nav ul").toggleClass("menu");
            });
        });
    </script>
</div>