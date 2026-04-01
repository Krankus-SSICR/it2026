<?php 
    require "pripojeni.php";

    $skate_id = $_POST['skate_id'];
    $znacka = $_POST['znacka'];
    $model = $_POST['model'];
    $typ = $_POST['typ'];

    $skate_uprava = "
        UPDATE skate
        SET
        znacka = '$znacka',
        model = '$model',
        typ = '$typ'
        WHERE id = $skate_id;
    ";
    $skate_uprava = $conn->query($skate_uprava);

    if ($skate_uprava === TRUE) {
        $hlaska = "Záznam byl úspěšně upraven";
        $css = "stesti";
    } else {
        $hlaska = "Záznam se NEPODAŘILO upravit :(";
        $css = "smula";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skateboardy - upraveno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="<?= $css;?>">
        <p><?= $hlaska;?></p>
    </div>
</body>
</html>