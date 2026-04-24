<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklad kávy</title>
</head>
<body>
    <?php if(isset($_GET['pridano']) && $_GET['pridano'] == 1):?>
        <p style="color: darkgreen;">Záznam byl úspěšně přidán</p>
    <?php endif;?>
    <?php if(isset($_GET['upraveno']) && $_GET['upraveno'] == 1):?>
        <p style="color: darkgreen;">Záznam byl úspěšně upraven</p>
    <?php endif;?>
    <a href="prehled.php">Přehled skladu</a><br>
    <a href="pridat.php">Přidat novou kávu</a>
</body>
</html>