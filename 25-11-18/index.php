<?php
require "pripojeni.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evidence závad</title>
</head>

<body>
    <h2>Přehled závad</h2>
    <table border="1px" cellpadding="10px">
        <tr>
            <th>ID</th>
            <th>Jméno a příjmení</th>
            <th>Datum</th>
            <th>Popis závady</th>
            <th>Smazání záznamu</th>
        </tr>
        <?php
        $sql = "SELECT * FROM zavady";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) :
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["jmeno_prijmeni"] . "</td>";
                echo "<td>" . $row["datum"] . "</td>";
                echo "<td>" . $row["popis"] . "</td>";
                echo "<td>";

                echo "<form method='POST' action='smazat_zaznam.php'>";
                echo "<input type='hidden' name='id' value='" . $row["id"] ."'>";
                echo "<input type='submit' name='smazat' value='Smazat záznam'>";
                echo "</form>";
                
                
                
                
                echo "</td>";
                echo "</tr>";
            endwhile;
        } else {
            echo "Žádné závady nejsou evidovány";
        }
        ?>
    </table>
</body>

</html>