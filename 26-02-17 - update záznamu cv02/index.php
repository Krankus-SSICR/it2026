<?php
require "pripojeni.php";
$skate = "SELECT * FROM skate;";
$skate = $conn->query($skate);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Záznamy - skate</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Přehled Skateboardů</h2>
    <table>
        <tr>
            <th>Název</th>
            <th>Upravit záznam</th>
        </tr>
        <?php while ($radek = $skate->fetch_assoc()): ?>
            <tr>
                <td><?= $radek["znacka"];?></td>
                <td>
                    <form action="upravit.php" method="GET">
                        <input type="hidden" value="<?= $radek["id"];?>" name="skate_id">
                        <input type="submit" value="Upravit">
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>