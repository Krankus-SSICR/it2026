<?php

require "db.php";
$id_kategorie = $_GET['id_kategorie'];
$title = "SELECT nazev FROM kategorie WHERE id_kategorie = $id_kategorie";
$title = $conn->query($title);
$title = $title->fetch_assoc();

$spojeni =
    "SELECT produkty.nazev AS produkt,
    kategorie.nazev AS kategorie FROM produkty
    INNER JOIN kategorie ON produkty.kategorie_produktu =
    kategorie.id_kategorie WHERE kategorie.id_kategorie = $id_kategorie";

$spojeni = $conn->query($spojeni);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title['nazev']; ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <table>
        <tr>
            <th>Produkt</th>
            <th>Kategorie</th>
        </tr>

        <?php while ($radek = $spojeni->fetch_assoc()): ?>
            <tr>
                <td><?php echo $radek['produkt'] ?></td>
                <td><?php echo $radek['kategorie'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>