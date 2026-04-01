<?php
    require "db.php";

    $sql = "SELECT * FROM videohry";
    $vyber = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přehled videoher</title>
</head>
<body>
    <h2>Přehled videoher</h2>
    <table width="90%" border="1" align="center">
        <tr>
            <th>Název</th>
            <th>Rok vydání</th>
            <th>Smazat záznam</th>
        </tr>
        <?php
        while ($row = $vyber->fetch_assoc()) {
            echo "<tr>";

            echo "<td>";
            echo $row['nazev'];
            echo "</td>";

            echo "<td>";
            echo $row['rok_vydani'];
            echo "</td>";

            echo "<td>";
            echo "<form action='smazat.php' method='POST'>";
            echo "<input type='hidden' name='id' value='$row[id_hra]'>";
            echo "<input type='submit' value='Smazat videohru'>";
            echo "</form>";
            echo "</td>";

            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>