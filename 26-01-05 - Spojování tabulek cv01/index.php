<?php require "db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přehled zákazníků</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Přehled zákazníků</h2>
    <table>
        <tr>
            <th>Jméno zákazníka</th>
            <th>Objednávky</th>
        </tr>
        <?php 
            $vyber_zakaznici = "SELECT * FROM zakaznici";
            $data_zakaznici = $conn->query($vyber_zakaznici);
            while ($radek = $data_zakaznici->fetch_assoc()):
        ?>
        <tr>
            <td><?php echo $radek['jmeno'] ?></td>
            <td>
                <form action="objednavky.php" method="GET">
                    <input type="hidden" name="id" value="<?php echo $radek['id_zakaznik']?>">
                    <input type="submit" value="Zobrazit objednávky">
                </form>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>