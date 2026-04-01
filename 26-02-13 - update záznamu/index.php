<?php
require "pripojeni.php";
$vyber = "SELECT * FROM kava";
$vyber = $conn->query($vyber);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Káva</title>
</head>
<body>
   <h2>Přehled kávy</h2>
   <table border="1px" width="80%">
        <tr>
            <th>Název</th>
            <th>Typ</th>
            <th>Úprava záznamu</th>
        </tr>
        <?php while ($radek = $vyber->fetch_assoc()): ?>
            <tr>
                <td><?= $radek['nazev'];?></td>
                <td><?= $radek['typ'];?></td>
                <td>
                    <form action="edit.php" method="GET">
                        <input type="hidden" value="<?= $radek['id'];?>" name="id">
                        <input type="hidden" value="<?= $radek['nazev'];?>" name="nazev">
                        <input type="hidden" value="<?= $radek['typ'];?>" name="typ">
                        <input type="submit" value="Editovat">
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
   </table> 
</body>
</html>