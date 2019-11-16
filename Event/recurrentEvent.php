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
    <title>Document</title>
</head>
<body>
    <form method="get" action="addEvent.php" >
            Titre: <br/>
            <input type="text" value="" name="title" required /><br/>
            Description: <br/>
            <textarea name="content" value="content" required></textarea><br/>
            Prix: <br/>
            <input type="number" value="" name="price" min="0" max="1000" required /><br/>
            photo: <br/>
            <input type="file" name="url" value="" required><br/>
            <input type="submit" name="submit"/>
    </form>
</body>
</html>


