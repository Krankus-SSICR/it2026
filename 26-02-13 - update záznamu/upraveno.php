<?php 
    require "pripojeni.php";
    $id = $_POST["id"];
    $nazev = $_POST["nazev"];
    $typ = $_POST["typ"];

    $edit_sql = "
        UPDATE kava
        SET
        nazev = '$nazev',
        typ = '$typ'
        WHERE id = $id;
    ";
    $edit_sql = $conn->query($edit_sql);
    if ($edit_sql === TRUE) {
        $info = "Záznam byl úspěšně upraven";
        $alert = "jo";
    } else {
        $info = "Jejda, něco se nepovedlo!";
        $alert = "ne";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úprava záznamu</title>
    <style>
        .jo {
            border: 3px solid green;
            color: green;
            margin: 2em;
            padding: 2em;
            width: fit-content;
        }
    </style>
</head>
<body>
    <div class="<?= $alert;?>">
        <?= $info;?>
    </div>
</body>
</html>