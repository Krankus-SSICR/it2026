<?php 
    require "db.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $rodove_jmeno = $_POST["rodove_jmeno"];
        $druhove_jmeno = $_POST["druhove_jmeno"];
        $pocet = $_POST["pocet"];

        $pridat = "INSERT INTO plazi (rodove_jmeno, druhove_jmeno, pocet)
        VALUES ('$rodove_jmeno', '$druhove_jmeno', '$pocet')";
        $pridat = $conn->query($pridat);

        header("Location: index.php");

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přidání záznamu</title>
</head>
<body>
    <h3>Přidat plaza</h3>
    <form action="pridat.php" method="POST">
        <input type="text" placeholder="Rodové jméno" name="rodove_jmeno" required>
        <input type="text" placeholder="Druhové jméno" name="druhove_jmeno" required>
        <input type="number" placeholder="Počet" name="pocet" required>
        <input type="hidden" name="pridano">
        <input type="submit" value="Přidat plaza">
    </form>
</body>
</html>