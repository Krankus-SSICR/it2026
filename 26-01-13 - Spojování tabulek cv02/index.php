<?php
echo "Ahoj";
require "db.php";
$kategorie = "SELECT * FROM kategorie";
$kategorie = $conn->query($kategorie);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategorie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <tr>
            <th>Název Kategorie</th>
            <th>Produkty</th>
        </tr>
        <?php while ($radek = $kategorie->fetch_assoc()): ?>
            <tr>
                <td><?php echo $radek['nazev']; ?></td>
                <td>
                    <form action="produkty.php" method="GET">
                        <input type="hidden" name="id_kategorie" value="<?php echo $radek['id_kategorie']; ?>">
                        <input type="submit" value="Zobrazit">
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>    
    </table>
</body>
</html>