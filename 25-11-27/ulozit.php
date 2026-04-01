<?php
    require "db.php";

    $nazev = $_POST['nazev'];
    $rok = $_POST['rok'];

    $sql = "INSERT INTO videohry (nazev, rok_vydani) VALUES ('$nazev', '$rok')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Záznam úspěšně přidán!</p>";
        echo "<p><a href='index.php'>Další záznam</a></p>";
        echo "<p><a href='prehled.php'>Přehled videoher</a></p>";
    } else {
        echo "Jejda!";
    }
?>