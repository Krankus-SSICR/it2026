<?php
$conn = new mysqli("localhost", "krankus", "databaze456", "it2026");

$region_nazev = $_GET["region_nazev"];
$region_id = $_GET['region_id'];

$sql = "SELECT kava.nazev, kava.typ, regiony.nazev AS regiony FROM kava INNER JOIN regiony ON kava.region_id=regiony.id WHERE regiony.id=$region_id";
$sql = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odrůdy - <?php echo $region_nazev; ?></title>
    <style>
        table {
            width: 80%;
        }

        td {
            padding: 7px;
            border: 2px solid navy;
        }

        th {
            background: aquamarine;
        }
    </style>
</head>

<body>
    <h2><?php echo $region_nazev; ?></h2>
    <table>
        <tr>
            <th>Název</th>
            <th>Typ</th>
        </tr>
        <?php while ($radek = $sql->fetch_assoc()): ?>
            <tr>
                <td><?php echo $radek["nazev"]; ?></td>
                <td><?php echo $radek["typ"]; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>