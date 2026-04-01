<?php 
    $conn = new mysqli("localhost", "krankus", "databaze456", "it2026");

    $regiony = "SELECT * FROM regiony";
    $regiony = $conn->query($regiony);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Káva - regiony</title>
</head>
<body>
    <table>
        <tr>
            <th>Regiony</th>
            <th>Odrůdy</th>
        </tr>
        <?php while ($radek = $regiony->fetch_assoc()): ?>
            <tr>
                <td><?php echo $radek['nazev']; ?></td>
                <td>
                    <form action="odrudy.php" method="GET">
                        <input type="hidden" value="<?php echo $radek['nazev']; ?>" name="region_nazev">
                        <input type="hidden" value="<?php echo $radek['id']; ?>" name="region_id">
                        <input type="submit" value="Zobrazit">
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>