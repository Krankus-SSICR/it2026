<?php require('db.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklad kávy - přehled</title>
</head>
<body>
    <h2>Sklad kávy</h2>
    <?php
    $vyber = "SELECT * FROM kava";
    $vyber = $conn->query($vyber);
    ?>
    <table>
        <tr>
            <th>Název</th>
            <th>Typ</th>
            <th>Smazat</th>
            <th>Upravit</th>
        </tr>
        <?php while($radek = $vyber->fetch_assoc()):?>
            <tr>
                <td><?= $radek['nazev'];?></td>
                <td><?= $radek['typ'];?></td>
                <td><a href="upravit.php?id=<?= $radek['id'];?>">Upravit záznam</a></td>
                <td><a href="smazat.php?id=<?= $radek['id'];?>">Smazat záznam</a></td>
            </tr>
        <?php endwhile;?>
    </table>
</body>
</html>