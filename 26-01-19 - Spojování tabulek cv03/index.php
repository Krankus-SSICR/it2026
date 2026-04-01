<?php 
    require "db.php";

    $hodnoceni = "
        SELECT filmy.nazev, hodnoceni.uzivatel, hodnoceni.hodnoceni
        FROM filmy
        INNER JOIN hodnoceni ON filmy.id = hodnoceni.film_id
    ";
     $hodnoceni = $conn->query($hodnoceni);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hodnocní filmů</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <tr>
            <th>Název filmu</th>
            <th>Jméno uživatele</th>
            <th>Hodnocení (max 10 bodů)</th>
        </tr>
        <?php while ($radek = $hodnoceni->fetch_assoc()): ?>
            <tr>
                <td><?php echo $radek['nazev'] ?></td>
                <td><?php echo $radek['uzivatel'] ?></td>
                <td><?php echo $radek['hodnoceni'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>