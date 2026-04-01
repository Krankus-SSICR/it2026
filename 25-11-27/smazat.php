<?php
    require "db.php";

    $id = $_POST['id'];

    $sql_smazat = "DELETE FROM videohry WHERE id_hra=$id";

    if ($conn->query($sql_smazat) === TRUE) {
        echo "<p>Smazal jsi záznam!</p>";
        echo "<p><a href='prehled.php'>Zpět na přehled</a></p>";
    } else {
        echo "Ajaj, tak nic no!";
    }
?>