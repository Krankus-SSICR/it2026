<?php
require('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opakování k PMZ</title>
</head>
<body>
    <h2>Výpis dat</h2>
    <?php if (isset($_GET['pridano']) && $_GET['pridano'] == 1):?>
        <p style="color: green;">Záznam byl úspěšně přidán.</p>
    <?php endif;?>
    <a href="pridat.php">Přidat film</a>
    <table>
        <tr>
            <th>Název</th>
            <th>Rok vydání</th>
        </tr>
        <?php 
        $vyber = "SELECT * FROM filmy";
        $vyber = $conn->query($vyber);
        while ($radek = $vyber->fetch_assoc()):
        ?>
        <tr>
            <td><?= $radek['nazev'];?></td>
            <td><?= $radek['rok'];?></td>
        </tr>
        <?php endwhile;?>
    </table>
</body>
</html>