<?php
require('db.php');
$id = $_GET['id'];
if (isset($_POST['upravit'])) {
    $nazev = $_POST['nazev'];
    $typ = $_POST['typ']; 
    $uprava = "UPDATE kava SET nazev='$nazev', typ='$typ' WHERE id=$id";
    
    if ($conn->query($uprava) === TRUE) {
        header("Location: index.php?upraveno=1");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklad kávy - úprava záznamu</title>
</head>

<body>
    <?php
    $uprava_zaznam = "SELECT * FROM kava WHERE id=$id";
    //echo $uprava_zaznam;
    $uprava_zaznam = $conn->query($uprava_zaznam);
    $radek = $uprava_zaznam->fetch_assoc();
    ?>
    <h2>Úprava záznamu - <?= $radek['nazev']; ?></h2>
    <form action="upravit.php?id=<?= $id;?>" method="POST">
        <div>
            <label for="nazev">Název</label>
            <input type="text" id="nazev" name="nazev" value="<?= $radek['nazev']; ?>">
        </div>
        <div>
            <label for="typ">Typ</label>
            <input type="text" id="typ" name="typ" value="<?= $radek['typ']; ?>">
        </div>
        <div>
            <label for="region">Region</label>
            <select name="region" id="region">
                <option value="1" <?php if($radek['region_id'] == 1) echo 'selected';?>>Etiopie</option>
                <option value="2" <?php if($radek['region_id'] == 2) echo 'selected';?>>Kolumbie</option>
                <option value="3" <?php if($radek['region_id'] == 3) echo 'selected';?>>Brazílie</option>
            </select>
        </div>
        <input type="submit" value="Upravit záznam">
    </form>
</body>

</html>