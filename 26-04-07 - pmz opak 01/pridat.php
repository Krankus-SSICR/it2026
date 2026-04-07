<?php 
require('db.php');
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $nazev = $_POST['nazev'];
    $rok = $_POST['rok'];

    $pridat = "INSERT INTO filmy(nazev, rok) VALUES ('$nazev', '$rok')";
    $pridat = $conn->query($pridat);

    header("Location: index.php?pridano=1");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přidání filmu</title>
</head>
<body>
    <h2>Přidat film</h2>
    <form action="pridat.php" method="POST">
        <input type="text" placeholder="Název filmu" name="nazev">
        <input type="number" placeholder="Rok vydání" name="rok">
        <input type="submit" value="Přidat film">
    </form>
</body>
</html>