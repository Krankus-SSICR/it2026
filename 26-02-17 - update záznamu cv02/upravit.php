<?php 
    require "pripojeni.php";

    $skate_id = $_GET["skate_id"];

    $skate = "SELECT * FROM skate WHERE id=$skate_id;";
    $skate = $conn->query($skate);
    $radek = $skate->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upravit záznam</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Úprava skateboardu</h2>
    <form action="upraveno.php" method="POST">
        <input type="hidden" value="<?= $skate_id;?>" name="skate_id">
        <div>
            <label for="znacka">Značka: </label>
            <input type="text" id="znacka" name="znacka" value="<?= $radek["znacka"];?>">
        </div>
        <div>
            <label for="model">Model: </label>
            <input type="text" id="model" name="model" value="<?= $radek["model"];?>">
        </div>
        <div>
            <label for="typ">Typ: </label>
            <input type="text" id="typ" name="typ" value="<?= $radek["typ"];?>">
        </div>
        <input type="submit" value="Upravit záznam">
    </form>
</body>
</html>