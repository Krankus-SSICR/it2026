<?php
    require "db.php";
    $sql_hraci = "SELECT * FROM hraci";
    $data_hraci = $conn->query($sql_hraci);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hokej - hráči</title>
</head>
<body>
    <h2>Přehled hráčů</h2>
    <table border="1" width="80%">
        <tr>
            <th>Jméno hráče</th>
            <th>Pozice</th>
            <th>Odehrané zápasy</th>
        </tr>
        <?php while($row = $data_hraci->fetch_assoc()):?>
            <tr>
                <td><?php echo $row['jmeno'];?></td>
                <td><?php echo $row['pozice'];?></td>
                <td><a href="zapasy.php?hrac_id=<?php echo $row['id']?>">Zobrazit</a></td>
            </tr>        
        <?php endwhile; ?>
    </table>
</body>
</html>