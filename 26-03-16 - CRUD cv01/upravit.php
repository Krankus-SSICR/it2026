<?php 
    require "db.php";

    $id = $_GET["plaz_id"];

    $vyber = "SELECT * FROM plazi WHERE id=$id";
    $vyber = $conn->query($vyber);
    $radek = $vyber->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upravit záznam - <?= $radek["rodove_jmeno"] . " " . $radek["druhove_jmeno"];?></title>
</head>
<body>
    <h2>Upravit záznam - <?= $radek["rodove_jmeno"] . " " . $radek["druhove_jmeno"];?></h2>
    <form action="uprava-hotovo.php" method="POST">
        <input type="hidden" value="<?= $id;?>" name="plaz_id">

        <label for="rod">Rodové jméno</label>
        <input type="text" id="rod" name="rodove_jmeno" value="<?= $radek["rodove_jmeno"];?>"><br><br>

        <label for="druh">Druhové jméno</label>
        <input type="text" id="druh" name="druhove_jmeno" value="<?= $radek["druhove_jmeno"];?>"><br><br>

        <label for="pocet">Počet</label>
        <input type="text" id="pocet" name="pocet" value="<?= $radek["pocet"];?>"><br><br>

        <input type="submit" value="Uložit změnu">
    </form><br>
    <a href="index.php"><button>Zpět na přehled plazů</button></a>
</body>
</html>