<?php 
    require "pripojeni.php";
    $nazev = $_GET["nazev"];
    $typ = $_GET["typ"];
    $id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úprava záznamu</title>
</head>
<body>
    <h2>Úprava záznamu</h2>
    <form action="upraveno.php" method="POST">
        <input type="hidden" name="id" value="<?= $id;?>">
        <div>
            <label for="nazev">Název kávy:</label>
            <input type="text" id="nazev" name="nazev" value="<?= $nazev;?>">
        </div>
        <div>
            <label for="typ">Typ kávy:</label>
            <input type="text" id="typ" name="typ" value="<?= $typ;?>">
        </div>
        <input type="submit" value="Upravit záznam">  
    </form>
</body>
</html>