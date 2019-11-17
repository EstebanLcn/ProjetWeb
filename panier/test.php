<!doctype html>
<html lang="fr">

<head>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#search").autocomplete({
                source: "liste_interet.php",
                minLength: 2
            });
        });
    </script>
</head>


<body>

    <input type="search" id="search" name="search" placeholder="Recherche..." />

</body>