<?php require "db.php";
$id_zakaznik = $_GET['id'];
$objednavky = "SELECT zakaznici.jmeno, objednavky.produkt FROM zakaznici
                   INNER JOIN objednavky ON zakaznici.id_zakaznik = objednavky.zakaznik
                    WHERE zakaznici.id_zakaznik = $id_zakaznik
                    ";
$objednavky_data = $conn->query($objednavky);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přehled zákazníka</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Objednávky zákazníka:</h2>
    <table>
        <tr>
            <th>Jméno zákazníka</th>
            <th>Produkty</th>
        </tr>
        <?php while ($radek = $objednavky_data->fetch_assoc()): ?>
            <tr>
                <td><?php echo $radek['jmeno']; ?></td>
                <td><?php echo $radek['produkt']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>

</body>

</html>