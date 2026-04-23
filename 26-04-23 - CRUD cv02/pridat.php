<?php 
require('db.php');
if (isset($_POST['pridat'])) {
    $nazev = $_POST['nazev'];
    $typ = $_POST['typ'];
    $region = $_POST['region'];

    $pridat = $conn->prepare("INSERT INTO kava(nazev, typ, region_id) VALUES (?, ?, ?)");
    $pridat->bind_param("ssi", $nazev, $typ, $region);
    if($pridat->execute() === TRUE) {
        header("Location: index.php?pridano=1");
        exit();
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklad kávy - přidání nové kávy</title>
</head>
<body>
    <h2>Přidat kávu</h2>
    <form action="pridat.php" method="POST">
        <div>
            <label for="nazev">Název: </label>
            <input type="text" id="nazev" name="nazev" required>
        </div>
        <div>
            <label for="typ">Typ: </label>
            <input type="text" id="typ" name="typ">
        </div>
        <div>
            <label for="region" required>Region: </label>
            <select name="region" id="region">
                <option value="1">Etiopie</option>
                <option value="2">Kolumbie</option>
                <option value="3">Brazílie</option>
            </select>
        </div>
        <input type="submit" name="pridat" value="Přidat kávu">
    </form>
</body>
</html>