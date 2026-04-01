<?php
    require "pripojeni.php";
    $id = $_POST["id"];
    $sql_smazat = "DELETE FROM zavady WHERE id=$id";

    if ($conn->query($sql_smazat) === TRUE) {
        echo "<h2>Záznam úspěšně smazán</h2>";
        echo "<a href='index.php'>Návrat zpět</a>";
    } else {
        echo "<h2>Záznam se nepodařilo smazat.</h2>";
    }
?>
