<?php 
    require "db.php";

    $id = $_POST["plaz_id"];
    $rodove_jmeno = $_POST["rodove_jmeno"];
    $druhove_jmeno = $_POST["druhove_jmeno"];
    $pocet = $_POST["pocet"];

    $uprava = 
    "UPDATE plazi
    SET
    rodove_jmeno='$rodove_jmeno',
    druhove_jmeno='$druhove_jmeno',
    pocet='$pocet'
    WHERE id=$id
    ";
    $uprava = $conn->query($uprava);

    if ($uprava === TRUE) {
        $alert = "Záznam byl úspěšně upraven.";
    } else {
        $alert = "Tak teď nevim.";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úprava zázamu</title>
</head>
<body>
    <p><?= $alert;?></p>
    <a href="index.php"><button>Zpět na přehled plazů</button></a>
</body>
</html>