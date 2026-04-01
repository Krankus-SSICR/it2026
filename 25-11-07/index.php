<?php
    $s = "localhost";
    $u = "krankus";
    $p = "databaze456";
    $db = "it2026";

    $conn = new mysqli($s, $u, $p, $db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přehled videoher</title>
</head>
<body>
    <h2>Uložené videohry</h2>
    <table border="1px">
        <tr>
            <th>Název</th>
            <th>Žánr</th>
            <th>Rok vydání</th>
        </tr>
        <?php
            $sql = "SELECT * FROM hry";
            $vyber = $conn->query($sql);
            
            while ($row = $vyber->fetch_assoc()) {
                echo "<tr>";
                echo "<td>";
                echo $row['nazev'];
                echo "</td>";
                echo "</tr>";
            } 
        ?>
    </table>
</body>
</html>