<?php
require 'dbh.php';
$DB=new DB();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/project.css" />
    <link rel="stylesheet" href="css/projectFooter.css" />
    <link rel="stylesheet" href="css/recurrentEvent.css" />
    <title>Document</title>
</head>
<body>
<?php
include('header.php');

?>
<div id="container">
<h1 class="title_event">Création d'un événement</h1>
<img class="tiger" src="images/tiger.png" alt="logo_bde">
    <form method="get" action="addEvent.php" class="form_recu" >
    <div class="form-group col-md-9">
            Titre: <br/>
            <input type="text" value="" name="title" required class="form-control" /><br/>
           
            </div>
            <div class="form-group col-md-3">
            Prix: <br/>
            <input type="number" value="" name="price" min="0" max="1000" required class="form-control"/><br/>
            </div>
            <div class="form-group col-md-12">
            Description: <br/>
            <textarea name="content" value="content" required class="form-control"></textarea><br/>
            </div>
         <div class="form-group" id="descente">
            Photo: <br/>
            <input type="file" name="url" value=""  id="fileid" required><br/>
            
            <button class="btn btn-primary" type="submit" name="submit" id="button_valid">Submit form</button>
         </div>
          
    </form>
    </div>
    <?php
include('footer.php');
?>

</body>
</html>


