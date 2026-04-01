<?php 
    require "db.php";

    $id = $_GET["plaz_id"];
    //echo $id;

    $smazat = "DELETE FROM plazi WHERE id=$id";
    //$smazat = $conn->query($smazat);

    if ($conn->query($smazat)) {
        $alert = "Záznam byl úspěšně smazán";
        $barvicka = "color: green;";
    } else {
        $alert = "Tak teď nevim...";
        $barvicka = "color: red;";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smazání záznamu</title>
</head>
<body>
    <p style="<?= $barvicka;?>"><?= $alert;?></p>
    <a href="index.php"><button>Zpět na přehled plazů</button></a>
</body>
</html>