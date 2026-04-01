<?php
include("db.php");

$sql = "SELECT * FROM hoste";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přehled rezervací - hotel Měsíc</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h2>Přehled rezervací - hotel Měsíc</h2>
    <table border="1">
        <tr>
            <th>Jméno</th>
            <th>Příjmení</th>
            <th>Email</th>
            <th>Smazat</th>
        </tr>
        <?php while($row = $result->fetch_assoc()):?>
            <tr>
                <td><?php echo $row['jmeno'];?></td>
                <td><?php echo $row['prijmeni'];?></td>
                <td><?php echo $row['email'];?></td>
                <td>
                    <form action="smazani_rezervace.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['host_id'];?>">
                        <input type="submit" value="Smazat záznam">
                    </form>
                </td>
            </tr>
        <?php endwhile ?>
    </table>

</body>

</html>