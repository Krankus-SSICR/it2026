<?php include("db.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uložení rezervace - hotel Měsíc</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        $jmeno = $_POST["jmeno"];
        $prijmeni = $_POST["prijmeni"];
        $email = $_POST["email"];
        $pocet_dospelych = $_POST["dospeli"];
        $pocet_deti = $_POST["deti"];
        $check_in = $_POST["checkIn"];
        $check_out = $_POST["checkOut"];

        $sql = "INSERT INTO hoste (jmeno, prijmeni, email) VALUES ('$jmeno', '$prijmeni', '$email')";

        if ($conn->query($sql) === TRUE) {
            $hlaska = "ano";
        } else {
            $hlaska = "ne";
        }    

        $sql_2 = "INSERT INTO rezervace (datum_prijezdu, datum_odjezdu, pocet_dospelych, pocet_deti) VALUES ('$check_in', '$check_out', '$pocet_dospelych', '$pocet_deti')";

        if ($conn->query($sql_2) === TRUE) {
            $hlaska = "Úspěšne zarezervováno.";
        } else {
            $hlaska = "Data se nepodařilo uložit";
        }


        echo $hlaska;
    ?>
    <a href="index.php">Další rezervace</a>
    <a href="prehled.php">Přehled rezervací</a>
</body>
</html>