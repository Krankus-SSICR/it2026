<?php 
    require "db.php";

    $read = "SELECT * FROM plazi";
    $read = $conn->query($read);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přehled plazů</title>
</head>
<body>
    <h2>Přehled plazů</h2>
    <a href="pridat.php"><button>Přidat plaza</button></a>
    <table width="100%" border="1">
        <tr>
            <th>Rodové jméno</th>
            <th>Druhové jméno</th>
            <th>Počet</th>
            <th>Úprava</th>
            <th>Smazat</th>
        </tr>
        <?php while ($radek = $read->fetch_assoc()):?>
            <tr>
                <td><?= $radek["rodove_jmeno"];?></td>
                <td><?= $radek["druhove_jmeno"];?></td>
                <td><?= $radek["pocet"];?></td>
                <td>
                    <form action="upravit.php" method="GET">
                        <input type="hidden" name="plaz_id" value="<?= $radek["id"];?>">
                        <input type="submit" value="Upravit záznam">
                    </form>
                </td>
                <td>
                    <form action="smazat.php" method="GET">
                        <input type="hidden" name="plaz_id" value="<?= $radek["id"];?>">
                        <input type="submit" value="Smazat záznam">
                    </form>
                </td>
            </tr>
        <?php endwhile;?>
    </table>
</body>
</html>